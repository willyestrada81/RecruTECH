<?php

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