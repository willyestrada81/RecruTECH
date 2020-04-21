<?php

// error_reporting(E_ALL);
// ini_set("display_errors", 1);
// include("file_with_errors.php");

include_once 'config/init.php';

$user = new User;
$template = new Template('templates/user_login.php');

$errors = array();
$user_returned = '';

if (isset($_GET['isLoggedIn'])) {
    $_SESSION['message'] = "You must be logged in to create a listing.";
    $_SESSION['message_type'] = "error";
    displayMessage();
}

if (isset($_POST['submit'])) {
    // Create data array
    
    $data = array();
    $data['user_email'] = $_POST['user_email'];
    $data['user_password'] = $_POST['user_password'];

    if (empty($data['user_email']) || empty($data['user_password'])) {
        global $errors;
        if (empty($data['user_email'])) {
            $errors['email_error'] = 'Username is required';
        }
        if (empty($data['user_password'])) {
            $errors['pass_error'] = 'Password is required';
        }
        redirect('login.php', 'Please check the errors', 'error');
    } else {
        $result = $user->getUser($data);

        if ($result) {
            if (password_verify($data['user_password'], $result->user_password)){
                $user_returned = $result;
                $_SESSION['user'] = $result->user_email;
                $_SESSION['pass'] = $result->user_password;
                $_SESSION['fname'] = $result->user_fname;
                $_SESSION['lname'] = $result->user_lname;
                $_SESSION['isAdmin'] = $result->isAdmin;

                if ($result->isAdmin) {

                    redirect('create.php', 'Successfuly logged in.', 'success');
                } else {
                    redirect('index.php', 'Successfuly logged in.', 'success');

                }

            } else {
                redirect('login.php', 'Invalid password. Please try again', 'error');
            }
        } else {
            redirect('sign_up.php', 'No user by that email found. Please sign up', 'error');
        }
    }
    
}

$template ->error = $errors;
$template ->user = $user_returned;
echo $template;

?>