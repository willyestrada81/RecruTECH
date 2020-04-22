<?php

// error_reporting(E_ALL);
// ini_set("display_errors", 1);
// include("file_with_errors.php");

include_once 'config/init.php';

$add_job_errors = array();
$job = new Job;
$template = new Template('templates/job_create.php');

    if (empty($_SESSION['user'])) {
        redirect('login.php', 'Your must be logged in to access this page.', 'error');
    } else {
        if (isset($_POST['submit'])) {
            // Create data array
            $data = array();
            $data['job_title'] = validate_job_input($_POST['job_title'], $add_job_errors);
            $data['company'] = validate_job_input($_POST['company'], $add_job_errors);
            $data['category_id'] = validate_job_input($_POST['category'], $add_job_errors);
            $data['description'] = validate_job_input($_POST['description'], $add_job_errors);
            $data['location'] = validate_job_input($_POST['location'], $add_job_errors);
            $data['salary'] = validate_job_input($_POST['salary'], $add_job_errors);
            $data['contact_user'] = $_POST['contact_name'];
            $data['contact_email'] = $_POST['contact_email'];
            
            if (empty($add_job_errors)) {
                if ($job->create($data)) {
                    redirect('index.php', 'Your job has been listed', 'success');
                } else {
                    redirect('index.php', 'Something went wrong', 'error');
                }
            } else {
                redirect('create.php', 'Please fill out the required fields', 'error');
            }
    
        }
    }





$template->categories = $job->getCategories();

echo $template;

?>