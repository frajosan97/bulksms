<?php

/**
 * Request controller
 */

class Request
{
    use Controller;

    public function index()
    {
        $data = [];
        $this->view('Request', $data);
    }

    public function read()
    {
        $appData = new App;
        $allClients = $appData->clients();
        if ($allClients) {
            foreach ($allClients as $key => $value) {
                if ($value->client_key == $_POST['clientKey']) {
                    $clientInfo = $value;
                }
            }
            if (isset($clientInfo)) {
                echo "<input type='hidden' value='" . $_POST['clientKey'] . "' id='clientKey'/>";
                echo "<div class='table-responsive'>";
                echo "<table class='table table-bordered table-condensed table-sm'>";
                echo "<tbody>";
                foreach ($clientInfo as $clKey => $clValue) {
                    switch ($clKey) {
                        case 'status':
                            echo "<tr><th class='pw-20'>" . $clKey . "</th><td>" . status($clValue) . "</td></tr>";
                            break;
                        default:
                            echo "<tr><th class='pw-20'>" . $clKey . "</th><td>" . $clValue . "</td></tr>";
                            break;
                    }
                }
                echo "</tbody>";
                echo "<tfoot>";
                echo "<tr><th>Action</th><td><select class='btn btn-sm text-start border' onchange='updateStatus(this)'><option>--select status to update--</option>";
                foreach (STATUS as $key => $value) {
                    echo "<option value='" . $key . "'>" . ucwords($value['option']) . "</option>";
                }
                echo "</select></td></tr>";
                echo "</tfoot>";
                echo "</table>";
                echo "</div>";
            } else {
                echo "No match found!";
            }
        } else {
            echo "No match found!";
        }
    }

    function update()
    {
        $appData = new App;
        $clientModel = new ClientModel;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if ($clientModel->validate($_POST)) {
                if (!($clientModel->update($_POST['client_key'], array("status" => $_POST['status']), "client_key"))) {
                    $clientModel->errors[] = "Client status updated successfully!";
                } else {
                    $clientModel->errors[] = "Error updating client status, kindly try again!";
                }
            }
            // loop errors
            echo implode("<br>", $clientModel->errors);
        }
    }
}
