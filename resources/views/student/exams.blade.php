<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>My Exams - SkillTest</title>

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

        /* ================= SIDEBAR ================= */

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

        .menu a {
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

        /* ================= LOGOUT ================= */

        .logout-button {
            width: 100%;
            border: none;
            background: transparent;
            color: #dce6f5;
            padding: 13px 18px;
            text-align: left;
            border-radius: 9px;
            font-size: 15px;
            cursor: pointer;
        }

        .logout-button:hover {
            background: #159fe5;
            color: white;
        }

        /* ================= MAIN ================= */

        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
            min-height: 100vh;
        }

        /* ================= TOPBAR ================= */

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

        .student-area {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .student-icon {
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

        /* ================= CONTENT ================= */

        .content {
            padding: 35px;
        }

        .content h1 {
            font-size: 30px;
            margin-bottom: 8px;
        }

        .content-subtitle {
            color: #718198;
            margin-bottom: 30px;
            font-size: 15px;
        }

        /* ================= ALERTS ================= */

        .alert {
            padding: 13px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alert-success {
            background: #e7f8ef;
            color: #1b8a50;
        }

        .alert-error {
            background: #fdecec;
            color: #b42318;
        }

        /* ================= INFO CARD ================= */

        .info-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            border: 1px solid #e5ebf3;
            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);
            margin-bottom: 30px;
        }

        .info-card h2 {
            color: #1d3557;
            font-size: 20px;
            margin-bottom: 8px;
        }

        .info-card p {
            color: #718198;
            font-size: 14px;
            line-height: 1.6;
        }

        /* ================= TABLE ================= */

        .table-card {
            background: white;
            border-radius: 12px;
            border: 1px solid #e5ebf3;
            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);
            overflow: hidden;
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #f4f8fc;
        }

        th {
            text-align: left;
            padding: 16px 18px;
            font-size: 13px;
            color: #526781;
            border-bottom: 1px solid #e3e9f1;
            white-space: nowrap;
        }

        td {
            padding: 18px;
            font-size: 14px;
            color: #455a73;
            border-bottom: 1px solid #edf1f5;
            vertical-align: middle;
        }

        tbody tr:hover {
            background: #fafcff;
        }

        .subject-name {
            font-weight: 600;
            color: #1d3557;
            font-size: 15px;
        }

        .duration {
            color: #526781;
        }

        .marks {
            font-weight: 600;
            color: #1d3557;
        }

        /* ================= STATUS ================= */

        .status-pending {
            display: inline-block;
            background: #fff5df;
            color: #b47713;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .status-completed {
            display: inline-block;
            background: #e7f8ef;
            color: #1b8a50;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        /* ================= BUTTONS ================= */

        .start-button,
        .result-button {
            display: inline-block;
            text-decoration: none;
            color: white;
            padding: 10px 17px;
            border-radius: 7px;
            font-size: 13px;
            font-weight: 600;
        }

        .start-button {
            background: #159fe5;
        }

        .start-button:hover {
            background: #118bc9;
        }

        .result-button {
            background: #1b8a50;
        }

        .result-button:hover {
            background: #157642;
        }

        /* ================= EMPTY ================= */

        .empty {
            text-align: center;
            padding: 60px 20px;
            color: #7d8da3;
        }

        .empty-icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .empty h3 {
            color: #526781;
            margin-bottom: 8px;
        }

        .empty p {
            font-size: 14px;
        }

        /* ================= RESPONSIVE ================= */

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
            .logout-button {
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

        }

    </style>

</head>


<body>

<div class="layout">


    <!--SIDEBAR-->
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


            <!-- Dashboard -->

            <a href="{{ route('student.dashboard') }}">

                📊 &nbsp; Dashboard

            </a>


            <div class="menu-title"
                 style="margin-top:25px;">

                Examination

            </div>


            <!-- My Exams -->

            <a href="{{ route('student.exams') }}"
               class="active">

                📝 &nbsp; My Exams

            </a>


            <!-- My Results -->

            <a href="{{ route('student.results') }}">

                📊 &nbsp; My Results

            </a>


            <div class="menu-title"
                 style="margin-top:25px;">

                Account

            </div>


            <!-- Logout -->

            <form action="{{ route('student.logout') }}"
                  method="POST">

                @csrf

                <button type="submit"
                        class="logout-button">

                    🚪 &nbsp; Logout

                </button>

            </form>

        </div>

    </aside>


    <!--MAIN-->

    <main class="main">


        <!--TOPBAR-->

        <header class="topbar">

            <h2>
                Student Panel
            </h2>


            <div class="student-area">

                <div class="student-icon">
                    👤
                </div>

                <span class="student-name">

                    {{ session('student_name') }}

                </span>

            </div>

        </header>


        <!--CONTENT-->

        <section class="content">


            <h1>
                My Exams
            </h1>


            <p class="content-subtitle">

                View and manage all assessments assigned to you.

            </p>


            <!--SUCCESS MESSAGE-->

            @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

            @endif


            <!--ERROR MESSAGE-->
            @if(session('error'))

                <div class="alert alert-error">

                    {{ session('error') }}

                </div>

            @endif


            <!--INFO CARD-->
            <div class="info-card">

                <h2>
                    Your Assigned Assessments
                </h2>

                <p>

                    Below you can see all examinations assigned to
                    your account. Start an available exam or view
                    the result of an exam you have already completed.

                </p>

            </div>


            <!--EXAMS TABLE-->
            <div class="table-card">

                <div class="table-container">

                    <table>

                        <thead>

                            <tr>

                                <th>
                                    Subject
                                </th>

                                <th>
                                    Duration
                                </th>

                                <th>
                                    Total Marks
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Action
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                        @forelse($assignments as $assignment)


                            <tr>


                                <!-- SUBJECT -->

                                <td>

                                    <div class="subject-name">

                                        {{ $assignment->examPaper->subject ?? 'N/A' }}

                                    </div>

                                </td>


                                <!-- DURATION -->

                                <td class="duration">

                                    {{ $assignment->examPaper->duration ?? 0 }}
                                    minutes

                                </td>


                                <!-- TOTAL MARKS -->

                                <td class="marks">

                                    {{ $assignment->examPaper->total_marks ?? 0 }}

                                </td>


                                <!-- STATUS -->

                                <td>

                                    @if($assignment->submitted_at)

                                        <span class="status-completed">

                                            Completed

                                        </span>

                                    @else

                                        <span class="status-pending">

                                            Pending

                                        </span>

                                    @endif

                                </td>


                                <!-- ACTION -->

                                <td>

                                    @if($assignment->submitted_at)

                                        <!-- View Result -->

                                        <a href="{{ route('student.result', $assignment->id) }}"
                                           class="result-button">

                                            View Result

                                        </a>

                                    @else

                                        <!-- Start Exam -->

                                        <a href="{{ route('student.exam', $assignment->id) }}"
                                           class="start-button">

                                            Start Exam

                                        </a>

                                    @endif

                                </td>


                            </tr>


                        @empty


                            <!-- NO EXAMS -->

                            <tr>

                                <td colspan="5">

                                    <div class="empty">

                                        <div class="empty-icon">
                                            📝
                                        </div>

                                        <h3>
                                            No Exams Assigned
                                        </h3>

                                        <p>

                                            There are currently no
                                            examinations assigned to you.

                                        </p>

                                    </div>

                                </td>

                            </tr>


                        @endforelse


                        </tbody>

                    </table>

                </div>

            </div>


        </section>

    </main>

</div>

</body>

</html>
