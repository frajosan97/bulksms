<?php

class App
{
    private $controller = 'Home';
    private $method = 'index';
    private function splitUrl()
    {
        $URL = $_GET['url'] ?? 'home';
        $URL = explode("/", trim($URL, "/"));

        return $URL;
    }

    public function loadController()
    {
        $URL = $this->splitUrl();

        $fileName = "../app/controllers/" . ucfirst($URL[0]) . ".php";
        /** select controller */
        if (file_exists($fileName)) {
            require $fileName;
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);
        } else {
            $fileName = "../app/controllers/_404.php";
            require $fileName;
            $this->controller = "_404";
        }

        $controller = new $this->controller;
        /** select method */
        if (!empty($URL[1])) {
            if (method_exists($controller, $URL[1])) {
                $this->method = $URL[1];
                unset($URL[1]);
            }
        }

        call_user_func_array([$controller, $this->method], $URL);
    }

    public function appInfo()
    {
        return array(
            "appName" => "hencan group bulk sms",
            "appDesc" => "Reach a large number of customers on all available channels with one API request. Send alert notifications to iOS, android devices, and web browsers using a single API.",
            "appSK" => "Bulk SMS,sms,API,bulk,hencan,group,servers,server,web hosting,domain,domains",
            "smsPrice" => "0.8"
        );
    }

    public function clients()
    {
        $clientModel = new ClientModel;
        $clients = $clientModel->fetchAll();

        return $clients;
    }

    public function servList()
    {
        return array(
            "bulk_sms" => array(
                "title" => "bulk sms",
                "icon" => "fa-sms",
                "short_desc" => "Reach a large number of customers on all available channels with one API request. Send alert notifications to iOS, android devices, and web browsers using a single API.",
                "long_desc" => ""
            ),
            "ussd" => array(
                "title" => "USSD",
                "icon" => "fa-star",
                "short_desc" => "Provides API for Unstructured Supplementary Service Data (USSD) across all the major operations and for sending SMS between mobiles and application programs.",
                "long_desc" => ""
            ),
            "shortcodes" => array(
                "title" => "Shortcodes",
                "icon" => "fa-star",
                "short_desc" => "Offers short codes for sending a large number of messages. In case, if the long code is used for high-volume messages, there may be chances that it can be noted as spam.",
                "long_desc" => ""
            ),
            "airtime" => array(
                "title" => "Airtime",
                "icon" => "fa-phone",
                "short_desc" => "Provide airtime distribution services to mobile phone users with instant notifications about delivery or failure. Our Airtime APIs have discounts on every transaction saving money.",
                "long_desc" => ""
            ),
            "domain_names" => array(
                "title" => "Domain names",
                "icon" => "fa-server",
                "short_desc" => "Search for your prefered domain name in kenya and register it with us we are accredited by KENIC",
                "long_desc" => ""
            ),
            "mpesa_intergration" => array(
                "title" => "M-Pesa Intergration",
                "icon" => "fa-exchange-alt",
                "short_desc" => "Add M-Pesa payments to your websites or systems. These include C2B, B2C, B2B and M-Pesa Express.",
                "long_desc" => ""
            ),
        );
    }

    public function sendSMS($smsInfo)
    {
        $phoneNumber = $smsInfo['to'];
        $message = $smsInfo['message'];

        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://sms.hencangroup.co.ke/api/services/sendsms/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 15,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
                    "apikey":"22a9556019ab981130acb7dbdcd83be7",
                    "partnerID":"8553",
                    "message":"' . $message . '",
                    "shortcode":"JuaMobile",
                    "mobile":"' . smartPhone($phoneNumber) . '"
                  }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            )
        );

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }
}

$app = new App;
