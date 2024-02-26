<?php 
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account closed</title>
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
            <h1>Account closed!&nbsp;</h1>
        </div>
        <div class="user-info">
            <p>We regret to inform you that your account is now closed. Thank you for your past association.</p>
            <?php 
                if (isset($_GET['error'])) {
                    $error = $_GET['error'];
                    if ($error === '200') {
                        echo '<p style="color: red;margin: 0;">Your balance is &nbsp;< 200 DH.</p>';
                    }   
                }
            ?>
            <a href="openaccount.php" class="transaction-link"><strong>OPEN A NEW ACCOUNT<strong></a>
        </div>
        
    </div>
</body>
</html>