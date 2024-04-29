<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="{{ route('daftar_tamu') }}" method="POST">
    @csrf
    <label for="loginname">Name:</label>
    <input type="name" id="loginname" name="name" required>
    
    <label for="loginEmail">Email:</label>
    <input type="email" id="loginEmail" name="email" required>

    <label for="loginPassword">Password:</label>
    <input type="password" id="loginPassword" name="password" required>

    <button type="submit">Login</button>
</form>

<a href="{{ route('daftar_tamu') }}"></a>
    </div>
</body>
</html>