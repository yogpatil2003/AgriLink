<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriLink - Admin Login</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* Global Font and Reset */
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background-image: url('https://images.pexels.com/photos/440731/pexels-photo-440731.jpeg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            overflow: hidden;
        }
        
        /* Overlay with Fade Animation */
        .overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Enhanced Glassmorphism Card */
        .glass {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5), inset 0 0 10px rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .glass:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.6), inset 0 0 15px rgba(255, 255, 255, 0.2);
        }

        /* Header Animation */
        .header-anim {
            animation: bounceIn 1s ease-out;
        }

        @keyframes bounceIn {
            0% {
                transform: scale(0.9);
                opacity: 0;
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Input Group Styling with Enhanced Animation */
        .input-group {
            position: relative;
            margin-bottom: 2rem;
            border-bottom: 2px solid rgba(16, 185, 129, 0.5);
            transition: border-color 0.3s ease;
        }

        .input-group:focus-within {
            border-color: #10B981;
        }

        .input-group input {
            width: 100%;
            padding: 0.75rem 1rem;
            background: transparent;
            border: none;
            color: #fff;
            outline: none;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .input-group input:focus {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }

        .input-group label {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #d1d5db;
            pointer-events: none;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .input-group input:focus~label,
        .input-group input:not(:placeholder-shown)~label {
            top: 5px;
            font-size: 0.75rem;
            color: #10B981;
        }

        .input-icon {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #d1d5db;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .input-icon:hover {
            color: #10B981;
        }

        /* Advanced Button with Ripple and Hover Effect */
        .btn-3d {
            position: relative;
            overflow: hidden;
            background: linear-gradient(90deg, #10B981, #065f46);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 10px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-3d:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.6);
        }

        .btn-3d::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }

        .btn-3d:active::before {
            width: 300px;
            height: 300px;
        }

        .btn-3d.disabled {
            background: #6b7280;
            box-shadow: none;
            cursor: not-allowed;
        }

        /* Loading Spinner */
        .loading-spinner {
            display: none;
            border: 3px solid transparent;
            border-top: 3px solid #fff;
            border-radius: 50%;
            width: 16px;
            height: 16px;
            animation: spin 1s linear infinite;
            margin-left: 0.5rem;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Checkbox Container */
        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .custom-checkbox {
            position: relative;
            width: 18px;
            height: 18px;
            margin-right: 10px;
            border: 2px solid rgba(16, 185, 129, 0.5);
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .custom-checkbox::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            color: #10B981;
            font-weight: bold;
            transition: all 0.2s ease;
        }

        .custom-checkbox.checked::after {
            transform: translate(-50%, -50%) scale(1);
        }

        /* Register Link with Animation */
        .register-link {
            position: relative;
            display: inline-block;
            color: #10B981;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .register-link::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #10B981;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease;
        }

        .register-link:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        /* Alert Box */
        .alert {
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            animation: slideIn 0.5s ease-out;
        }

        .alert-success {
            background-color: rgba(16, 185, 129, 0.2);
            border-left: 4px solid #10B981;
            color: #d1fae5;
        }

        .alert-error {
            background-color: rgba(239, 68, 68, 0.2);
            border-left: 4px solid #EF4444;
            color: #fee2e2;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Responsive Design */
        @media (max-width: 640px) {
            .glass {
                padding: 1.5rem;
            }

            .input-group {
                margin-bottom: 1.5rem;
            }

            .btn-3d {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }
        }

        /* Additional Spacing and Alignment */
        .form-container {
            padding: 2rem;
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
        }

        .text-center {
            text-align: center;
        }

        .mt-8 {
            margin-top: 2rem;
        }

        .space-y-6>*+* {
            margin-top: 1.5rem;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen relative">
    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Login Form -->
    <div class="relative z-10 form-container glass">
        <div class="text-center header-anim">
            <img src="{{asset('img/logo.jpg')}}" class="w-16 mx-auto mb-4 animate-pulse">
            <h1 class="text-3xl font-bold text-white">AgriLink</h1>
            <p class="text-gray-300 text-sm mt-1">Admin Login Portal</p>
        </div>

        <!-- Login Form - Changed to direct link to dashboard without form submission -->
        <div id="loginForm" class="mt-8 space-y-6">
            <!-- Email Input -->
            <div class="input-group">
                <input id="email" name="email" type="email" class="placeholder-transparent" placeholder=" " value="" required>
                <label for="email">Email Address</label>
                <span class="input-icon"><i class="fas fa-envelope"></i></span>
            </div>

            <!-- Password Input -->
            <div class="input-group">
                <input id="password" name="password" type="password" class="placeholder-transparent" placeholder=" " required>
                <label for="password">Password</label>
                <span class="input-icon" onclick="togglePassword()"><i class="fas fa-eye-slash"></i></span>
            </div>

            <!-- Remember Me Checkbox -->
            <div class="checkbox-container">
                <div id="rememberCheckbox" class="custom-checkbox" onclick="toggleCheckbox()"></div>
                <label for="rememberCheckbox" class="text-gray-300 text-sm cursor-pointer">Remember me</label>
                <a href="{{ route('admin.password.request') }}" class="text-gray-300 hover:text-white text-sm ml-auto">Forgot Password?</a>
            </div>

            <!-- Login Button - Changed to direct link to dashboard -->
            <a href="{{ route('admin.dashboard') }}" id="loginButton" class="w-full btn-3d flex justify-center items-center">
                <span>Login to Dashboard</span>
                <div id="loadingSpinner" class="loading-spinner"></div>
            </a>
        </div>

        <!-- Register Link -->
        <div class="text-center mt-6">
            <p class="text-gray-300 text-sm">
                Don't have an account? 
                <a href="{{ route('admin.register') }}" class="register-link">Register as Admin</a>
            </p>
        </div>

        <!-- Footer -->
        <p class="text-center text-gray-400 text-sm mt-6">© 2025 AgriLink | All Rights Reserved</p>
    </div>

    <script>
        // Toggle Password Visibility
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const icon = document.querySelector('.input-icon i');
            passwordField.type = passwordField.type === 'password' ? 'text' : 'password';
            icon.classList.toggle('fa-eye-slash');
            icon.classList.toggle('fa-eye');
        }
        
        // Toggle Remember Me Checkbox
        function toggleCheckbox() {
            const checkbox = document.getElementById('rememberCheckbox');
            checkbox.classList.toggle('checked');
        }
        
        // Show loading spinner on button click
        document.getElementById('loginButton').addEventListener('click', function() {
            document.getElementById('loadingSpinner').style.display = 'inline-block';
        });
    </script>
</body>

</html> 