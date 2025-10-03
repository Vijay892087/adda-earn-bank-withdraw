<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Submit Payment Details</title>
</head>
<body>
<h2>Pay ₹5 to one of the UPI IDs below:</h2>
<form action="submit.php" method="post">
    <label>Select UPI ID:</label><br>
    <?php foreach($upi_options as $upi){ ?>
        <input type="radio" name="selected_upi" value="<?= $upi ?>" required> <?= $upi ?><br>
    <?php } ?>
    <br>

    <label>Transaction ID:</label><br>
    <input type="text" name="txn_id" required><br><br>

    <label>Bank Account No:</label><br>
    <input type="text" name="account_no" required><br><br>

    <label>IFSC Code:</label><br>
    <input type="text" name="ifsc_code" required><br><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>