<?php

// error_reporting(E_ALL);
// ini_set("display_errors", 1);
// include("file_with_errors.php");


include_once 'config/init.php';



$user = new User;
$template = new Template('templates/user_sign_up.php');


if (isset($_POST['submit'])) {
    // Create data array
    $data = array();

    $data['user_fname'] = validate_fname($_POST['user_fname']);
    $data['user_lname'] = validate_lname($_POST['user_lname']);
    $data['user_email'] = validate_email($_POST['user_email']);
    $data['user_password'] = validate_password($_POST['user_password']);
    $data['user_company'] = $_POST['user_company'];
    $data['isAdmin'] = $_POST['isAdmin'];


    $user_exist = check_user($data, $user);

    if ($user_exist) {
        redirect('sign_up.php', 'A user with that email already exist, please log in instead.', 'error');
    } 
    else {
        if (!empty($_SESSION)) {
            redirect('sign_up.php', 'Please fix the below errors', 'error');
        } else {
            if ($user->createUser($data)) {
                redirect('login.php', 'Success. Please log in', 'success');
            } else {
                redirect('sign_up.php', 'Something went wrong, please try again.', 'error');
            }
        }

    }


}


// $template->error ;
echo $template;

