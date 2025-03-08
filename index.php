<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #2c08bb, rgb(17, 3, 66), rgb(54, 29, 147), rgb(0, 0, 0), rgb(18, 0, 62), rgb(26, 12, 152));
            background-size: 600% 600%;
            animation: gradientAnimation 4s ease infinite, fadeIn 0.5s ease-out;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            25% { background-position: 50% 50%; }
            50% { background-position: 100% 50%; }
            75% { background-position: 50% 50%; }
            100% { background-position: 0% 50%; }
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .login-container {
            background-color: rgba(0, 0, 0, 0);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 400px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            color: white;
        }

        .login-container:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .input-container {
            position: relative;
            margin: 20px 0;
        }

        .input-container input {
            width: 100%;
            padding: 12px;
            border: 2px solid #ccc;
            border-radius: 25px;
            font-size: 16px;
            background: transparent;
            color: white;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .input-container input:focus {
            border-color: #4e73df;
            box-shadow: 0 0 12px rgba(78, 115, 223, 0.8);
            outline: none;
        }

        .input-container label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            font-size: 16px;
            color: rgba(255, 255, 255, 0.7);
            transition: 0.3s ease;
            pointer-events: none;
        }

        .input-container input:focus + label,
        .input-container input:not(:placeholder-shown) + label {
            top: 5px;
            left: 10px;
            font-size: 12px;
            color: #4e73df;
        }

        button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 25px;
            color: black;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        }

        .login-btn {
            background-color: #4e73df;
        }

        button:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            opacity: 0.9;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <h2>RUSERBVOK SHOP</h2>
        <form action="login.php" method="POST">
            <div class="input-container">
                <input type="text" class="form-control" name="txtUsername" id="exampleinputEmail" placeholder="Masukkan Username">
            </div>
            <div class="input-container">
                <input type="password" class="form-control" name="txtPassword" id="exampleinputPassword" placeholder="Masukkan Password">
                
            </div>
            
            <button type="submit" class="login-btn">Login</button>
        </form>
        
        <?php
        if (isset($_GET['error'])) {
            echo "<p class='error-message'>".$_GET['error']."</p>";
        }
        ?>
        
    </div>
</body>
</html>
