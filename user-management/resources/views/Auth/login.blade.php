    <p>حساب نداری؟ <a href="{{ route('register') }}">ثبت‌نام کن</a></p>
    <h1>ورود</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div><input name="email" value="{{ old('email') }}" placeholder="ایمیل"></div>
        <div><input name="password" type="password" placeholder="رمز"></div>
        <button type="submit">ورود</button>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
