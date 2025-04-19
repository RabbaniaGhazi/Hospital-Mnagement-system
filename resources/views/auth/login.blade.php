<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Optional: You can remove this if you are not using it -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: var(--background); /* Use your existing background */
            color: var(--foreground); /* Use your existing foreground color */
        }

        .header {
            background-color: #007BFF; /* Blue background for the header */
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 24px;
            border-top-left-radius: 8px; /* Match with form border radius */
            border-top-right-radius: 8px; /* Match with form border radius */
        }

        .sub-header {
            color: white; /* Change this to match your design */
            font-size: 14px; /* Smaller font size */
            margin-top: 5px; /* Space below the header */
            margin-bottom: 10px; /* Space above the form */
        }

        .container {
            width: 100%;
            max-width: 400px; 
            margin: 50px auto; /* Adjusted margin for better positioning */
            padding: 0; /* No padding, we will add padding directly to the inner elements */
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            border: 1px solid #007BFF; /* Added border to match header */
        }

        .form-content {
            padding: 20px; /* Padding for form content */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: var(--primary-foreground); /* Using CSS variables */
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: var(--secondary-foreground); /* Using CSS variables */
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            background: #e0dede; /* Change to a suitable color from your theme */
            border: 1px solid var(--border); /* Using CSS variables */
            border-radius: var(--radius); /* Using CSS variables */
            transition: border-color 0.3s;
        }

        input[type="email"]:focus, input[type="password"]:focus {
            border-color: var(--primary-foreground); /* Change the border color on focus */
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: var(--primary); /* Using CSS variables */
            color: white;
            border: none;
            border-radius: var(--radius); /* Using CSS variables */
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: var(--secondary); /* Change on hover if necessary */
        }

        .alert {
            padding: 10px;
            background-color: #f44336;
            color: white;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .alert.alert-error {
            background-color: #f44336;
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
        }

        .remember-me {
            margin-bottom: 20px; /* Space between checkbox and button */
        }
    </style>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="header">
            Shadman Eye Clinic
            <p class="sub-header">Please sign in to your account</p>
        </div>

        <div class="form-content">
            <form action="{{ route('login') }}" method="POST" class="login-form">
                @csrf

                @if(session('error'))
                    <div class="alert alert-error">{{ session('error') }}</div>
                @endif

                @if(session('reset_password'))
                    <div class="alert" style="background-color: #ff9800; text-align: center;">
                        <strong>Important!</strong> Please reset your password upon your first login.
                        <a href="{{ route('password.reset') }}" style="color: white; text-decoration: underline;">Reset Password</a>
                    </div>
                @endif
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <div class="remember-me">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>

                <button type="submit">Login</button>
                <div class="register-link">
                    <p>Don't have an account? <a href="/register">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>