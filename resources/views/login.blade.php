<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookHaven - Login</title>
    <style>
        :root {
            --primary: #1a237e;
            --accent: #ff9800;
            --error: #d32f2f;
            --bg: #f5f5f5;
            --white: #ffffff;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #e0e7ff, #f5f5f5);
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            max-width: 500px;
            margin: auto;
            padding: 2rem;
            flex: 1;
        }

        header {
            background-color: var(--primary);
            color: var(--white);
            padding: 1.2rem 2rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 2rem;
            font-weight: 700;
        }

        .logo span {
            color: var(--accent);
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 1.5rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--accent);
        }

        h1 {
            text-align: center;
            color: var(--primary);
            margin-bottom: 2rem;
            font-size: 2rem;
        }

        .form-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: var(--primary);
        }

        .form-check {
            display: flex;
            align-items: center;
            font-size: 0.95rem;
        }

        .form-check input {
            margin-right: 8px;
        }

        .btn {
            background-color: var(--primary);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .btn:hover {
            background-color: #0e1859;
        }

        .error {
            color: var(--error);
            font-size: 0.9rem;
            margin-top: 0.4rem;
        }

        .form-footer {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.95rem;
        }

        .form-footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        .social-btn {
            background-color: #db4437;
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            margin-bottom: 1rem;
            transition: background-color 0.3s ease;
        }

        .social-btn:hover {
            background-color: #c23321;
        }

        .toggle-password {
            position: absolute;
            right: 14px;
            top: 43px;
            font-size: 0.9rem;
            color: #888;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">Book<span>Haven</span></div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Books</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="container">
            <h1>Login to Your Account</h1>
            <div class="form-container">
                @if(session('error'))
                    <div class="error" style="text-align: center;">{{ session('error') }}</div>
                @endif
                <form method="POST" action="{{ url('/login') }}" onsubmit="return validateForm()">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email"
                            value="{{ old('email') }}" required>
                        @error('email') <div class="error">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" required>
                        <span class="toggle-password" id="togglePassword">Show</span>
                        @error('password') <div class="error">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn">Log In</button>
                    </div>
                </form>
                <button class="social-btn" onclick="alert('Redirecting to Google login... (not implemented)')">
                    Continue with Google
                </button>
                <div class="form-footer">
                    Don't have an account? <a href="{{ url('/register') }}">Register</a>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const togglePassword = document.getElementById('togglePassword');
            const password = document.getElementById('password');

            togglePassword.addEventListener('click', function () {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.textContent = type === 'password' ? 'Show' : 'Hide';
            });
        });

        function validateForm() {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            if (!email.includes('@')) {
                alert('Please enter a valid email address.');
                return false;
            }
            if (password.length < 6) {
                alert('Password must be at least 6 characters long.');
                return false;
            }
            return true;
        }
    </script>
</body>

</html>