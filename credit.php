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
    <title>CREDIT</title>
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

        .prime {
            background-color: #fff;
            padding-top: 20px;
            padding-bottom: 20px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
            border-bottom: solid;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .user-info {
            border-bottom: solid;
            width: 100%;
            border-radius: 10px;
        }

        p {
            margin-top: 0px;
        }

        p.last {
            margin-bottom: 8px;
        }

        form {
            padding: 20px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            margin-top: 6px;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border-radius: 5px;
            font-weight: bold;
            font-size: 16.7px;
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
            <h1>CREDIT!&nbsp;</h1>
        </div>
        <div class="prime">
            <div class="user-info">
                <p>Holder : <?php echo "<strong>".$account->holder."</strong>"; ?></p>
                <p>Account number : <?php echo "<strong>".$account->accountNum."</strong>"; ?></p>
                <p class="last">Balance : <?php echo "<strong>".$account->c_balance." DH</strong>"; ?></p>
                <?php
                    if (isset($_GET['error'])) {
                        $error = $_GET['error'];
                        if ($error === 'NoError') {
                            echo '<p style="color: green; font-size: 15px; margin: 0 0 8px 0;">Amount successfully credited.</p>';
                        }   
                    }
                ?>
            </div>
            <div class="debit">
                <form action="creditverif.php" method="post">
                    <label for="amount">Amount to be credited : </label>
                    <input type="number" name="amount" id="amount" >
                    <?php
                    if (isset($_GET['error'])) {
                        $error = $_GET['error'];
                        if ($error === 'InvalidAmount') {
                            echo '<p style="color: red; font-size: 13px; margin: 0;">Invalid amount. Please try again.</p>';
                        }   
                    }
                    ?>
                    <label for="code">Code : </label>
                    <input type="password" id="code" name="codeatt" maxlength="4" pattern="\d{4}" title="Please enter exactly 4 digits." required>
                    <?php
                    if (isset($_GET['error'])) {
                        $error = $_GET['error'];
                        if ($error === 'InvalidCode') {
                            echo '<p style="color: red; font-size: 13px; margin: 0;">Invalid code. Please try again.</p>';
                        }   
                    }
                    ?>
                    <input type="submit" class="transaction-link" value="CONFIRM">
                    <a href="home.php" class="transaction-link"><strong>RETURN TO HOME<strong></a>
                </form>
            </div>
        </div>
        
        
    </div>
</body>
</html>