<?php
$discordWebhookUrl = $_POST['WEBHOOK']; // retrieve the value of the hidden input field
$message = $_POST['message']; // retrieve the message from the form
$data = array('content' => $message);

$options = array(
    'http' => array(
        'method'  => 'POST',
        'content' => json_encode($data),
        'header' =>  "Content-Type: application/json\r\n" .
                    "Accept: application/json\r\n"
    )
);

$context  = stream_context_create($options);
$result = file_get_contents($discordWebhookUrl, false, $context);

if ($result === false) {
    // handle error
} else {
    // handle success
}
?>
