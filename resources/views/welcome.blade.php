<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CVtech - Your Recruitment APK</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            background-image: url('/back.jpg');
            margin: 0;
            padding: 0;
            font-family: 'figtree', sans-serif;
            display: flex;
            justify-content: flex-start; /* Align content to the left */
            align-items: center;
            min-height: 100vh;
            animation: backgroundMovement 7s  alternate; 
        }
        @keyframes backgroundMovement {
            0% {
                background-position: 1px ; /* Start position of the background */
            }
            100% {
                background-position: 0px 0px; /* End position of the background */
            }
        }
        /* iPhone-like structure */
        .iphone-container {
            position: relative;
            width: 300px;
            height: 550px;
            background-color: #4F4F4F; 
            border-radius: 35px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border: 4px solid #4F4F4F; 
            background-image: url('/back.jpg');
            animation: backgroundMovement 7s  alternate;
        }

        .iphone-notch {
            position: absolute;
            top: 15px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 20px;
            background-color: #4F4F4F; 
            border-radius: 50%;
            border: 2px solid #4F4F4F; 
        }

        .iphone-screen {
            position: absolute;
            top: 40px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            background-color: #fff;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-image: url('/grey.jpg');
            animation: backgroundMovement 7s  alternate;
        }

        
        .fb-heading {
            font-size: 32px;
            font-weight: 600;
            color:#4F4F4F ; 
            margin-bottom: 20px;
            animation: backgroundMovement 7s  alternate;
            
        }

        

        
        .btn-container {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            border-radius: 6px;
            transition: background-color 0.3s ease;
            margin-bottom: 10px;
            background-color: #4F4F4F; 
            color: #fff; 
            animation: backgroundMovement 7s  alternate;
            border: 2px solid #4F4F4F; /
        }

        .btn-login:hover,
        .btn-register:hover {
            background-color: #4F4F4F; 
            border: 2px solid #4F4F4F; 
        }
    </style>
</head>
<body class="antialiased">
    <div class="iphone-container">
        <div class="iphone-notch"></div>
        <div class="iphone-screen">
            <div class="fb-icon"></div>
            <div class="fb-heading"></div>

            @if (Route::has('login'))
                <div class="btn-container">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-login">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-login">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-register">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</body>
</html>
