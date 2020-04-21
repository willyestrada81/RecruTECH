<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Search</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
            <header>
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <div class="container">
                        <a class="navbar-brand" href="index.php">RecruTECH</a>
                        <div class="navbar-links">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                <?php $isLoggedIn = isLoggedIn(); ?>
                                   <?php if ($isLoggedIn) { ?>
                                        <?php $display = 'none'; ?>
                                   <?php } else { ?>
                                        <?php $display = 'in-line'; ?>
                                   <?php } ?>
                                    <a style="display:<?php echo $display; ?>;" class="nav-link" href='login.php'>Log in</a>
                                </li>
                                <li class="nav-item">
                                    <a style="display:<?php echo $display; ?>;" class="nav-link" href='sign_up.php'>Sign up</a>
                                </li>
                                <li class="nav-item">
                                    <?php $isLoggedIn = isLoggedIn(); ?>
                                    <?php $isAdmin = isAdmin(); ?>
                                   <?php if ($isLoggedIn && $isAdmin) { ?>
                                        <?php $create_href = 'create.php'; ?>
                                   <?php } else if ($isLoggedIn && !$isAdmin) { ?>
                                      <?php  $create_href = 'error_page.php'; ?>
                                   <?php } else { ?>
                                      <?php  $create_href = 'login.php?isLoggedIn=false'; ?>
                                   <?php } ?>
                                    <a class="nav-link" href=<?php echo $create_href; ?>>Create New Listing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php?current_page=<?php echo 'http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]'; ?>">Log out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </nav>
            </header>
                        <?php displayMessage(); ?>

        
        

