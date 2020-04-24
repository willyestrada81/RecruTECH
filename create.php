<?php



include_once 'config/init.php';


$job = new Job;
$template = new Template('templates/job_create.php');

    if (empty($_SESSION['user'])) {
        redirect('login.php', 'Your must be logged in to access this page.', 'error');
    } else {
        if (isset($_POST['submit'])) {

            unset($_SESSION['add_errors']);
            // Create data array
            $data = array();
            $data['job_title'] = validate_job_input($_POST['job_title']);
            $data['company'] = validate_job_input($_POST['company']);
            $data['category_id'] = validate_category($_POST['category']);
            $data['description'] = validate_job_input($_POST['description']);
            $data['location'] = validate_job_input($_POST['location']);
            $data['salary'] = validate_job_input($_POST['salary']);
            $data['contact_user'] = $_POST['contact_name'];
            $data['contact_email'] = $_POST['contact_email'];
            

            if (empty($_SESSION['add_errors'])) {
                if ($job->create($data)) {
                    redirect('index.php', 'Your job has been listed', 'success');
                    exit();
                } else {
                    redirect('index.php', 'Something went wrong', 'error');

                    exit();
                }
            } else {
                redirect('create.php', 'Please fill out the required fields', 'error');
                exit();
            }
    
        } 
        if (isset($_GET['edit'])) {
            $result = $job->getJob($_GET['edit']);

            if ($_SESSION['user'] != $result->contact_email) {
                redirect('job.php?id=' . $_GET['edit'], 'Error. You are not allowed to edit this listing.', 'error');
                    exit();
            }

            
            $category = $job->getCategory($result->category_id);
            $template->isUpdate = true;
            $template->single_category = $category;
            $template->single_job = $result;
                
        }

        if (isset($_POST['update'])) {
            unset($_SESSION['add_errors']);      

            $data = array();
            $data['job_title'] = validate_job_input($_POST['job_title']);
            $data['company'] = validate_job_input($_POST['company']);
            $data['category_id'] = validate_category($_POST['category']);
            $data['description'] = validate_job_input($_POST['description']);
            $data['location'] = validate_job_input($_POST['location']);
            $data['salary'] = validate_job_input($_POST['salary']);
            $data['contact_user'] = $_POST['contact_name'];
            $data['contact_email'] = $_POST['contact_email'];
            $data['id'] = $_POST['job_id'];

            
            if (empty($_SESSION['add_errors'])) {
                if ($job->update($data)) {
                    redirect('index.php', 'Your job has been updated', 'success');
                    exit();
                } else {
                    redirect('index.php', 'Something went wrong', 'error');
                    exit();
                }
            } else {
                redirect('create.php?edit='. $_POST['job_id'] , 'Please fill out the required fields', 'error');
                exit();
            }
    
        } 
    }


$template->categories = $job->getCategories();

echo $template;

?>