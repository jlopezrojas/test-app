<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('Login') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #111;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
            }

            .login-container {
                max-width: 400px;
                width: 100%;
                background-color: #1a1a1a;
                border-radius: 10px;
                box-shadow: 0px 0px 30px rgba(255, 255, 255, 0.05);
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 40px;
                box-sizing: border-box;
            }

            .form-input {
                width: 100%;
                margin-bottom: 20px;
            }

            .form-input input {
                width: 100%;
                padding: 10px;
                border: none;
                border-radius: 5px;
                background-color: #252525;
                font-size: 1rem;
                color: #fff;
                box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.05);
            }

            .form-input label {
                display: block;
                margin-bottom: 5px;
                font-size: 0.9rem;
                color: #999;
            }

            .login-btn {
                width: 100%;
                padding: 10px;
                border: none;
                border-radius: 5px;
                background-color: #01a3a4;
                color: #fff;
                font-size: 1rem;
                cursor: pointer;
                transition: all 0.3s ease;
            }

            .login-btn:hover {
                background-color: #01918e;
            }

            .signup-link {
                margin-top: 20px;
                text-align: center;
            }

            .signup-link a {
                color: #fff;
                text-decoration: none;
                font-size: 0.9rem;
            }

            .signup-link a:hover {
                text-decoration: underline;
            }

            .toggle-container {
                margin-top: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .toggle-container label {
                margin-right: 10px;
                font-size: 0.9rem;
                color: #999;
            }
            .toggle-container input[type="checkbox"] {
                position: relative;
                display: inline-block;
                width: 60px;
                height: 34px;
                -webkit-appearance: none;
                appearance: none;
                background-color: #252525;
                border-radius: 34px;
                outline: none;
                border: none;
                box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.2);
                transition: all 0.3s ease;
                cursor: pointer;
            }

            .toggle-container input[type="checkbox"]::before {
                content: "";
                position: absolute;
                width: 30px;
                height: 30px;
                border-radius: 50%;
                background-color: #01a3a4;
                top: 2px;
                left: 2px;
                transition: all 0.3s ease;
                box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
            }

            .toggle-container input[type="checkbox"]:checked::before {
                transform: translateX(26px);
            }

            .toggle-container label {
                margin-right: 10px;
                font-size: 0.9rem;
                color: #999;
            }

            .toggle-container input[type="checkbox"] {
                margin-right: 10px;
            }

            .login-header {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 40px;
            }

            .login-header h1 {
                font-size: 2.5rem;
                margin-right: 10px;
            }

            .login-header img {
                width: 50px;
                height: 50px;
                object-fit: contain;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="login-container">
                <div class="login-header">
                    <h1>Login</h1>
                    <!-- <img src="https://via.placeholder.com/50" alt="Logo"> -->
                </div>

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="form-input">
                        <label for="email">{{ __('Email') }}</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>

                    <div class="form-input">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" name="password" required autocomplete="current-password">
                    </div>

                    <button type="submit" class="login-btn">{{ __('Login') }}</button>
                </form>

                <div class="signup-link">
                    <a href="{{ route('register') }}">{{ __('Don\'t have an account? Register') }}</a>
                </div>

                <div class="toggle-container">
                    <label for="toggle">{{ __('Login') }}</label>
                    <input id="toggle" type="checkbox">
                    <label for="toggle">{{ __('Register') }}</label>
                </div>
            </div>
        </div>

        <script>
            const toggle = document.querySelector('#toggle');

            toggle.addEventListener('change', () => {
                if (toggle.checked) {
                    window.location.href = '{{ route('register') }}';
                } else {
                    window.location.href = '{{ route('login') }}';
                }
            });
        </script>
    </body>
</html
