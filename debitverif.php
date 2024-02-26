<?php
    include 'account_class.php';
    session_start();
    $account = $_SESSION['account'];
    $amount = $_POST['amount'];
    $codeatt = $_POST['codeatt'];
    
    if ( $codeatt === $account->code) {
        if( $amount < $account->c_balance && $amount > 0) {
            $account->debit($amount);
            if($account->c_balance < 200) {
                header("location:accountclosed.php?error=200");
            }
            else {
                $_SESSION['account'] = $account;
                header("location:debit.php?error=NoError");
            }
        }
        else {
            header("location:debit.php?error=InvalidAmount");
            exit();
        }
    }
    else {
        header("location:debit.php?error=InvalidCode");
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