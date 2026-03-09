<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login | Wings of Jewels</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f8f8f8;
    height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    font-family: 'Segoe UI', sans-serif;
}

/* Login Card */

.login-card{
    background:#ffffff;
    border-radius:15px;
    box-shadow:0 10px 40px rgba(0,0,0,0.08);
    padding:45px;
    width:420px;
}

/* Logo */

.logo{
    width:90px;
    margin-bottom:10px;
}

/* Brand Name */

.brand{
    color:#C9A227;
    font-weight:600;
    letter-spacing:1px;
    font-size:20px;
}

/* Inputs */

.form-control{
    border-radius:8px;
    padding:12px;
    border:1px solid #ddd;
}

.form-control:focus{
    border-color:#C9A227;
    box-shadow:0 0 0 0.1rem rgba(201,162,39,0.2);
}

/* Button */

.login-btn{
    background:#C9A227;
    color:white;
    border:none;
    padding:12px;
    border-radius:8px;
    font-weight:500;
    transition:0.3s;
}

.login-btn:hover{
    background:#b8961f;
}

/* Error */

.error{
    color:#dc3545;
    font-size:14px;
}

.footer-text{
    font-size:12px;
    color:#999;
}

</style>

</head>

<body>

<div class="login-card text-center">

    <!-- Logo -->
    <img src="{{ asset('images/logo1.png') }}" class="logo">

    <div class="brand mb-4">Wings of Jewels Admin</div>

    @if(session('error'))
        <div class="error mb-3">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('admin.login') }}">
        @csrf

        <div class="mb-3 text-start">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-4 text-start">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="login-btn w-100">
            Login
        </button>

    </form>

    <div class="footer-text mt-4">
        © {{ date('Y') }} Wings of Jewels
    </div>

</div>

</body>
</html>