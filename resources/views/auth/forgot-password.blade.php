
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Forgot Password | Art Gallery</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background: #f4f0e8;
            font-family: 'DM Sans', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
        }

        .forgot-wrapper {
            width: 100%;
            max-width: 1050px;
            min-height: 570px;
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            background: #fffdf8;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(35, 30, 22, 0.12);
        }

        /* Left Section */

        .forgot-left {
            background: #20201e;
            color: #fff;
            padding: 65px 50px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #d6b878;
            font-size: 21px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .brand i {
            font-size: 27px;
        }

        .left-content {
            position: relative;
            z-index: 2;
        }

        .left-content .small-title {
            color: #d6b878;
            font-size: 12px;
            letter-spacing: 4px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .left-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 43px;
            line-height: 1.25;
            margin-bottom: 22px;
        }

        .left-content p {
            color: #c1bdb4;
            font-size: 14px;
            line-height: 1.9;
            max-width: 340px;
        }

        .left-decoration {
            position: absolute;
            width: 280px;
            height: 280px;
            border: 1px solid rgba(214, 184, 120, 0.25);
            border-radius: 50%;
            right: -110px;
            bottom: -100px;
        }

        .left-decoration::before {
            content: "";
            position: absolute;
            width: 190px;
            height: 190px;
            border: 1px solid rgba(214, 184, 120, 0.25);
            border-radius: 50%;
            top: 40px;
            left: 40px;
        }

        .left-footer {
            color: #8e8980;
            font-size: 12px;
            letter-spacing: 1px;
            position: relative;
            z-index: 2;
        }

        /* Right Section */

        .forgot-right {
            padding: 65px 65px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-icon {
            width: 65px;
            height: 65px;
            background: #f4eddf;
            color: #b18b45;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            font-size: 27px;
            margin-bottom: 28px;
        }

        .forgot-right h2 {
            font-family: 'Playfair Display', serif;
            font-size: 35px;
            color: #262520;
            margin-bottom: 12px;
        }

        .description {
            color: #88847b;
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .form-label {
            color: #44413a;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 9px;
        }

        .input-group-custom {
            position: relative;
        }

        .input-group-custom i {
            position: absolute;
            left: 17px;
            top: 50%;
            transform: translateY(-50%);
            color: #a18b63;
            font-size: 17px;
        }

        .form-control {
            height: 53px;
            padding-left: 48px;
            border: 1px solid #e7e1d6;
            border-radius: 9px;
            background: #fff;
            font-size: 14px;
        }

        .form-control:focus {
            border-color: #b18b45;
            box-shadow: 0 0 0 3px rgba(177, 139, 69, 0.12);
        }

        .reset-btn {
            width: 100%;
            height: 53px;
            margin-top: 25px;
            border: none;
            border-radius: 9px;
            background: #262520;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: 0.3s;
        }

        .reset-btn:hover {
            background: #b18b45;
            color: #fff;
            transform: translateY(-2px);
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 25px;
            color: #777167;
            text-decoration: none;
            font-size: 13px;
        }

        .back-link:hover {
            color: #b18b45;
        }

        .alert {
            font-size: 13px;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            .forgot-wrapper {
                grid-template-columns: 1fr;
                max-width: 480px;
            }

            .forgot-left {
                padding: 30px;
                min-height: 260px;
            }

            .left-content {
                margin-top: 35px;
            }

            .left-content h1 {
                font-size: 32px;
            }

            .left-footer {
                margin-top: 25px;
            }

            .forgot-right {
                padding: 40px 30px;
            }
        }
    </style>
</head>

<body>

    <div class="forgot-wrapper">

        <!-- Left Section -->
        <div class="forgot-left">

            <div class="brand">
                <i class="bi bi-palette2"></i>
                <span>Art Gallery</span>
            </div>

            <div class="left-content">
                <div class="small-title">Account Recovery</div>

                <h1>A fresh start<br>begins here.</h1>

                <p>
                    Every masterpiece deserves a second chance.
                    Let's help you regain access to your account
                    and continue your creative journey.
                </p>
            </div>

            <div class="left-footer">
                © {{ date('Y') }} Art Gallery. All rights reserved.
            </div>

            <div class="left-decoration"></div>

        </div>

        <!-- Right Section -->
        <div class="forgot-right">

            <div class="form-icon">
                <i class="bi bi-shield-lock"></i>
            </div>

            <h2>Forgot Password?</h2>

            <p class="description">
                Don't worry, it happens. Enter your registered email
                address and we'll send you a link to reset your password.
            </p>

            <!-- Success Message -->
            @if (session('status'))
                <div class="alert alert-success">
                    <i class="bi bi-check-circle me-2"></i>
                    {{ session('status') }}
                </div>
            @endif

            <!-- Email Form -->
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>

                    <div class="input-group-custom">
                        <i class="bi bi-envelope"></i>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="form-control"
                            placeholder="Enter your registered email"
                            required
                            autofocus
                        >
                    </div>

                    @error('email')
                        <div class="text-danger small mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="reset-btn">
                    Send Reset Link
                    <i class="bi bi-arrow-right ms-2"></i>
                </button>

            </form>

            <a href="{{ route('login') }}" class="back-link">
                <i class="bi bi-arrow-left me-2"></i>
                Back to Login
            </a>

        </div>

    </div>

</body>
</html>
