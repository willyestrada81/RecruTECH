<?php
    // DB Params

    $url=parse_url(getenv(CLEARDB_DATABASE_URL));
    define("DB_HOST", $url);
    define("DB_USER", "bef430aeb3aa43");
    define("DB_PASS", "7fea6810");
    define("DB_NAME", "job_listing");

    define("SITE_TITLE", "JOBBIES");