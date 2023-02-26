<?php
$discord_webhook_secret = $_ENV['WEBHOOK'];
$discord_webhook_url = 'https://discord.com/api/webhooks/' . $discord_webhook_secret;
echo $discord_webhook_url;
?>
