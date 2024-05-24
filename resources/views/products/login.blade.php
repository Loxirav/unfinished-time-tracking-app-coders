<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 300px;
        margin: 100px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        color: #333;
    }
    label {
        display: block;
        margin-bottom: 5px;
        color: #666;
    }
    input[type="email"],
    input[type="password"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    input[type="submit"] {
        width: calc(100% - 20px);
        background-color: #3f8ada;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form method="POST" action="{{ route('product.login') }}">
        @csrf
        <div>
            <label>Email</label>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
    </form>
</div>
</body>
</html>
