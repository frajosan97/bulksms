<?php

/**
 * Home controller
 */

class Home
{
    use Controller;

    public function index()
    {
        $data = [];
        $appData = new App;
        $data['home_service'] = $appData->servList();
        $this->view('Home', $data);
    }
}
