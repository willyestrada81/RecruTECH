<?php include 'inc/header.php'; ?>

<div class="container" id="job_listing">
    <!-- <h4>Welcome <em><?php echo $user; ?></em></h4> -->
    <h2 class="page-header">Create a Job Listing</h2>
    <br>
    <form method="POST" action="create.php">
    <div class="form-group">
            <input id="job_id" name="job_id" value="<?php echo $single_job->id ?>" hidden>
        <label for="job_title">Job Title <small><em>(Required)</em></small></label>
        <input type="text" class="form-control" id="job_title" name="job_title" value="<?php echo $single_job->job_title ?>" placeholder="Enter a job title...">
    </div>
    <div class="form-group">
        <label for="category">Category <small><em>(Required)</em></small></label>
        <select name="category" class="form-control">
                    <?php if ($isUpdate) {
                        echo '<option selected value='. $single_category->id . '>'. $single_category->name .'</option>';
                        } 
                            echo "<option value=0>Choose Category...</option>";
                            foreach($categories as $category) {
                                echo '<option value='. $category->id .'>'. $category->name .' </option>';
                            }             
                    ?>
                </select>
        
    </div>
    <div class="form-group">
        <label for="company">Company <small><em>(Required)</em></small></label>
        <input type="text" class="form-control" id="company" name="company" value="<?php echo $single_job->company ?>" placeholder="Company name...">
    </div>
    <div class="form-group">
        <label for="description">Description <small><em>(Required)</em></small></label>
        <textarea rows="8" type="text" class="form-control" id="description" name="description" placeholder="Enter a job description or requirements..."><?php echo $single_job->description ?></textarea>
    </div>
    <div class="form-group">
        <label for="location">Location <small><em>(Required)</em></small></label>
        <input type="text" class="form-control" id="location" name="location" value="<?php echo $single_job->location ?>" placeholder="Ex. Miami, FL 33055...">
    </div>
    <div class="form-group">
        <label for="salary">Salary <small><em>(Required)</em></small></label>
        <input type="text" class="form-control" id="salary" name="salary" value="<?php echo $single_job->salary ?>" placeholder="Salary...">
    </div>
    <div class="form-group">
        <label for="contact_name">Posted by <small><em>(Required)</em></small></label>
        <?php if (!empty($_SESSION['user'])){ ?>
            <input type="text" class="form-control" id="contact_name" name="contact_name" value="<?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?>" readonly>
        <?php } else { ?>
            <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Enter your name...">
        <?php }; ?>
    </div>
    <div class="form-group">
        <label for="contact_email">Contact Email <small><em>(Required)</em></small></label>
        <?php if (!empty($_SESSION['user'])){ ?>
            <input type="email" class="form-control" id="contact_email" name="contact_email" value="<?php echo $_SESSION['user']; ?>" readonly>
        <?php } else { ?>
            <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="example@example.com">
        <?php }; ?>
    </div>
    <br>
    <div class="form-group">
        <?php if ($isUpdate) {
            echo '<input type="submit" class="btn btn-lg btn-primary btn-block" value="Update" name="update">';
            } else {
            echo '<input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit" name="submit">';             
            }
        ?>
        
    </div>
    </form>
</div>
<?php include 'inc/footer.php'; ?>