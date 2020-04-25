<?php


include_once 'config/init.php';


$job = new Job;

    if (isset($_GET['delete_job'])) {
            if (empty($_SESSION['user'])) {
        redirect('login.php', 'Your must be logged in to access this page.', 'error');
    } else{
            $job_id = $_GET['delete_job'];
            print_r($job_id);
            if ($job->delete($job_id)) {
                 redirect('index.php', 'The listing has been deleted', 'success');
                    exit();
            } else {
                 redirect('job.php?id='. $job_id , 'Something went wrong, please try again', 'error');
                    exit();
            }
        }
    }

?>