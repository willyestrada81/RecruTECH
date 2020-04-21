<?php include 'inc/header.php'; ?>

<div class="container" id="job_listing">
    <!-- <h4>Welcome <em><?php echo $user; ?></em></h4> -->
    <h2 class="page-header">Create a Job Listing</h2>
    <br>
    <form method="POST" action="create.php">
    <div class="form-group">
        <label for="job_title">Job Title</label>
        <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Enter a job title...">
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <select name="category" class="form-control">
                    <option value=0>Choose Category...</option>
                    <?php foreach($categories as $category): ?>
                    <option value=<?php echo $category->id; ?>><?php echo $category->name; ?></option>
                    <?php endforeach; ?>
                </select>
        
    </div>
    <div class="form-group">
        <label for="company">Company</label>
        <input type="text" class="form-control" id="company" name="company" placeholder="Company name...">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea rows="8" type="text" class="form-control" id="description" name="description" placeholder="Enter a job description or requirements..."></textarea>
    </div>
    <div class="form-group">
        <label for="location">Location</label>
        <input type="text" class="form-control" id="location" name="location" placeholder="Ex. Miami, FL 33055...">
    </div>
    <div class="form-group">
        <label for="salary">Salary</label>
        <input type="text" class="form-control" id="salary" name="salary" placeholder="Salary...">
    </div>
    <div class="form-group">
        <label for="contact_name">Posted by</label>
        <?php if (!empty($_SESSION['user'])){ ?>
            <input type="text" class="form-control" id="contact_name" name="contact_name" value="<?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?>" readonly>
        <?php } else { ?>
            <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Enter your name...">
        <?php }; ?>
    </div>
    <div class="form-group">
        <label for="contact_email">Contact Email</label>
        <?php if (!empty($_SESSION['user'])){ ?>
            <input type="email" class="form-control" id="contact_email" name="contact_email" value="<?php echo $_SESSION['user']; ?>" readonly>
        <?php } else { ?>
            <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="example@example.com">
        <?php }; ?>
    </div>
    <br>
    <div class="form-group">
        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit" name="submit">
    </div>
    </form>
</div>
<?php include 'inc/footer.php'; ?>