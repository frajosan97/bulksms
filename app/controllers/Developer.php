<?php

/**
 * Developer controller
 */

class Developer
{
    use Controller;

    public function index()
    {
        $data = [];
        $appData = new App;
        $this->view('Developer', $data);
    }
}
