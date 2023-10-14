<?php

/** defaut system time zone */
date_default_timezone_set("Africa/Nairobi");
/** page roots */
define("ROOT", $ROOT);
define("APPINFO", $app->appInfo());
define("SERVICES", $app->servList());
define(
    "STATUS",
    array(
        "1" => array(
            "status" => "new client",
            "option" => "new client",
            "bg" => "primary",
        ),
        "2" => array(
            "status" => "approved and registered",
            "option" => "approve",
            "bg" => "success",
        ),
        "3" => array(
            "status" => "declined",
            "option" => "decline",
            "bg" => "danger",
        )
    )
);
