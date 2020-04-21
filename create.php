<?php

// error_reporting(E_ALL);
// ini_set("display_errors", 1);
// include("file_with_errors.php");

include_once 'config/init.php';

$job = new Job;
$template = new Template('templates/job_create.php');


    if (isset($_POST['submit'])) {
        // Create data array
        $data = array();
        $data['job_title'] = $_POST['job_title'];
        $data['company'] = $_POST['company'];
        $data['category_id'] = $_POST['category'];
        $data['description'] = $_POST['description'];
        $data['location'] = $_POST['location'];
        $data['salary'] = $_POST['salary'];
        $data['contact_user'] = $_POST['contact_name'];
        $data['contact_email'] = $_POST['contact_email'];
    
        if ($job->create($data)) {
            redirect('index.php', 'Your job has been listed', 'success');
        } else {
            redirect('index.php', 'Something went wrong', 'error');
        }
    }




$template->categories = $job->getCategories();

echo $template;

?>