
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login Form</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #3ed0c5;
        }
        
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        h2 {
            color: #3ed0c5;
        }
        
        label {
            display: block;
            margin: 10px 0 5px;
            color: #333;
        }
        
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        button {
            background-color: #3ed0c5;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        
        button:hover {
            background-color: #36b8ad;
        }
        
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Register</h2>
        <form id="loginForm"  action="signup.php" method="post">
            <label for="username">Email ID:</label>
            <input type="email" id="username" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="register" onclick="validateLogin()">Register</button>
        </form>
    </div>
    <script>
        function validateLogin() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
        
            // Add your login validation logic here
            // For simplicity, this example just logs the input values
            console.log("Username: " + username);
            console.log("Password: " + password);
        }
        
    </script>
</body>
</html>


