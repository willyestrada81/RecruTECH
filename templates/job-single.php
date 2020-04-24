<?php include 'inc/header.php'; ?>
<div class="container" id="job_listing">
    <h3 class="job-title"><?php echo $job->job_title; ?></h3>
    <h4><em><?php echo $job->location; ?></em></h4>
    <br>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><small><em>Posted By: <?php echo $job->contact_user; ?>, on <?php echo $job->post_date; ?></em></small></li>
    </ul>
    <br>
    <br>
    <p><?php echo $job->description; ?></p>
    <br>
    <br>

    <ul class="list-group list-group-flush">
        <li class="list-group-item">Category: <?php echo $category ?></li>
        <li class="list-group-item">Company: <?php echo $job->company; ?></li>
        <li class="list-group-item">Salary: <?php echo $job->salary; ?></li>
        <li class="list-group-item">How to Apply: <?php echo $job->contact_email; ?></li>
    </ul>
    <br>
    <br>
    <a class="btn btn-primary" href="index.php">Go back...</a>

    <?php if (isset($_SESSION['user'])) {
        if ($_SESSION['user'] == $job->contact_email) {
            echo '<a class="btn btn-outline-primary" name="edit" href=create.php?edit='.$job->id.'>Edit</a>';
        }
    }?>
</div>

<?php include 'inc/footer.php'; ?>