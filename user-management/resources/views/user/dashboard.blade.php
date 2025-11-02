<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پنل کاربری</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 60px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        h1 {
            color: #2c3e50;
        }

        .info {
            margin: 20px 0;
            line-height: 1.8;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<div class="container">
    @php
        $user = auth()->user();
    @endphp

    <h1>👋 خوش آمدید، {{ $user->name }}</h1>

    <div class="info">
        <p><strong>نام:</strong> {{ $user->name }}</p>
        <p><strong>ایمیل:</strong> {{ $user->email }}</p>
        <p><strong>نقش:</strong> {{ $user->role }}</p>
    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn">خروج از حساب</button>
    </form>
</div>
</body>
</html>
