<?php

error_reporting( E_ALL );

        $data = array(
            'text' => 'test post from script by Drtuts.com'
        );


$json_string = json_encode($data);

$slack_webhook_url = '<< SPECIFY WEBHOOK URL >>';

$slack_call = curl_init();
curl_setopt($slack_call, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($slack_call, CURLOPT_POSTFIELDS, $json_string);
curl_setopt($slack_call, CURLOPT_CRLF, true);
curl_setopt($slack_call, CURLOPT_RETURNTRANSFER, true);
curl_setopt($slack_call, CURLOPT_URL, $slack_webhook_url);
curl_setopt($slack_call, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($slack_call, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "Content-Length: " . strlen($json_string))
);

$result = curl_exec($slack_call);

print_r( "Posted successfully");

curl_close($slack_call);

 ?>
