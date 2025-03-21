<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #e3f2fd, #bbdefb);
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            background: white;
            padding: 20px;
            width: 320px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .container input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }

        .container button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-weight: bold;
            border-radius: 5px;
            width: 100%;
        }

        .container button:hover {
            background-color: #218838;
        }

        .error-message {
            color: red;
            font-size: 14px;
            display: none;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Admin Login</h2>
        <input type="text" id="username" placeholder="Username">
        <input type="password" id="password" placeholder="Password">
        <button onclick="handleLogin()">Login</button>
        <p id="loginError" class="error-message">Invalid login credentials!</p>
    </div>

    <script>
        function handleLogin() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username === "admin808628" && password === "admin808620") {
                // Store login state in sessionStorage
                sessionStorage.setItem("isAdminLoggedIn", "true");
                window.location.href = "adminPanel.html"; // Redirect to Admin Panel
            } else {
                document.getElementById("loginError").style.display = "block";
            }
        }
    </script>

</body>
</html>
