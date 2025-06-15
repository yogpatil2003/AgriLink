<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriLink - Welcome</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            background: url('https://images.wallpaperscraft.com/image/single/tractor_field_art_145691_1920x1080.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .container {
            text-align: center;
            color: white;
            max-width: 600px;
            padding: 2rem;
            position: relative;
            z-index: 2;
        }

        .logo {
            width: 150px;
            height: 150px;
            margin: 0 auto 2rem;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        h1 {
            font-size: 3.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .btn {
            background-color: white;
            color: #10B981;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 9999px;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
        }

        .redirect-text {
            margin-top: 2rem;
            font-size: 0.9rem;
            opacity: 0.7;
        }

        .count {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="{{asset('img/logo.jpg')}}" alt="AgriLink Logo" class="logo">
        <h1>AgriLink</h1>
        <p>Connecting Farmers and Retailers for a Sustainable Future</p>
        <a href="{{ route('admin.login') }}" class="btn">Go to Admin Portal</a>
        {{-- <p class="redirect-text">Redirecting to admin login in <span id="countdown" class="count">5</span> seconds...</p> --}}
    </div>

    {{-- <script>
        // Redirect countdown
        let seconds = 5;
        const countdownElement = document.getElementById('countdown');
        
        const interval = setInterval(function() {
            seconds--;
            countdownElement.textContent = seconds;
            
            if (seconds <= 0) {
                clearInterval(interval);
                window.location.href = "{{ route('admin.login') }}";
            }
        }, 1000);
    </script> --}}
</body>

</html>
