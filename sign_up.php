<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
include("file_with_errors.php");


include_once 'config/init.php';


$user = new User;
$template = new Template('templates/user_sign_up.php');


if (isset($_POST['submit'])) {
    // Create data array
    $data = array();

    $data['user_fname'] = validate_lname($_POST['user_fname']);
    $data['user_lname'] = validate_lname($_POST['user_lname']);
    $data['user_email'] = validate_email($_POST['user_email']);
    $data['user_password'] = validate_password($_POST['user_password']);
    $data['user_company'] = $_POST['user_company'];
    $data['isAdmin'] = $_POST['isAdmin'];
    // $data['user_fname'] = validate_lname($_POST['user_fname'], $errors);
    // $data['user_lname'] = validate_lname($_POST['user_lname'], $errors);
    // $data['user_email'] = validate_email($_POST['user_email'], $errors);
    // $data['user_password'] = validate_password($_POST['user_password'], $errors);
    // $data['user_company'] = $_POST['user_company'];
    // $data['isAdmin'] = $_POST['isAdmin'];


    $user_exist = check_user($data, $user);
    print_r($user_exist);
    if ($user_exist) {
        redirect('sign_up.php', 'A user with that email already exist, please log in instead.', 'error');
    } 
    else {
        if ($input_errors) {
            redirect('sign_up.php', 'Please check the errors', 'error');
        } else {
            if ($user->createUser($data)) {
                redirect('login.php', 'Success. Please log in', 'success');
            } else {
                redirect('sign_up.php', 'Something went wrong, please try again.', 'error');
            }
        }

    }


}

    
function check_user($user_data, &$user) {
    $result = $user->getUser($user_data);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

print_r($input_errors);
$template->error = $input_errors;
echo $template;