<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>ویرایش کاربر</title>
</head>
<body>
<h2>ویرایش {{ $user->name }}</h2>

<form method="POST" action="{{ route('users.update', $user) }}">
    @csrf
    @method('PUT')
    <label>نام:</label>
    <input type="text" name="name" value="{{ $user->name }}"><br><br>
    <label>ایمیل:</label>
    <input type="email" name="email" value="{{ $user->email }}"><br><br>

    <label>نقش:</label>
    <select name="role">
        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>کاربر</option>
        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>مدیر</option>
    </select><br><br>

    <button type="submit">ذخیره تغییرات</button>
</form>

<a href="{{ route('users.index') }}">بازگشت</a>
</body>
</html>

