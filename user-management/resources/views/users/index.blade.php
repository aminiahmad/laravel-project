<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/userLists.css">
    <title>لیست کاربران</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f4f6f9;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #eee;
        }

        th {
            background: #f8f8f8;
        }

        .btn {
            padding: 6px 10px;
            border-radius: 6px;
            text-decoration: none;
            color: white;
        }

        .edit {
            background: #3498db;
        }

        .delete {
            background: #e74c3c;
        }

        .back {
            background: #95a5a6;
        }
    </style>
</head>
<body>
<div>
    <a href="{{ route('adminDashboard') }}" class="btn back">بازگشت به داشبورد</a>
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
                <td>
                    <a href="{{ route('users.edit', $user) }}" class="btn edit">ویرایش</a>

                    <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn delete" onclick="return confirm('آیا مطمئن هستید؟')">حذف
                        </button>
                    </form>
                </td>
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
