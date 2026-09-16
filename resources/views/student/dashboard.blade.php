<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Dashboard - SkillTest</title>

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

        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */

        .sidebar {
            width: 250px;
            background: #102957;
            color: white;
            min-height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
        }

        .brand {
            padding: 28px 30px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .brand h1 {
            font-size: 27px;
            color: white;
        }

        .brand h1 span {
            color: #159fe5;
        }

        .brand p {
            font-size: 12px;
            color: #d5e0f0;
            margin-top: 5px;
        }

        .menu {
            padding: 25px 15px;
        }

        .menu-title {
            font-size: 12px;
            color: #8fa5c6;
            margin: 0 0 12px 18px;
            text-transform: uppercase;
        }

        .menu a,
        .sidebar-logout {
            display: block;
            text-decoration: none;
            color: #dce6f5;
            padding: 13px 18px;
            margin-bottom: 6px;
            border-radius: 9px;
            font-size: 15px;
        }

        .menu a:hover,
        .menu a.active {
            background: #159fe5;
            color: white;
        }

        /* LOGOUT */

        .logout-form {
            margin: 0;
            padding: 0;
        }

        .sidebar-logout {
            width: 100%;
            border: none;
            background: transparent;
            text-align: left;
            cursor: pointer;
        }

        .sidebar-logout:hover {
            background: #e87922;
            color: white;
        }

        /* MAIN */

        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
            min-height: 100vh;
        }

        /* TOPBAR */

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

        .student-name {
            font-weight: 600;
            color: #263b59;
        }

        /* CONTENT */

        .content {
            padding: 35px;
        }

        .content h1 {
            font-size: 30px;
            margin-bottom: 8px;
        }

        .content-subtitle {
            color: #718198;
            margin-bottom: 28px;
            font-size: 15px;
        }

        /* MESSAGES */

        .success-message {
            background: #e7f8ef;
            color: #1b8a50;
            border: 1px solid #c9eedb;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .error-message {
            background: #fff0f0;
            color: #d64545;
            border: 1px solid #f1caca;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        /* PROFILE */

        .profile-card {
            background: white;
            border-radius: 12px;
            padding: 28px;
            border: 1px solid #e5ebf3;
            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);
            display: flex;
            align-items: center;
            gap: 22px;
            margin-bottom: 30px;
        }

        .profile-icon {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            background: #159fe5;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            font-weight: 600;
        }

        .profile-info h2 {
            font-size: 24px;
            margin-bottom: 8px;
            color: #1d3557;
        }

        .profile-info p {
            color: #718198;
            margin-bottom: 6px;
            font-size: 14px;
        }

        /* STATISTICS */

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 23px;
            border: 1px solid #e5ebf3;
            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);
        }

        .stat-title {
            color: #718198;
            font-size: 13px;
            margin-bottom: 10px;
        }

        .stat-value {
            font-size: 30px;
            font-weight: 700;
            color: #1d3557;
        }

        .stat-description {
            color: #8a99ad;
            font-size: 12px;
            margin-top: 7px;
        }

        /* INFORMATION CARD */

        .information-card {
            background: white;
            border-radius: 12px;
            border: 1px solid #e5ebf3;
            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);
            padding: 30px;
            margin-bottom: 30px;
        }

        .information-card h2 {
            font-size: 22px;
            color: #1d3557;
            margin-bottom: 12px;
        }

        .information-card p {
            color: #718198;
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 15px;
        }

        .information-list {
            padding-left: 20px;
            color: #526781;
            font-size: 14px;
            line-height: 2;
        }

        .exam-button {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            background: #159fe5;
            color: white;
            padding: 11px 20px;
            border-radius: 7px;
            font-size: 14px;
            font-weight: 600;
        }

        .exam-button:hover {
            background: #118bc9;
        }

        /* RESPONSIVE */

        @media (max-width: 1100px) {

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media (max-width: 900px) {

            .sidebar {
                width: 210px;
            }

            .main {
                margin-left: 210px;
                width: calc(100% - 210px);
            }

            .content {
                padding: 25px;
            }

        }

        @media (max-width: 700px) {

            .sidebar {
                width: 70px;
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

            .menu a,
            .sidebar-logout {
                font-size: 0;
                text-align: center;
                padding: 15px 5px;
            }

            .main {
                margin-left: 70px;
                width: calc(100% - 70px);
            }

            .topbar {
                padding: 0 15px;
            }

            .student-name {
                display: none;
            }

            .content {
                padding: 20px;
            }

            .profile-card {
                padding: 20px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>


<div class="layout">


    <!-- SIDEBAR -->

    <aside class="sidebar">

        <div class="brand">

            <h1>
                Skill<span>Test</span>
            </h1>

            <p>
                AI & Digital Assessment
            </p>

        </div>


        <div class="menu">

            <div class="menu-title">
                Main
            </div>


            <!-- DASHBOARD -->

            <a
                href="{{ route('student.dashboard') }}"
                class="active"
            >
                📊 &nbsp; Dashboard
            </a>


            <div
                class="menu-title"
                style="margin-top:25px;"
            >
                Examination
            </div>


            <!-- MY EXAMS -->

            <a href="{{ route('student.exams') }}">
                📝 &nbsp; My Exams
            </a>


            <!-- MY RESULTS -->

            <a href="{{ route('student.results') }}">
                📊 &nbsp; My Results
            </a>


            <!-- LOGOUT -->

            <form
                action="{{ route('student.logout') }}"
                method="POST"
                class="logout-form"
            >

                @csrf

                <button
                    type="submit"
                    class="sidebar-logout"
                >
                    🚪 &nbsp; Logout
                </button>

            </form>


        </div>

    </aside>



    <!-- MAIN -->

    <main class="main">


        <!-- TOPBAR -->

        <header class="topbar">

            <h2>
                Student Panel
            </h2>


            <div class="admin-area">

                <div class="admin-icon">
                    👤
                </div>


                <span class="student-name">

                    {{ trim($student->first_name . ' ' . $student->middle_name . ' ' . $student->last_name) }}

                </span>

            </div>

        </header>



        <!-- CONTENT -->

        <section class="content">


            <h1>
                Student Dashboard
            </h1>


            <p class="content-subtitle">
                Welcome back! Manage your assessments and track your performance.
            </p>



            <!-- MESSAGES -->

            @if(session('success'))

                <div class="success-message">
                    {{ session('success') }}
                </div>

            @endif


            @if(session('error'))

                <div class="error-message">
                    {{ session('error') }}
                </div>

            @endif



            <!-- STUDENT PROFILE -->

            <div class="profile-card">


                <div class="profile-icon">

                    {{ strtoupper(substr($student->first_name ?? 'S', 0, 1)) }}

                </div>


                <div class="profile-info">

                    <h2>

                        {{ $student->first_name ?? '' }}

                        {{ $student->middle_name ?? '' }}

                        {{ $student->last_name ?? '' }}

                    </h2>


                    <p>
                        {{ $student->email ?? '' }}
                    </p>


                    <p>
                        {{ $student->qualification ?? '' }}
                    </p>

                </div>

            </div>



            <!-- STATISTICS -->

            @php

                $totalExams = $assignments->count();

                $completedExams = $assignments
                    ->whereNotNull('submitted_at')
                    ->count();

                $pendingExams = $assignments
                    ->whereNull('submitted_at')
                    ->count();

                $averagePercentage = $results->count() > 0
                    ? round($results->avg('percentage'), 2)
                    : 0;

            @endphp


            <div class="stats-grid">


                <!-- TOTAL EXAMS -->

                <div class="stat-card">

                    <div class="stat-title">
                        Total Exams
                    </div>

                    <div class="stat-value">
                        {{ $totalExams }}
                    </div>

                    <div class="stat-description">
                        Exams assigned to you
                    </div>

                </div>



                <!-- PENDING -->

                <div class="stat-card">

                    <div class="stat-title">
                        Pending Exams
                    </div>

                    <div class="stat-value">
                        {{ $pendingExams }}
                    </div>

                    <div class="stat-description">
                        Exams waiting to be attempted
                    </div>

                </div>



                <!-- COMPLETED -->

                <div class="stat-card">

                    <div class="stat-title">
                        Completed Exams
                    </div>

                    <div class="stat-value">
                        {{ $completedExams }}
                    </div>

                    <div class="stat-description">
                        Exams successfully completed
                    </div>

                </div>



                <!-- AVERAGE -->

                <div class="stat-card">

                    <div class="stat-title">
                        Average Percentage
                    </div>

                    <div class="stat-value">
                        {{ $averagePercentage }}%
                    </div>

                    <div class="stat-description">
                        Based on completed exams
                    </div>

                </div>


            </div>
        </section>


    </main>


</div>


</body>

</html>

