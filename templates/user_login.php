<?php include 'inc/header.php'; ?>

<div class="container" id="job_listing">
<div class="row justify-content-md-center">
<div class="col col-lg-6">
<br>
    <form method="POST" action="login.php">
        <img class="mb-4" src="" alt="">
        <h1 class="h3 mb-3 font-weight-normal">Welcome back, please log in.</h1>
        <br>
        <br>
        <label for="user_email">Email</label>
        <input type="email" id="user_email" name="user_email" class="form-control" placeholder="name@company.com" autofocus="">
        <br>
        <label for="user_password">Password</label>
        <input type="password" id="user_password" name="user_password" class="form-control" placeholder="Password">
        <br>
        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Log in" name="submit">
    </form>
    <br>
    <p><em>Don't have an account?</em><a class="link" href="sign_up.php"> Sign up here</a></p>
</div>

</div>
    
</div>
<?php include 'inc/footer.php'; ?>