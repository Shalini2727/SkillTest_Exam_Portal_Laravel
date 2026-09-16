<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>My Results - SkillTest</title>

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

        /* CONTENT */

        .content {
            padding: 35px;
        }

        .page-title {
            font-size: 30px;
            margin-bottom: 8px;
        }

        .page-subtitle {
            color: #718198;
            margin-bottom: 30px;
            font-size: 15px;
        }

        /* STAT CARDS */

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .stat-card {
            background: white;
            border: 1px solid #e5ebf3;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);
        }

        .stat-label {
            color: #718198;
            font-size: 13px;
            margin-bottom: 10px;
        }

        .stat-value {
            color: #1d3557;
            font-size: 28px;
            font-weight: 700;
        }

        /* RESULTS CARD */

        .results-card {
            background: white;
            border: 1px solid #e5ebf3;
            border-radius: 14px;
            padding: 28px;
            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);
        }

        .results-card h2 {
            font-size: 20px;
            margin-bottom: 8px;
        }

        .results-card p {
            color: #718198;
            font-size: 14px;
            margin-bottom: 25px;
        }

        /* TABLE */

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f8fafc;
            color: #52657f;
            font-size: 13px;
            text-align: left;
            padding: 15px;
            border-bottom: 1px solid #e5ebf3;
        }

        td {
            padding: 18px 15px;
            border-bottom: 1px solid #edf1f5;
            color: #263b59;
            font-size: 14px;
        }

        tr:hover td {
            background: #fafcff;
        }

        .score {
            font-weight: 700;
            color: #1d3557;
        }

        .percentage {
            font-weight: 700;
            color: #159fe5;
        }

        .status {
            display: inline-block;
            background: #e7f8ef;
            color: #1b8a50;
            padding: 7px 13px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: capitalize;
        }

        .view-button {
            display: inline-block;
            text-decoration: none;
            background: #159fe5;
            color: white;
            padding: 9px 15px;
            border-radius: 7px;
            font-size: 13px;
            font-weight: 600;
        }

        .view-button:hover {
            background: #118bc9;
        }

        /* EMPTY */

        .empty {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-icon {
            font-size: 50px;
            margin-bottom: 15px;
        }

        .empty h3 {
            font-size: 20px;
            margin-bottom: 8px;
        }

        .empty p {
            color: #718198;
            margin-bottom: 25px;
        }

        .exam-button {
            display: inline-block;
            text-decoration: none;
            background: #159fe5;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: 600;
        }

        /* RESPONSIVE */

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

            .stats {
                grid-template-columns: 1fr;
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

            <a href="{{ route('student.dashboard') }}">
                📊 &nbsp; Dashboard
            </a>

            <div class="menu-title" style="margin-top:25px;">
                Examination
            </div>

            <a href="{{ route('student.exams') }}">
                📝 &nbsp; My Exams
            </a>

            <a href="{{ route('student.results') }}"
               class="active">
                📊 &nbsp; My Results
            </a>

            <div class="menu-title" style="margin-top:25px;">
                Account
            </div>

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


    <!-- MAIN -->
    <main class="main">

        <!-- TOPBAR -->
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


        <!-- CONTENT -->
        <section class="content">

            <h1 class="page-title">
                My Results
            </h1>

            <p class="page-subtitle">
                View your completed examination results and performance.
            </p>


            <!-- STATISTICS -->
            @php

                $completedExams = $results->count();

                $totalMarksObtained = $results->sum('score');

                $averagePercentage = $completedExams > 0
                    ? round($results->avg('percentage'), 2)
                    : 0;

            @endphp


            <div class="stats">

                <div class="stat-card">

                    <div class="stat-label">
                        Exams Completed
                    </div>

                    <div class="stat-value">
                        {{ $completedExams }}
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-label">
                        Total Marks Obtained
                    </div>

                    <div class="stat-value">
                        {{ $totalMarksObtained }}
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-label">
                        Average Percentage
                    </div>

                    <div class="stat-value">
                        {{ $averagePercentage }}%
                    </div>

                </div>

            </div>


            <!-- RESULTS -->

            <div class="results-card">

                <h2>
                    Examination Results
                </h2>

                <p>
                    Your completed examinations are shown below.
                </p>


                @if($results->count() > 0)

                    <div class="table-wrapper">

                        <table>

                            <thead>

                                <tr>

                                    <th>
                                        Subject
                                    </th>

                                    <th>
                                        Score
                                    </th>

                                    <th>
                                        Total Marks
                                    </th>

                                    <th>
                                        Percentage
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

                                @foreach($results as $result)

                                    <tr>

                                        <td>

                                            {{ $result->examAssignment->examPaper->subject ?? 'N/A' }}

                                        </td>


                                        <td class="score">

                                            {{ $result->score }}

                                        </td>


                                        <td>

                                            {{ $result->total_marks }}

                                        </td>


                                        <td class="percentage">

                                            {{ number_format($result->percentage, 2) }}%

                                        </td>


                                        <td>

                                            <span class="status">

                                                {{ $result->status ?? 'completed' }}

                                            </span>

                                        </td>


                                        <td>

                                            <a href="{{ route('student.result', $result->exam_assignment_id) }}"
                                               class="view-button">

                                                View Result

                                            </a>

                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>


                @else

                    <div class="empty">

                        <div class="empty-icon">
                            📊
                        </div>

                        <h3>
                            No Results Available
                        </h3>

                        <p>
                            Your completed examination results will appear here.
                        </p>

                        <a href="{{ route('student.exams') }}"
                           class="exam-button">

                            View My Exams

                        </a>

                    </div>

                @endif

            </div>

        </section>

    </main>

</div>

</body>

</html>