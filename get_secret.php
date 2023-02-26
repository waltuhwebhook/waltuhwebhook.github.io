<?php
$secret_value = $_ENV['WEBHOOK'];
$url = 'https://discord.com/api/webhooks/' . urlencode($secret_value);
?>
