<?php 
    include 'account_class.php';
    session_start();
    $account = $_SESSION['account'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <style>
        body {
            font-family: monospace, Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            width: 100%;
        }

        .hedr1, .hedr2 {
            background-color: #333;
            color: #fff;
            padding: 10px;
            box-sizing: border-box;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
        }

        .hedr1 {
            margin-bottom: 25px;
            border-radius: 10px;
        }
        
        h3 {
            margin-bottom: 20px;
        }

        .user-info {
            background-color: #fff;
            padding: 20px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-bottom: solid;
        }

        .transaction-link {
            margin-top: 15px;
            display: inline-block;
            text-decoration: none;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            padding: 8px;
            margin-bottom: 5px;
            box-sizing: border-box;
        }


        .transaction-link:hover {
            background-color: #5c5c5c;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="hedr1">
            <h2>&nbsp;&nbsp; &nbsp; Fouarat Bank &nbsp;&nbsp;&nbsp;&nbsp;</h2>
        </div>
        <div class="hedr2">
            <h1>Welcome!&nbsp;</h1>
        </div>
        <div class="user-info">
            <p>Your account has been created successfully</p>
            <p>Holder : <?php echo "<strong>".$account->holder."</strong>"; ?></p>
            <p>Account number : <?php echo "<strong>".$account->accountNum."</strong>"; ?></p>
            <p>Balance : <?php echo "<strong>".$account->c_balance." DH</strong>"; ?></p>
            <p>Operation date : <?php echo "<strong>".$account->o_date."</strong>"; ?></p>
            <a href="debit.php" class="transaction-link"><strong>DEBIT<strong></a>
            <a href="credit.php" class="transaction-link"><strong>CREDIT<strong></a>
            <a href="accountclosed.php" class="transaction-link"><strong>CLOSE &nbsp;ACCOUNT<strong></a>
        </div>
        
    </div>
</body>
</html>