<?php

trait Controller
{
    public function view($name, $data = [])
    {
        $sno = 1;

        if (!empty($data))
            extract($data);

        $temp = "../app/views/common/temp.view.php";
        $originalFileName = "../app/views/" . strtolower($name) . ".view.php";

        if (file_exists($temp)) {
            if (file_exists($originalFileName)) {
                $fileName = $originalFileName;
            } else {
                $fileName = "../app/views/404.view.php";
            }

            /** require the template */
            require $temp;
        } else {
            echo "Error Loading system template!";
        }
    }
}
