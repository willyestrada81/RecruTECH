<?php

include_once 'config/init.php';

$job = new Job;
$template = new Template('templates/job-single.php');

$job_id = isset($_GET['id']) ? $_GET['id'] : null; //param taken from the URL

$template->job = $job->getJob($job_id);

echo $template;

?>
