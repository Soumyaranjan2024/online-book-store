<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookHaven - Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background-color: #1a237e;
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
        }

        .logo span {
            color: #ff9800;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 1.5rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .nav-links a:hover {
            color: #ff9800;
        }

        main {
            padding: 3rem 0;
        }

        .registration-section {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .form-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            padding: 2rem;
            margin-top: 2rem;
        }

        h1 {
            text-align: center;
            margin-bottom: 0.5rem;
            color: #1a237e;
        }

        .subtitle {
            text-align: center;
            margin-bottom: 2rem;
            color: #666;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        input,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            transition: border 0.3s ease;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #1a237e;
        }

        .error {
            color: #d32f2f;
            font-size: 0.85rem;
            margin-top: 0.25rem;
        }

        .btn {
            background-color: #1a237e;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            font-weight: 600;
        }

        .btn:hover {
            background-color: #0e1859;
        }

        .form-footer {
            text-align: center;
            margin-top: 1.5rem;
        }

        .form-footer a {
            color: #1a237e;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        .success-message {
            background-color: #e8f5e9;
            color: #2e7d32;
            padding: 1rem;
            border-radius: 4px;
            margin-bottom: 1.5rem;
            text-align: center;
            font-weight: 600;
        }

        .password-toggle {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 12px;
            cursor: pointer;
            color: #666;
        }

        .password-requirements {
            font-size: 0.85rem;
            color: #666;
            margin-top: 0.5rem;
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar">
                <div class="logo">Book<span>Haven</span></div>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Books</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <section class="registration-section">
                <h1>Create Your Account</h1>
                <p class="subtitle">Join BookHaven and discover your next favorite book</p>

                <div class="form-container">
                    @if(session('success'))
                        <div class="success-message">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ url('/register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" id="fullName" name="name" placeholder="Enter your full name"
                                value="{{ old('name') }}" required>
                            @error('name')<div class="error">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email address"
                                value="{{ old('email') }}" required>
                            @error('email')<div class="error">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group password-toggle">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Create a password"
                                required>
                            <span class="toggle-password" id="togglePassword">Show</span>
                            @error('password')<div class="error">{{ $message }}</div>@enderror
                            <div class="password-requirements">
                                Password must be at least 8 characters with letters and numbers
                            </div>
                        </div>

                        <div class="form-group password-toggle">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" id="confirmPassword" name="password_confirmation"
                                placeholder="Confirm your password" required>
                            <span class="toggle-password" id="toggleConfirmPassword">Show</span>
                        </div>

                        <div class="form-group">
                            <label for="readingPreference">Favorite Book Genre</label>
                            <select id="readingPreference" name="genre">
                                <option value="">Select your favorite genre</option>
                                <option value="fiction">Fiction</option>
                                <option value="mystery">Mystery & Thriller</option>
                                <option value="scifi">Science Fiction & Fantasy</option>
                                <option value="biography">Biography & Memoir</option>
                                <option value="history">History</option>
                                <option value="business">Business & Finance</option>
                                <option value="selfHelp">Self-Help & Personal Development</option>
                                <option value="other">Other</option>
                            </select>
                            @error('genre')<div class="error">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn">Create Account</button>
                        </div>

                        <div class="form-footer">
                            Already have an account? <a href="#">Log In</a>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const togglePassword = document.getElementById('togglePassword');
            const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirmPassword');

            togglePassword.addEventListener('click', function () {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.textContent = type === 'password' ? 'Show' : 'Hide';
            });

            toggleConfirmPassword.addEventListener('click', function () {
                const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
                confirmPassword.setAttribute('type', type);
                this.textContent = type === 'password' ? 'Show' : 'Hide';
            });
        });
    </script>
</body>

</html>