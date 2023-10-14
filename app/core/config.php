<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    /** Localhost server */
    define('DBNAME', 'bulksms');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');
    /** get document root for localhost */
    defined('SITE_ROOT') ? null : define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . 'projects/bulkSMS');
    $THIS_FILE = str_replace('\\', '/', __File__);
    $DOC_ROOT = $_SERVER['DOCUMENT_ROOT'];
    $ROOT =  str_replace(array($DOC_ROOT, "app/core/config.php"), '', $THIS_FILE);
    // show errors on localhost
    define("DEBUG", true);
} else {
    define('DBNAME', 'hencangr_bulksms');
    define('DBHOST', 'localhost');
    define('DBUSER', 'hencangr_francis');
    define('DBPASS', 'Frajosan97@001');
    define('DBDRIVER', '');
    /** get document root for online server */
    define('SERVERNAME', explode('/', $_SERVER['DOCUMENT_ROOT']));
    $ROOT = str_replace($_SERVER['SCRIPT_URL'], '/', $_SERVER['SCRIPT_URI']);
    defined('SITE_ROOT') ? null : define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . '/');
    // don't show errors on localhost
    define("DEBUG", false);
}
