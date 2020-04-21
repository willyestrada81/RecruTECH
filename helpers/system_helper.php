<?php
    $input_errors = array();

    //Redirect to page

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

    function displayErrors($erros) {

        // Check for message

        if ($errors != NULL) {
            foreach ($erros as $error) {
                // Set message
                $_SESSION['error'] = $error;
                echo '<div class="alert alert-warning" role="alert">' . $error .'</div>';
            }
        } else {
            echo '';
        }
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

    function validate_fname($fname) {
        global $input_errors;
        if ($fname == "") {
            $input_errors['fname_error'] = 'First name is required';
            return NULL;
        }
        else {
            return $fname;
        }
    }

    
    function validate_lname($lname) {
        if ($lname == "") {
            $fails['lname_error'] = 'Last name is required';
            return NULL;
        } else {
            return $lname;
        }
    }
    
    function validate_email($email) {
        if ($email == "") {
            $fails['email_error'] = "Email is Required";
            return NULL;
        }
        else if (!((strpos($email, ".") > 0) && (strpos($email, "@") > 0)) || preg_match("/[^a-zA-Z0-9.@_-]/", $email))
                    {
                        $fails['email_error'] = "The Email address is invalid";
                        return NULL;
                    }
        else {
            return $email;
        }
    }
    
    function validate_password($password) {
        global $input_errors;
        if ($password == "") {
            $input_errors['password_error'] = "No Password was entered";
            return null;
        }
        else if (strlen($password) < 6) {
            $input_errors['password_error'] = "Passwords must be at least 6 characters";
            return null;
        }
        else if (!preg_match("/[a-z]/", $password) || !preg_match("/[A-Z]/", $password) || !preg_match("/[0-9]/", $password)) 
                 {
                    $input_errors['password_error'] = "Passwords require 1 each of a-z, A-Z and 0-9";
                    return null;
                 }
        else {
            return password_hash($password, PASSWORD_DEFAULT);
        }
    }