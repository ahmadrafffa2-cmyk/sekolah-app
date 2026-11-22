<!DOCTYPE html>
<html>
<head>
    <title>Register - Sekolah App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5" style="max-width: 400px;">
    <div class="card p-4 shadow">
        <h3 class="text-center mb-3">Register</h3>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $e)
                    <div>{{ $e }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register.post') }}">
            @csrf
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <div class="input-group">
                    <input type="password" name="password" id="password" class="form-control" required>
                    <button type="button" class="btn btn-outline-secondary" onclick="document.getElementById('password').type = document.getElementById('password').type === 'password' ? 'text' : 'password'">👁️</button>
                </div>
            </div>
            <button class="btn btn-primary w-100">Register</button>
            <div class="text-center mt-3">
                <a href="/login">Sudah punya akun? Login</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>