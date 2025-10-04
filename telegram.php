<?php
// send_telegram.php
if(!isset($_GET['msg'])) {
    die("No message provided!");
}

$message = $_GET['msg'];

// Telegram details
$bot_token = "6391372827:AAHY-gfeyHZvtaGKIr4TLyga17lr73lj86o"; // tumhara bot token
$chat_id   = "@earning_adda982"; // tumhara channel username

// Send message
$url = "https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&text=".urlencode($message);
file_get_contents($url);

echo "Message sent!";
?>