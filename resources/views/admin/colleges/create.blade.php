<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add College - SkillTest Admin</title>
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f5f8fc;
            color: #1d3557;
        }


        /*MAIN LAYOUT*/
        .layout {
            display: flex;
            min-height: 100vh;
        }


        /*SIDEBAR*/
        .sidebar {
            width: 275px;
            background: #102957;
            color: white;
            min-height: 100vh;

            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
        }


        /*SKILLTEST BRAND*/
        .brand {
            padding: 28px 30px 24px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .brand h1 {
            font-size: 27px;
            font-weight: 700;
            color: white;
        }

        .brand h1 span {
            color: #169fe5;
        }

        .brand p {
            font-size: 12px;
            color: #d5e0f0;
            margin-top: 5px;
        }


        /*SIDEBAR MENU*/
        .menu {
            padding: 25px 15px;
        }

        .menu-title {
            font-size: 12px;
            color: #8fa5c6;
            margin: 0 0 12px 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .menu a {
            display: block;
            text-decoration: none;

            color: #dce6f5;

            padding: 13px 18px;
            margin-bottom: 6px;

            border-radius: 9px;

            font-size: 15px;

            transition: 0.2s;
        }

        .menu a:hover {
            background: rgba(255,255,255,0.08);
        }


        /* ACTIVE MENU */
        .menu a.active {
            background: #159fe5;
            color: white;
            font-weight: 600;
        }


        /*MAIN AREA*/
        .main {
            margin-left: 275px;

            width: calc(100% - 275px);

            min-height: 100vh;
        }


        /*TOP NAVBAR*/
        .topbar {
            height: 80px;

            background: white;

            border-bottom: 1px solid #e4eaf2;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 35px;
        }


        .topbar h2 {
            font-size: 22px;
            color: #1c3557;
        }


        /* =========================
           ADMIN AREA
        ========================= */

        .admin-area {
            display: flex;

            align-items: center;

            gap: 12px;
        }


        .admin-icon {
            width: 38px;
            height: 38px;

            border-radius: 50%;

            background: #eaf4ff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 18px;
        }


        .admin-name {
            font-weight: 600;
            color: #263b59;
        }


        .logout {
            text-decoration: none;

            background: #e87922;

            color: white;

            padding: 10px 17px;

            border-radius: 7px;

            font-size: 14px;

            margin-left: 10px;
        }


        .logout:hover {
            background: #d96712;
        }


        /*CONTENT */
        .content {
            padding: 35px;
        }


        .content h1 {
            font-size: 30px;

            margin-bottom: 8px;

            color: #1d3557;
        }


        .content-subtitle {
            color: #718198;

            margin-bottom: 28px;

            font-size: 15px;
        }


        /*FORM CARD*/
        .college-card {
            background: white;

            border-radius: 12px;

            border: 1px solid #e5ebf3;

            padding: 25px;

            max-width: 700px;

            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);
        }


        .college-card h3 {
            font-size: 19px;

            color: #1d3557;

            margin-bottom: 20px;
        }


        /*FORM GROUP*/
        .form-group {
            margin-bottom: 20px;
        }


        .form-group label {
            display: block;

            font-size: 14px;

            font-weight: 600;

            color: #263b59;

            margin-bottom: 8px;
        }


        .form-group input {
            width: 100%;

            padding: 12px 14px;

            border: 1px solid #dce4ee;

            border-radius: 7px;

            font-size: 14px;

            color: #263b59;

            outline: none;
        }


        .form-group input:focus {
            border-color: #159fe5;

            box-shadow: 0 0 0 3px rgba(21,159,229,0.10);
        }


        /* ERROR MESSAGE*/
        .error-message {
            background: #fff0f0;

            color: #d64545;

            border: 1px solid #f1caca;

            padding: 12px 16px;

            border-radius: 8px;

            margin-bottom: 20px;

            font-size: 14px;
        }


        /*BUTTONS*/
        .button-area {
            display: flex;

            gap: 10px;

            margin-top: 5px;
        }


        .btn-add {
            border: none;

            background: #159fe5;

            color: white;

            padding: 11px 18px;

            border-radius: 7px;

            font-size: 14px;

            font-weight: 600;

            cursor: pointer;
        }


        .btn-add:hover {
            background: #118bc9;
        }


        .btn-cancel {
            text-decoration: none;

            background: #eef1f5;

            color: #455a73;

            padding: 11px 18px;

            border-radius: 7px;

            font-size: 14px;
        }


        .btn-cancel:hover {
            background: #e1e6ec;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .sidebar {
                width: 220px;
            }

            .main {
                margin-left: 220px;

                width: calc(100% - 220px);
            }

            .topbar {
                padding: 0 20px;
            }

            .content {
                padding: 25px;
            }

        }


        @media (max-width: 700px) {

            .sidebar {
                width: 75px;
            }


            .brand {
                padding: 20px 10px;

                text-align: center;
            }


            .brand h1 {
                font-size: 18px;
            }


            .brand p {
                display: none;
            }


            .menu-title {
                display: none;
            }


            .menu a {
                font-size: 0;

                text-align: center;

                padding: 15px 5px;
            }


            .menu a::first-letter {
                font-size: 18px;
            }


            .main {
                margin-left: 75px;

                width: calc(100% - 75px);
            }


            .topbar {
                padding: 0 15px;
            }


            .topbar h2 {
                font-size: 18px;
            }


            .admin-name {
                display: none;
            }


            .content {
                padding: 20px;
            }


            .college-card {
                max-width: 100%;
            }

        }

    </style>

</head>

<body>

<div class="layout">
    <!--SIDEBAR-->

    <aside class="sidebar">

        <!-- SkillTest Brand -->
        <div class="brand">

            <h1>
                Skill<span>Test</span>
            </h1>

            <p>
                AI & Digital Assessment
            </p>

        </div>

        <!-- MENU -->
        <div class="menu">
            <!-- MAIN -->
            <div class="menu-title">
                Main
            </div>

            <a href="{{ route('admin.dashboard') }}">

                📊 &nbsp; Dashboard
            </a>

            <!-- MANAGEMENT -->
            <div
                class="menu-title"
                style="margin-top:25px;">

                Management

            </div>

            <a href="{{ route('admin.students') }}">

                👨‍🎓 &nbsp; Students
            </a>

            <!-- COLLEGES ACTIVE -->
            <a
                href="{{ route('admin.colleges') }}"
                class="active">
                🏫 &nbsp; Colleges
            </a>
            <a href="{{ route('admin.exam-papers') }}">

                📄 &nbsp; Exam Papers

            </a>
            <a href="{{ route('admin.questions') }}">

                ❓ &nbsp; Questions

            </a>

            <!-- EXAMINATION -->
            <div
                class="menu-title"
                style="margin-top:25px;">
                Examination
            </div>

            <a href="{{ route('admin.assign-exams') }}">

                📝 &nbsp; Assign Exams

            </a>

            <a href="{{ route('admin.results') }}">

                📊 &nbsp; Results

            </a>

        </div>

    </aside>

    <!--MAIN AREA-->
    <main class="main">

        <!--TOP NAVBAR-->
        <header class="topbar">

            <h2>
                Admin Panel
            </h2>

            <div class="admin-area">

                <div class="admin-icon">
                    👤
                </div>

                <span class="admin-name">

                    {{ session('admin_name') }}

                </span>

                <a
                    href="{{ route('admin.logout') }}"
                    class="logout"
                >

                    Logout

                </a>


            </div>


        </header>

        <!--PAGE CONTENT-->
        <section class="content">


            <h1>
                Add College
            </h1>


            <p class="content-subtitle">

                Add a new college to SkillTest.

            </p>

            <!-- VALIDATION ERRORS -->
            @if($errors->any())

                <div class="error-message">

                    <ul style="margin-left: 18px;">

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif
            <!-- COLLEGE FORM -->
            <div class="college-card">


                <h3>
                    College Details
                </h3>


                <form
                    action="{{ route('admin.colleges.store') }}"
                    method="POST"
                >

                    @csrf
                    <!-- COLLEGE NAME ONLY -->
                    <div class="form-group">

                        <label for="name">
                            College Name
                        </label>


                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Enter college name"
                            required
                        >

                    </div>

                    <!-- BUTTONS -->
                    <div class="button-area">


                        <button
                            type="submit"
                            class="btn-add"
                        >

                            Add College

                        </button>


                        <a
                            href="{{ route('admin.colleges') }}"
                            class="btn-cancel"
                        >

                            Cancel

                        </a>


                    </div>


                </form>


            </div>


        </section>


    </main>


</div>


</body>

</html>