<h1>ثبت‌نام</h1>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div><input name="name" value="{{ old('name') }}" placeholder="نام"></div>
    <div><input name="email" value="{{ old('email') }}" placeholder="ایمیل"></div>
    <div><input name="password" type="password" placeholder="رمز"></div>
    <div><input name="password_confirmation" type="password" placeholder="تکرار رمز"></div>
    <button type="submit">ثبت‌نام</button>
</form>
