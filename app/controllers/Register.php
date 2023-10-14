<?php

/**
 * Register controller
 */

class Register
{
    use Controller;

    public function index()
    {
        $data = [];
        $this->view('Register', $data);
    }

    public function create()
    {
        $appData = new App;
        $clientModel = new ClientModel;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if ($clientModel->validate($_POST)) {
                if (!($clientModel->fetch(array("client_key" => $_POST['client_key'])))) {
                    if (!($clientModel->fetch(array("username" => $_POST['username'])))) {
                        foreach ($_POST as $key => $value) {
                            $regData[$key] = $value;
                        }
                        if (!($clientModel->insert($regData))) {
                            // send confirmation SMS
                            $clientSMS = array("to" => $_POST['phone_number'], "message" => "Hi " . ucwords($_POST['first_name']) . ", your request for bulk sms account creation has been received, you will receive an SMS shortly containing your username and password. Regards: Hencan Bulk SMS");
                            $userSMS = array("to" => "0796594366", "message" => "There is a new request for account creation, kindly attend on it as fast as possible. Track ID: " . $_POST['client_key']);
                            $appData->sendSMS($clientSMS);
                            $appData->sendSMS($userSMS);
                            $clientModel->errors[] = "Account registration was successfull, kindly wait for the confirmation from the registrar via provided phone number shortly!";
                        } else {
                            $clientModel->errors[] = "Error registering account, kindly try again later!";
                        }
                    } else {
                        $clientModel->errors[] = "You cannot use this username for it is already taken!";
                    }
                } else {
                    $clientModel->errors[] = "You cannot reregister the same record again, kindly wait for registrar response!";
                }
            }
            // loop errors
            echo implode("<br>", $clientModel->errors);
        }
    }
}
