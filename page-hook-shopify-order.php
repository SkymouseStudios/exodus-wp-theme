<?php

    /*
    define('SHOPIFY_APP_SECRET', 'ecbb7b763040bdb7bdbfb17a6336e3ac0717d16d581aa9bdc34e5d99fe4d24f0');

    function verify_webhook($data, $hmac_header) {
        $calculated_hmac = base64_encode(hash_hmac('sha256', $data, SHOPIFY_APP_SECRET, true));
        return ($hmac_header == $calculated_hmac);
    }

    $hmac_header = $_SERVER['HTTP_X_SHOPIFY_HMAC_SHA256'];

    $verified = verify_webhook($data, $hmac_header);

    if($verified) {
        echo "complete.";
    }
    */
    $data = file_get_contents('php://input');
    $json = json_decode($data);

    if (isset($json->id) &&
        isset($json->customer) &&
        isset($json->customer->first_name) &&
        isset($json->customer->last_name) &&
        isset($json->customer->email) ) {

        echo "Add this person... <br><br>\n";

        $data = [
            'email'      => $json->customer->email,
            'first_name' => $json->customer->first_name,
            'last_name'  => $json->customer->last_name
        ];

        $response = ExodusPurchase\Services\MailChimpService::subscribe($data);

        echo "response... <br><br>\n";

        echo "<pre>";
        print_r($response);
        echo "</pre>\n";

    }

    echo "complete.<br>\n\n";
