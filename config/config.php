<?php
    // DB Params


    define("DB_HOST", $_ENV["DATABASE_URL"]);
    define("DB_USER", $_ENV["USER"]);
    define("DB_PASS", $_ENV["PASS"]);
    define("DB_NAME", $_ENV["DB"]);


    // define("DB_HOST", "us-cdbr-iron-east-01.cleardb.net");
    // define("DB_USER", "bef430aeb3aa43");
    // define("DB_PASS", "7fea6810");
    // define("DB_NAME", "heroku_6dc20e74f6a81ea");

    // define("DB_HOST", "localhost");
    // define("DB_USER", "williamE");
    // define("DB_PASS", "password");
    // define("DB_NAME", "job_listing");

    define("SITE_TITLE", "JOBBIES");