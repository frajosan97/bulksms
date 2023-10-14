<?php

function isMobile()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function show($urlContent)
{
    echo "<pre>";
    print_r($urlContent);
    echo "</pre>";
}

function esc($str)
{
    return htmlspecialchars($str);
}

function redirect($path)
{
    header("Location: " . ROOT . $path);
    die;
}

function smartPhone($phone)
{
    if (is_numeric($phone)) {
        $phone = ltrim($phone, "0");
        $phone = ltrim($phone, "254");
        $phone = ltrim($phone, "+");
        $phone = ltrim($phone, "+254");
        $phone = '254' . $phone;
    }

    return $phone;
}

function status($status = "")
{
    $statusBtn = "<button class='btn btn-sm btn-secondary'>Unknown</button>";
    foreach (STATUS as $key => $value) {
        if ($status == $key) {
            $statusBtn = "<button class='btn btn-sm btn-" . $value['bg'] . "'>" . ucwords($value['status']) . "</button>";
        }
    }

    return $statusBtn;
}
