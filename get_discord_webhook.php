<?php
$discord_webhook_secret = $_ENV['WEBHOOK'];
$discord_webhook_url = 'https://discord.com/api/webhooks/' . $discord_webhook_secret;
$message = array('content' => $_POST['message']);
$options = array(
  'http' => array(
    'method' => 'POST',
    'header' => 'Content-Type: application/json',
    'content' => json_encode($message)
  )
);
$context = stream_context_create($options);
$result = file_get_contents($discord_webhook_url, false, $context);
echo $result;
?>
