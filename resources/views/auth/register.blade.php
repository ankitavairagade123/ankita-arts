
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register | Art Gallery</title>

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
            font-family: 'DM Sans', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .register-wrapper {
            width: 100%;
            max-width: 1050px;
            min-height: 680px;
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
            font-family: 'Playfair Display', serif;
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

        .decorative-line {
            width: 55px;
            height: 2px;
            background: #c9a66b;
            margin-bottom: 25px;
        }

        .welcome-footer {
            position: relative;
            z-index: 2;
            color: #96948c;
            font-size: 11px;
            letter-spacing: 1px;
        }

        /* RIGHT PANEL */

        .form-panel {
            padding: 45px 65px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-heading {
            margin-bottom: 28px;
        }

        .small-title {
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
            margin-bottom: 8px;
        }

        .input-group-custom {
            position: relative;
            margin-bottom: 19px;
        }

        .input-group-custom > i:first-child {
            position: absolute;
            left: 17px;
            top: 50%;
            transform: translateY(-50%);
            color: #a47b45;
            font-size: 16px;
            z-index: 2;
        }

        .form-control {
            height: 50px;
            border: 1px solid #e4dfd5;
            border-radius: 7px;
            background: #fff;
            padding: 10px 45px;
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

        .password-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #a47b45;
            cursor: pointer;
            z-index: 3;
        }

        .error-message {
            color: #dc3545;
            font-size: 12px;
            margin-top: -13px;
            margin-bottom: 14px;
        }

        .register-btn {
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
            margin-top: 8px;
        }

        .register-btn:hover {
            background: #a47b45;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(164, 123, 69, 0.2);
        }

        .register-btn i {
            margin-left: 9px;
        }

        .login-link {
            text-align: center;
            color: #88847c;
            font-size: 12px;
            margin-top: 25px;
        }

        .login-link a {
            color: #a47b45;
            text-decoration: none;
            font-weight: 700;
            margin-left: 5px;
        }

        .login-link a:hover {
            color: #74532e;
            text-decoration: underline;
        }

        .bottom-text {
            text-align: center;
            color: #aaa69e;
            font-size: 11px;
            margin-top: 25px;
        }

        /* RESPONSIVE */

        @media (max-width: 768px) {

            body {
                padding: 15px;
            }

            .register-wrapper {
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

    <div class="register-wrapper">

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
                    Where Your
                    <span>Journey</span> Begins.
                </h1>

                <p>
                    Join our creative world and discover a place
                    where imagination has no boundaries.
                    Create, explore and celebrate the beauty of art.
                </p>

            </div>

            <div class="welcome-footer">
                © {{ date('Y') }} ART GALLERY. ALL RIGHTS RESERVED.
            </div>

        </div>


        <!-- RIGHT SIDE -->

        <div class="form-panel">

            <div class="form-heading">

                <div class="small-title">
                    Join Our Community
                </div>

                <h2>Create Account</h2>

                <p>Fill in your details to get started.</p>

            </div>


            <form method="POST" action="{{ route('register') }}">

                @csrf

                <!-- NAME -->

                <div>
                    <label for="name" class="form-label">
                        Full Name
                    </label>

                    <div class="input-group-custom">

                        <i class="bi bi-person"></i>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}"
                            placeholder="Enter your full name"
                            required
                            autofocus
                            autocomplete="name"
                        >

                    </div>

                    @error('name')
                        <div class="error-message">{{ $message }}</div>
                    @enderror

                </div>


                <!-- EMAIL -->

                <div>
                    <label for="email" class="form-label">
                        Email Address
                    </label>

                    <div class="input-group-custom">

                        <i class="bi bi-envelope"></i>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}"
                            placeholder="Enter your email"
                            required
                            autocomplete="username"
                        >

                    </div>

                    @error('email')
                        <div class="error-message">{{ $message }}</div>
                    @enderror

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
                            id="password"
                            name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Create a password"
                            required
                            autocomplete="new-password"
                        >

                        <i class="bi bi-eye password-toggle"
                           data-target="password"></i>

                    </div>

                    @error('password')
                        <div class="error-message">{{ $message }}</div>
                    @enderror

                </div>


                <!-- CONFIRM PASSWORD -->

                <div>
                    <label for="password_confirmation" class="form-label">
                        Confirm Password
                    </label>

                    <div class="input-group-custom">

                        <i class="bi bi-shield-lock"></i>

                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            class="form-control"
                            placeholder="Confirm your password"
                            required
                            autocomplete="new-password"
                        >

                        <i class="bi bi-eye password-toggle"
                           data-target="password_confirmation"></i>

                    </div>

                </div>


                <!-- REGISTER BUTTON -->

                <button type="submit" class="register-btn">
                    CREATE ACCOUNT
                    <i class="bi bi-arrow-right"></i>
                </button>

            </form>


            <!-- LOGIN LINK -->

            <div class="login-link">
                Already have an account?

                <a href="{{ route('login') }}">
                    Sign In
                </a>
            </div>

            <div class="bottom-text">
                Crafted with creativity and passion.
            </div>

        </div>

    </div>


    <!-- PASSWORD SHOW / HIDE -->

    <script>
        document.querySelectorAll('.password-toggle').forEach(function(toggle) {

            toggle.addEventListener('click', function() {

                const input = document.getElementById(this.dataset.target);

                if (input.type === 'password') {

                    input.type = 'text';

                    this.classList.replace('bi-eye', 'bi-eye-slash');

                } else {

                    input.type = 'password';

                    this.classList.replace('bi-eye-slash', 'bi-eye');

                }

            });

        });
    </script>

</body>
</html>
