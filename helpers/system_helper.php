<?php


    function redirect($page = FALSE, $message = NULL, $message_type = NULL) {
        if (is_string ($page)) {
            $location = $page;
        } else {
            $location = $_SERVER['SCRIPT_NAME'];
        }

        // Check for message

        if ($message != NULL) {
            // Set message
            $_SESSION['message'] = $message;
        }
        // Check for Type
        if ($message_type != NULL) {
            // Set message
            $_SESSION['message_type'] = $message_type;
        }

        // Redirect
        header('Location:'.$location);
        exit;
    }


        // Display Messages
    function displayMessage() {
            if (!empty($_SESSION['message'])) {
                
                // Assign message variable
                $message = $_SESSION['message'];


            if (!empty($_SESSION['message_type'])) {
                // Assign type variable
                $message_type = $_SESSION['message_type'];
                if ($message_type == 'error') {
                    echo '<div class="container" id="alert-msg">';
                    echo '<div class="row justify-content-md-center">';
                    echo     '<div class="col col-lg-6">';
                    echo '<div class="alert alert-danger" role="alert">' . $message .'</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                } elseif ($message_type == 'success') {
                    echo '<div class="container" id="alert-msg">';
                    echo '<div class="row justify-content-md-center">';
                    echo     '<div class="col col-lg-6">';
                    echo '<div class="alert alert-success" role="alert">' . $message .'</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }
        // Unset message
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
        } else {
            echo '';
        }
    }
    function displayErrors() {
            if (!empty($_SESSION)) {

                foreach(array_values($_SESSION) as $values) {
                    echo '<div class="container" id="alert-warning">';
                        echo '<div class="row justify-content-md-center">';
                        echo     '<div class="col col-lg-6">';
                        echo '<div class="alert alert-warning" role="alert"><em>' . $values .'</em></div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                }

        // Unset message
        unset($_SESSION['fname_errors']);
        unset($_SESSION['lname_errors']);
        unset($_SESSION['email_errors']);
        unset($_SESSION['pass_errors']);
        } else {
            echo '';
        }
    }

    function isLoggedIn() {
        if (!empty($_SESSION['user'])) {
            return true;
        } else {
            return false;
        }
    }
    function isAdmin() {
        if (!empty($_SESSION['isAdmin']) && $_SESSION['isAdmin']) {
            return true;
        } else {
            return false;
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
    
    function validate_fname($fname) {
        if ($fname == "") {
            $_SESSION['fname_errors'] = 'First name is required';
        }
        else {
            return $fname;
        }
    }
    
    
    function validate_lname($lname) {
        if ($lname == "") {
            $_SESSION['lname_errors'] = 'Last name is required';
        } else {
            return $lname;
        }
    }
    
    function validate_email($email) {
        if ($email == "") {
            $_SESSION['email_errors'] = "Email is Required";
        }
        else if (!((strpos($email, ".") > 0) && (strpos($email, "@") > 0)) || preg_match("/[^a-zA-Z0-9.@_-]/", $email))
                    {
                        $_SESSION['email_errors'] = "The Email address is invalid";
                    }
        else {
            return $email;
        }
    }
    
    function validate_password($password) {
        if ($password == "") {
            $_SESSION['pass_errors'] = "No Password was entered";
    
        }
        else if (strlen($password) < 6) {
            $_SESSION['pass_errors'] = "Passwords must be at least 6 characters";
    
        }
        else if (!preg_match("/[a-z]/", $password) || !preg_match("/[A-Z]/", $password) || !preg_match("/[0-9]/", $password)) 
                 {
                    $_SESSION['pass_errors'] = "Passwords require 1 each of a-z, A-Z and 0-9";
    
                 }
        else {
            return password_hash($password, PASSWORD_DEFAULT);
        }
    }

    function validate_job_input($field, &$error) {
        if ($field == '') {
            $error[] = "This field is required";
            return null;
        }
    }