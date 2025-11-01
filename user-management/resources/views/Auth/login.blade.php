<?php
@section('content')
    <h1>ورود</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div><input name="email" value="{{ old('email') }}" placeholder="ایمیل"></div>
        <div><input name="password" type="password" placeholder="رمز"></div>
        <button type="submit">ورود</button>
    </form>
@endsection
