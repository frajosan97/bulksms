<?php

/**
 * ClientModel Model
 */

class ClientModel
{
    use Model;

    protected $table = 'clients';
    protected $limit = 10000000000;
    protected $allowedColumns = [
        "client_key",
        "account_type",
        "business_name",
        "business_phone",
        "business_address",
        "username",
        "first_name",
        "last_name",
        "phone_number",
        "email",
        "status"
    ];

    public function validate($data)
    {
        $this->errors = [];

        /** DATA VALIDATION EXAMPLE START */
        foreach ($_POST as $key => $value) {
            if (empty($value)) {
                $this->errors[] = strtoupper($key) . " - Cannot be empty";
            }
        }
        /** DATA VALIDATION EXAMPLE END */

        if (empty($this->errors)) {
            return true;
        }

        return false;
    }
}
