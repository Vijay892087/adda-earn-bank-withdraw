<?php
$telegram_bot_token = "6391372827:AAGZaMVwoKYNxmhZQpU9lJ_bu3RyzeaJtJ0";
$telegram_chat_id   = "-969062037";
$admin_pass         = "Vijaysingh@qwe56$%&{";
$csv_file           = __DIR__ . "/submissions.csv";

if(!file_exists($csv_file)){
    file_put_contents($csv_file, "TransactionID,AccountNo,IFSC,Selected_UPI,Time\n");
}

$upi_options = [
    "km55553646688-2@okicici",
    "vijay89204@ybl"
];
?>