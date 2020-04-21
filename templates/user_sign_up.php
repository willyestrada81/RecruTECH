<?php include 'inc/header.php'; ?>
               

<div class="container" id="job_listing">
<div class="row justify-content-md-center">
<div class="col col-lg-6">
                <?php foreach($error as $err): ?>
                    <?php print_r($error); ?>
                    <?php echo '<div class="alert alert-warning" role="alert">' . $err .'</div>'; ?>
                    <?php endforeach; ?>
<br>
    <form method="POST" action="sign_up.php">
        <img class="mb-4" src="" alt="">
        <h1 class="h3 mb-3 font-weight-normal">Create an Account</h1>
        <br>
        <label for="user_fname">First Name</label>
        <input type="text" id="user_fname" name="user_fname" class="form-control" placeholder="Ex. John" required autofocus="">
        <br>
        <label for="user_lname">Last Name</label>
        <input type="text" id="user_lname" name="user_lname" class="form-control" placeholder="Ex. Doe" required autofocus="">
        <br>
        <label for="user_email">Email</label>
        <input type="email" id="user_email" name="user_email" class="form-control" placeholder="name@company.com" required autofocus="">
        <br>
        <label for="user_password">Password</label>
        <input type="password" id="user_password" name="user_password" class="form-control" placeholder="Password" required>
        <br>
        <label for="user_company">Company Name</label>
        <input type="text" id="user_company" name="user_company" class="form-control" placeholder="Ex. Amazon">
        <br>
        <div class="checkbox mb-3">
            <label for="isAdmin">
            <input type="checkbox" id="isAdmin" name="isAdmin" value="1"> Are you an Employer?
            </label>
        </div>
        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign Up" name="submit">
    </form>
    <br>
    <p><em>Already have an account?</em><a class="link" href="login.php"> Log in here</a></p>

</div>

</div>
    
</div>
<?php include 'inc/footer.php'; ?>