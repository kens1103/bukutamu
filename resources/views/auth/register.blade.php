

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body{
            font-family: 'arial', sans-serif;
            background-color: #F4F4F4;
            margin: 10;
            padding: 10;
            height: 100vh;
            display: flex;
            justify-content: center;
            alin-items: center;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input, button {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .switch-link {
            margin-top: 10px;
            font-size: 14px;
            color: #007BFF;
            text-decoration: none;
            cursor: pointer;
        }
        .Register-button {
            display: inline-block;
            padding: 10px 10px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s;
            margin-top: 10px;
        }
        .Register-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <label for="registerName">Name:</label>
            <input type="text" id="registerName" name="name" required>

            <label for="registerEmail">Email:</label>
            <input type="email" id="registerEmail" name="email" required>

            <label for="registerPassword">Password:</label>
            <input type="password" id="registerPassword" name="password" required>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirm_password" required>

            <a href="{{ route('Login') }}" class="Register-button">Register</a>
        </form>
    </div>
</body>
</html>
