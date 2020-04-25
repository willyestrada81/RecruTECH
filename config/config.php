<?php
    // DB Params

    // include_once 'env.php';

    $DB_HOST = getenv('DATABASE_URL');
    $DB_USER = getenv('USER');
    $DB_PASS = getenv('PASS');
    $DB_NAME = getenv('DB');

    define("DB_HOST", $DB_HOST);
    define("DB_USER", $DB_USER);
    define("DB_PASS", $DB_PASS);
    define("DB_NAME", $DB_NAME);


    // define("DB_HOST", "us-cdbr-iron-east-01.cleardb.net");
    // define("DB_USER", "bef430aeb3aa43");
    // define("DB_PASS", "7fea6810");
    // define("DB_NAME", "heroku_6dc20e74f6a81ea");

    // define("DB_HOST", "localhost");
    // define("DB_USER", "williamE");
    // define("DB_PASS", "password");
    // define("DB_NAME", "job_listing");

    define("SITE_TITLE", "JOBBIES");