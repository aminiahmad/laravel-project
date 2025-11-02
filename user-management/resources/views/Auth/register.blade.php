<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ثبت نام</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        input {
            outline: none;
            border-radius: 5px;
            margin-top: 5px;
        }

        .container {
            max-width: 600px;
            margin: 60px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #2c3e50;
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
    <h1>ثبت‌نام</h1>
    <form method="POST" action="{{ route('register.submit') }}">
        @csrf
        <div><input name="name" value="{{ old('name') }}" placeholder="نام"></div>
        <div><input name="email" value="{{ old('email') }}" placeholder="ایمیل"></div>
        <div><input name="password" type="password" placeholder="رمز"></div>
        <div><input name="password_confirmation" type="password" placeholder="تکرار رمز"></div>
        <button type="submit" class="btn">ثبت‌نام</button>
    </form>
    @if ($errors->any())
        <ul style="color:red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>
</body>
</html>


