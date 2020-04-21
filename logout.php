<?php

// error_reporting(E_ALL);
// ini_set("display_errors", 1);
// include("file_with_errors.php");

  include_once 'config/init.php';

  $template = new Template('templates/user_login.php');


  if (isset($_SESSION['user']))
  {
    session_destroy();
    redirect('login.php', 'You successfuly logged out.', 'success');
  }
  else if (isset($_GET["current_page"])) {
      $current_page = isset($_GET["current_page"]);
    redirect($current_page, 'You are not logged in.', 'error');
  }

  echo $template;
?>
