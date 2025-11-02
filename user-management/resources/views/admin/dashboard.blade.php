<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پنل ادمین</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h1 {
            margin-bottom: 20px;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background-color: #f8f8f8;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            display: inline-block;
            background-color: #e74c3c;
            color: white;
            padding: 6px 12px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn:hover {
            background-color: #c0392b;
        }

        .logout {
            background-color: #3498db;
            float: right;
            margin-top: -45px;
        }

        .logout:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<header>
    <h2>پنل مدیریت</h2>
</header>

<div class="container">
    <h1>👋 خوش آمدید، {{ $admin->name }}</h1>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn logout">خروج</button>
    </form>

    <h2>لیست کاربران</h2>

    <table>
        <thead>
        <tr>
            <th>شناسه</th>
            <th>نام</th>
            <th>ایمیل</th>
            <th>نقش</th>
        </tr>
        </thead>
        <tbody>
        @forelse($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4" style="text-align: center;">هیچ کاربری یافت نشد.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
