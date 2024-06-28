<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('akumaulogin') }}">
        @csrf
        <div>
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
    <a href="{{route('register')}}">kamu mau register?</a>
</body>
</html>
