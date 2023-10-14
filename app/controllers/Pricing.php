<?php

/**
 * Pricing controller
 */

class Pricing
{
    use Controller;

    public function index()
    {
        $data = [];
        $appData = new App;
        $this->view('Pricing', $data);
    }
}
