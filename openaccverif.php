<?php
    session_start();
    function validateName($input) {
        $pattern = '/^[A-Za-z ]+$/';
        if (preg_match($pattern, $input)) {
            return true;
        } else {
            return false;
        }
    }

    $holder = $_POST['holder'];
    $code = $_POST['code'];
    $c_balance = $_POST['c_balance'];
    $accountNum = "1234567890";
    $o_date = date("Y-m-d");

    if(!validateName($holder)) {
        header("location:openaccount.php?error=InvalidHolder");
        exit();
    }
    else {
        if($code > 9999) {
            header("location:openaccount.php?error=InvalidCode");
            exit();
        }
        else {
            if($c_balance <= 5000) {
                    header("location:openaccount.php?error=InvalidBalance");
                    exit();
            }
            else {
                include 'account_class.php';
                $account = new account($accountNum, $holder, $c_balance, $o_date, $code);
                $_SESSION['account'] = $account;
                header("location:home.php");
                        }
                    }
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