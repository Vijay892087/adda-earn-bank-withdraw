<?php
include "config.php";

if(!isset($_GET['pass']) || $_GET['pass'] != $admin_pass){
    die("Unauthorized! Add ?pass=YOUR_PASSWORD in URL");
}

$rows = array_map('str_getcsv', file($csv_file));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
<h2>All Submissions</h2>
<table border="1" cellpadding="10">
<tr>
    <th>Transaction ID</th>
    <th>Account No</th>
    <th>IFSC</th>
    <th>Selected UPI</th>
    <th>Time</th>
</tr>
<?php foreach($rows as $i=>$row){ if($i==0) continue; ?>
<tr>
    <td><?= htmlspecialchars($row[0]) ?></td>
    <td><?= htmlspecialchars($row[1]) ?></td>
    <td><?= htmlspecialchars($row[2]) ?></td>
    <td><?= htmlspecialchars($row[3]) ?></td>
    <td><?= htmlspecialchars($row[4]) ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>