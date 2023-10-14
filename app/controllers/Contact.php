<?php

/**
 * Contact controller
 */

class Contact
{
    use Controller;

    public function index()
    {
        $data = [];
        $appData = new App;
        $this->view('Contact', $data);
    }
}
