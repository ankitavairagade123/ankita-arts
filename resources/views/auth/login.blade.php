
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Art Gallery</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background: #171714;
           font-family: "Segoe UI", Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 1050px;
            min-height: 620px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: #f8f5ef;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.35);
        }

        /* LEFT PANEL */

        .welcome-panel {
            background: #25251f;
            color: #f8f5ef;
            padding: 55px 50px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }

        .welcome-panel::before {
            content: "";
            position: absolute;
            width: 430px;
            height: 430px;
            border: 1px solid rgba(202, 166, 112, 0.35);
            border-radius: 50%;
            top: 130px;
            left: 90px;
        }

        .welcome-panel::after {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            border: 1px solid rgba(202, 166, 112, 0.25);
            border-radius: 50%;
            top: 195px;
            left: 155px;
        }

        .brand {
            position: relative;
            z-index: 2;
        }

        .brand-icon {
            color: #c9a66b;
            font-size: 27px;
            margin-right: 10px;
        }

        .brand-name {
           font-family: "Segoe UI", Arial, sans-serif;
            font-size: 23px;
            letter-spacing: 1px;
        }

        .welcome-content {
            position: relative;
            z-index: 2;
            max-width: 390px;
        }

        .welcome-label {
            color: #c9a66b;
            text-transform: uppercase;
            letter-spacing: 4px;
            font-size: 11px;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .welcome-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(40px, 5vw, 58px);
            line-height: 1.2;
            font-weight: 500;
            margin-bottom: 25px;
        }

        .welcome-content h1 span {
            color: #c9a66b;
            font-style: italic;
        }

        .welcome-content p {
            color: #b9b6ad;
            font-size: 14px;
            line-height: 1.9;
        }

        .welcome-footer {
            position: relative;
            z-index: 2;
            color: #96948c;
            font-size: 11px;
            letter-spacing: 1px;
        }

        .decorative-line {
            width: 55px;
            height: 2px;
            background: #c9a66b;
            margin-bottom: 25px;
        }

        /* RIGHT PANEL */

        .form-panel {
            padding: 65px 65px 45px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-heading {
            margin-bottom: 38px;
        }

        .form-heading .small-title {
            color: #a47b45;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .form-heading h2 {
            font-family: 'Playfair Display', serif;
            font-size: 38px;
            color: #25251f;
            margin-bottom: 10px;
        }

        .form-heading p {
            color: #88847c;
            font-size: 13px;
        }

        .form-label {
            color: #34332e;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 9px;
        }

        .input-group-custom {
            position: relative;
            margin-bottom: 23px;
        }

        .input-group-custom i {
            position: absolute;
            left: 17px;
            top: 50%;
            transform: translateY(-50%);
            color: #a47b45;
            font-size: 16px;
            z-index: 3;
        }

        .form-control {
            height: 52px;
            border: 1px solid #e4dfd5;
            border-radius: 7px !important;
            background: #fff;
            padding-left: 47px;
            font-size: 13px;
            color: #333;
        }

        .form-control:focus {
            border-color: #b38a53;
            box-shadow: 0 0 0 3px rgba(179, 138, 83, 0.12);
        }

        .form-control::placeholder {
            color: #aaa69e;
        }

        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 5px 0 28px;
            font-size: 12px;
        }

        .form-check-input:checked {
            background-color: #a47b45;
            border-color: #a47b45;
        }

        .form-check-label {
            color: #77736b;
        }

        .forgot-link {
            color: #a47b45;
            text-decoration: none;
            font-weight: 600;
        }

        .forgot-link:hover {
            color: #74532e;
        }

        .login-btn {
            width: 100%;
            height: 53px;
            background: #25251f;
            color: #fff;
            border: none;
            border-radius: 7px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1px;
            transition: 0.3s ease;
        }

        .login-btn:hover {
            background: #a47b45;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(164, 123, 69, 0.2);
        }

        .login-btn i {
            margin-left: 9px;
        }

        .bottom-text {
            text-align: center;
            color: #aaa69e;
            font-size: 11px;
            margin-top: 35px;
        }

        .alert {
            font-size: 13px;
        }

        @media (max-width: 768px) {
            body {
                padding: 15px;
            }

            .login-wrapper {
                grid-template-columns: 1fr;
                max-width: 480px;
            }

            .welcome-panel {
                min-height: 260px;
                padding: 30px;
            }

            .welcome-panel::before {
                top: 40px;
                left: 220px;
            }

            .welcome-panel::after {
                top: 75px;
                left: 255px;
            }

            .welcome-content {
                margin-top: 45px;
            }

            .welcome-content h1 {
                font-size: 35px;
            }

            .welcome-footer {
                display: none;
            }

            .form-panel {
                padding: 40px 30px;
            }
        }
    </style>
</head>

<body>

    <div class="login-wrapper">

        <!-- LEFT SIDE -->
        <div class="welcome-panel">

            <div class="brand d-flex align-items-center">
                <i class="bi bi-palette2 brand-icon"></i>
                <span class="brand-name">Art Gallery</span>
            </div>

            <div class="welcome-content">

                <div class="decorative-line"></div>

                <div class="welcome-label">
                    Art • Creativity • Expression
                </div>

                <h1>
                    Where Art<br>
                    Meets <span>Inspiration.</span>
                </h1>

                <p>
                    Every masterpiece tells a story.
                    Step into a world of creativity, imagination
                    and timeless artistic expression.
                </p>

            </div>

            <div class="welcome-footer">
                © {{ date('Y') }} ART GALLERY. ALL RIGHTS RESERVED.
            </div>

        </div>


        <!-- RIGHT SIDE -->
        <div class="form-panel">

            <div class="form-heading">

                <div class="small-title">Welcome Back</div>

                <h2>Sign In</h2>

                <p>Enter your details to access your account.</p>

            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">

                @csrf

                <!-- EMAIL -->
                <div>
                    <label for="email" class="form-label">
                        Email Address
                    </label>

                    <div class="input-group-custom">
                        <i class="bi bi-envelope"></i>

                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control"
                            placeholder="Enter your email address"
                            value="{{ old('email') }}"
                            required
                            autofocus
                        >
                    </div>
                </div>

                <!-- PASSWORD -->
                <div>
                    <label for="password" class="form-label">
                        Password
                    </label>

                    <div class="input-group-custom">
                        <i class="bi bi-lock"></i>

                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control"
                            placeholder="Enter your password"
                            required
                        >
                    </div>
                </div>

                <!-- OPTIONS -->
                <div class="form-options">

                    <div class="form-check">
                        <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                            class="form-check-input"
                        >

                        <label for="remember" class="form-check-label">
                            Remember me
                        </label>
                    </div>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-link">
                            Forgot Password?
                        </a>
                    @endif

                </div>

                <!-- BUTTON -->
                <button type="submit" class="login-btn">
                    SIGN IN
                    <i class="bi bi-arrow-right"></i>
                </button>

            </form>

            <div class="bottom-text">
                Crafted with creativity and passion.
            </div>

        </div>

    </div>

</body>
</html>
