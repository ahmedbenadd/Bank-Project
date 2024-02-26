<?php
    include 'account_class.php';
    session_start();
    $account = $_SESSION['account'];
    $amount = $_POST['amount'];
    $codeatt = $_POST['codeatt'];
    
    if ( $codeatt === $account->code) {
        if( $amount > 0) {
            $account->credit($amount);
            $_SESSION['account'] = $account;
            header("location:credit.php?error=NoError");
        }
        else {
            header("location:credit.php?error=InvalidAmount");
            exit();
        }
    }
    else {
        header("location:credit.php?error=InvalidCode");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
</head>
<body>
    
</body>
</html>