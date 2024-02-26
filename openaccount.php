<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open an account - Fouarat Bank</title>
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
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
            margin-bottom: 15px;
        }

        form {
            background-color: #fff;
            background-color: #fff;
            padding: 20px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-bottom: solid;
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
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #5c5c5c;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="hedr1">
            <h2>&nbsp;&nbsp;&nbsp; Fouarat Bank &nbsp;&nbsp;&nbsp;&nbsp;</h2>
        </div>
        <div class="hedr2">
            <h2>&nbsp;&nbsp;&nbsp;Opening an account&nbsp;&nbsp;&nbsp;&nbsp;</h2>
        </div>
        <form action="openaccverif.php" method="post">
            <label for="holder">HOLDER :</label>
            <input type="text" id="holder" name="holder" required>
            <?php
            if (isset($_GET['error'])) {
                $error = $_GET['error'];
                if ($error === 'InvalidHolder') {
                    echo '<p style="color: red; font-size: 13px; margin: 0;">Your name is invalid. Please try again.</p>';
                }   
            }
            ?>
            <label for="code">CODE ( 4 numbers ) :</label>
            <input type="password" id="code" name="code" maxlength="4" pattern="\d{4}" title="Please enter exactly 4 digits." required>
            <?php
            if (isset($_GET['error'])) {
                $error = $_GET['error'];
                if ($error === 'InvalidCode') {
                    echo '<p style="color: red; font-size: 13px; margin: 0;">Invalid Code. Please try again.</p>';
                }   
            }
            ?>        
            <label for="c_balance">CURRENT BALANCE ( > 5000DH ) :</label>
            <input type="number" id="c_balance" name="c_balance" required><br>
            <?php
            if (isset($_GET['error'])) {
                $error = $_GET['error'];
                if ($error === 'InvalidBalance') {
                    echo '<p style="color: red; font-size: 13px; margin: 0;">Your balance should be > 5000DH. Please try again.</p>';
                }   
            }
            ?>
            &nbsp;<input type="submit" name="submit" value="OPEN  ACCOUNT" >
        </form>
    </div>
</body>
</html>