<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            animation: fadeIn 1s ease-in-out;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }
        h2 {
            color: #00796b;
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 20px;
            text-align: left;
            position: relative;
        }
        .input-group label {
            font-weight: bold;
            color: #00796b;
            display: block;
            margin-bottom: 5px;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #00796b;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .input-group input:focus {
            border-color: #004d40;
            outline: none;
        }
        .input-group input[type="submit"] {
            background-color: #00796b;
            color: #ffffff;
            border: none;
            font-size: 18px;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;
        }
        .input-group input[type="submit"]:hover {
            background-color: #004d40;
        }
        .input-group input[type="submit"]:active {
            transform: scale(0.97);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .forgot-password-link {
            position: absolute;
            top: 0;
            right: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h2>Login</h2>
        <?php if (isset($_SESSION['error_message'])) : ?>
            <div class="error-message">
                <p style="color: red;"><?php echo $_SESSION['error_message']; unset($_SESSION['error_message']); ?></p>
            </div>
        <?php endif; ?>
        <form action="proses_login.php" method="post">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <a href="#" class="forgot-password-link">Lupa password?</a>
            </div>
            <div class="input-group">
                <input type="submit" value="Login">
            </div>
        </form>
        <p>Belum punya akun? <a href="#">Daftar</a></p>
    </div>
    
</body>
</html>
