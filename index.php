 <?php 
 
 ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'config/init.php';

$job = new Job;
$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category) {
    $template->jobs = $job->getByCategory($category);
    $template->title = "Jobs in ".$job->getCategory($category)->name;
} else {
    $template->jobs = $job ->getAllJobs();
    $template->title = "All Jobs";
}

$template->categories = $job->getCategories();

echo $template;

?>