<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
include("file_with_errors.php");

include_once 'config/init.php';


$job = new Job;
$template = new Template('templates/job_create.php');

    if (empty($_SESSION['user'])) {
        redirect('login.php', 'Your must be logged in to access this page.', 'error');
    } else {
        if (isset($_POST['submit'])) {
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
            
            print_r($_POST['category']);
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
    }





$template->categories = $job->getCategories();

echo $template;

?>