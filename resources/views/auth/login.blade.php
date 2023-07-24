<html>
<head>
    <title>Admin Login</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            border-top: 4px solid #f6226f;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input {
            padding: 10px;
            border: none;
            background-color: transparent;
            border-bottom: 1px solid #ccc;
            color: #333;
        }

        .buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .login-button {
            padding: 10px 20px;
            background-color: #f6226f;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .register-button {
            padding: 10px 20px;
            background-color: #fff;
            color: #333;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
        }

        @media (max-width: 480px) {
            .card {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="text" name="email" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <div class="buttons">
                <button type="submit" class="login-button">Login</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
