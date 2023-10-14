<?php

/**
 * Service controller
 */

class Service
{
    use Controller;

    public function index($reqServ = "")
    {
        $data = [];
        $appData = new App;
        $services = $appData->servList();
        foreach ($services as $key => $value) {
            if ($key == $reqServ) {
                $servInfo = $value;
            }
        }
        if (isset($servInfo)) {
            $data['servInfo'] = $servInfo;
        }
        $this->view('Service', $data);
    }
}
