<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login - SkillTest</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            background: #f7f9fc;
            color: #1f2937;
        }

        /* Header */

        .header {
            height: 90px;
            background: #ffffff;
            display: flex;
            align-items: center;
            padding: 0 70px;
            border-bottom: 1px solid #e5e7eb;
        }

        .logo {
            font-size: 32px;
            font-weight: 700;
            color: #159bd3;
            letter-spacing: -1px;
        }

        .tagline {
            font-size: 13px;
            color: #666;
            margin-top: 3px;
        }

        /* Main */

        .main {
            min-height: calc(100vh - 90px);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        /* Login Card */

        .login-card {
            width: 100%;
            max-width: 430px;
            background: #ffffff;
            border-radius: 16px;
            padding: 38px 40px 42px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        /* Admin Icon */

        .admin-icon {
            width: 72px;
            height: 72px;
            margin: 0 auto 18px;
            border-radius: 50%;
            background: #f39a18;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 34px;
        }

        .login-card h1 {
            font-size: 32px;
            color: #162b49;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #8a8f98;
            font-size: 15px;
            margin-bottom: 30px;
        }

        /* Form */

        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 15px;
            font-weight: 600;
            color: #26364a;
            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            height: 48px;
            border: 1px solid #d9dee7;
            border-radius: 7px;
            padding: 0 14px;
            font-size: 14px;
            outline: none;
            transition: 0.2s;
            background: #fff;
        }

        .form-group input:focus {
            border-color: #159bd3;
            box-shadow: 0 0 0 3px rgba(21, 155, 211, 0.10);
        }

        .form-group input::placeholder {
            color: #a7adb5;
        }

        /* Login Button */

        .login-btn {
            width: 100%;
            height: 48px;
            border: none;
            border-radius: 7px;
            background: #f28c16;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
            margin-top: 5px;
        }

        .login-btn:hover {
            background: #df7d0d;
        }

        /* Error */

        .error-message {
            background: #fff1f1;
            border: 1px solid #ffd1d1;
            color: #d93025;
            padding: 10px 12px;
            border-radius: 6px;
            font-size: 13px;
            text-align: left;
            margin-bottom: 20px;
        }

        /* Back to Student */

        .student-link {
            margin-top: 25px;
            font-size: 14px;
            color: #888;
        }

        .student-link a {
            color: #159bd3;
            text-decoration: none;
            font-weight: 600;
        }

        .student-link a:hover {
            text-decoration: underline;
        }

        /* Responsive */

        @media (max-width: 600px) {

            .header {
                padding: 0 25px;
                height: 75px;
            }

            .logo {
                font-size: 28px;
            }

            .main {
                min-height: calc(100vh - 75px);
                padding: 25px 15px;
            }

            .login-card {
                padding: 32px 25px 35px;
            }

            .login-card h1 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->

    <header class="header">
        <div>
            <div class="logo">SkillTest</div>
            <div class="tagline">AI & Digital Assessment</div>
        </div>
    </header>


    <!-- Main -->

    <main class="main">

        <div class="login-card">

            <!-- Admin Icon -->

            <div class="admin-icon">
                🔐
            </div>

            <h1>Admin Login</h1>

            <p class="subtitle">
                Login to manage assessments
            </p>


            <!-- Error Message -->

            @if(session('error'))
                <div class="error-message">
                    {{ session('error') }}
                </div>
            @endif

            @if($errors->any())
                <div class="error-message">
                    {{ $errors->first() }}
                </div>
            @endif


            <!-- Login Form -->

            <form method="POST" action="{{ url('/admin/login') }}">

                @csrf

                <div class="form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter admin email"
                        value="{{ old('email') }}"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter password"
                        required
                    >

                </div>


                <button type="submit" class="login-btn">
                    Login
                </button>

            </form>


            <!-- Student Login Link -->

            <div class="student-link">
                Are you a student?
                <a href="{{ url('/student/login') }}">
                    Student Login
                </a>
            </div>

        </div>

    </main>

</body>
</html>