```blade
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Results - SkillTest
    </title>


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


        /* =========================
           LAYOUT
        ========================= */

        .layout {
            display: flex;
            min-height: 100vh;
        }


        /* =========================
           SIDEBAR
        ========================= */

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


        /* =========================
           BRAND
        ========================= */

        .brand {
            padding: 28px 30px 24px;

            border-bottom:
                1px solid rgba(255,255,255,0.08);
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


        /* =========================
           MENU
        ========================= */

        .menu {
            padding: 25px 15px;
        }


        .menu-title {
            font-size: 12px;
            color: #8fa5c6;

            margin:
                0 0 12px 18px;

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
            background:
                rgba(255,255,255,0.08);
        }


        .menu a.active {
            background: #159fe5;
            color: white;
            font-weight: 600;
        }


        /* =========================
           MAIN
        ========================= */

        .main {
            margin-left: 275px;

            width:
                calc(100% - 275px);

            min-height: 100vh;
        }


        /* =========================
           TOPBAR
        ========================= */

        .topbar {
            height: 80px;

            background: white;

            border-bottom:
                1px solid #e4eaf2;

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


        /* =========================
           CONTENT
        ========================= */

        .content {
            padding: 35px;
        }


        .content-header {
            margin-bottom: 28px;
        }


        .content-header h1 {
            font-size: 30px;

            margin-bottom: 8px;

            color: #1d3557;
        }


        .content-header p {
            color: #718198;

            font-size: 15px;
        }


        /* =========================
           STATISTICS
        ========================= */

        .stats {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 18px;

            margin-bottom: 28px;
        }


        .stat-card {
            background: white;

            border-radius: 12px;

            border:
                1px solid #e5ebf3;

            padding: 22px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            box-shadow:
                0 2px 8px
                rgba(20,50,90,0.04);
        }


        .stat-card p {
            color: #718198;

            font-size: 13px;

            margin-bottom: 8px;
        }


        .stat-card h2 {
            color: #1d3557;

            font-size: 27px;
        }


        .stat-icon {
            width: 46px;
            height: 46px;

            border-radius: 10px;

            background: #eaf5ff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 21px;
        }


        /* =========================
           RESULTS CARD
        ========================= */

        .results-card {
            background: white;

            border:
                1px solid #e5ebf3;

            border-radius: 12px;

            box-shadow:
                0 2px 8px
                rgba(20,50,90,0.04);

            overflow: hidden;
        }


        .results-header {
            padding: 23px 25px;

            border-bottom:
                1px solid #edf1f5;

            display: flex;

            align-items: center;

            justify-content: space-between;
        }


        .results-header h2 {
            font-size: 19px;

            color: #1d3557;
        }


        .results-header p {
            color: #718198;

            font-size: 13px;

            margin-top: 5px;
        }


        /* =========================
           TABLE
        ========================= */

        .table-container {
            width: 100%;

            overflow-x: auto;
        }


        table {
            width: 100%;

            border-collapse: collapse;

            min-width: 1000px;
        }


        th {
            background: #f8fafc;

            color: #718198;

            font-size: 12px;

            font-weight: 600;

            text-transform: uppercase;

            letter-spacing: 0.3px;

            padding: 14px 18px;

            text-align: left;

            border-bottom:
                1px solid #e5ebf3;
        }


        td {
            padding: 17px 18px;

            border-bottom:
                1px solid #edf1f5;

            color: #455a73;

            font-size: 14px;
        }


        tr:last-child td {
            border-bottom: none;
        }


        tr:hover td {
            background: #fbfdff;
        }


        /* =========================
           STUDENT
        ========================= */

        .student {
            display: flex;

            align-items: center;

            gap: 11px;
        }


        .student-avatar {
            width: 35px;
            height: 35px;

            border-radius: 50%;

            background: #eaf4ff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 15px;
        }


        .student-name {
            font-weight: 600;

            color: #263b59;
        }


        /* =========================
           EXAM
        ========================= */

        .exam-name {
            font-weight: 600;

            color: #263b59;
        }


        .assignment-id {
            font-size: 11px;

            color: #8a9ab0;

            margin-top: 4px;
        }


        /* =========================
           SCORE
        ========================= */

        .score {
            font-weight: 600;

            color: #263b59;
        }


        .percentage {
            font-weight: 700;

            color: #159fe5;
        }


        /* =========================
           STATUS
        ========================= */

        .status {
            display: inline-block;

            padding: 6px 11px;

            border-radius: 20px;

            font-size: 11px;

            font-weight: 600;

            text-transform: capitalize;
        }


        .status.completed {
            background: #e7f8ef;

            color: #1b8a50;
        }


        .status.pending {
            background: #fff5e8;

            color: #c77700;
        }


        .status.failed {
            background: #ffecec;

            color: #c73d3d;
        }


        /* =========================
           VIEW BUTTON
        ========================= */

        .view-btn {
            display: inline-block;

            text-decoration: none;

            background: #159fe5;

            color: white;

            padding: 8px 13px;

            border-radius: 6px;

            font-size: 12px;

            font-weight: 600;

            transition: 0.2s;
        }


        .view-btn:hover {
            background: #087fc0;
        }


        /* =========================
           EMPTY STATE
        ========================= */

        .empty {
            text-align: center;

            padding: 70px 20px;
        }


        .empty-icon {
            font-size: 45px;

            margin-bottom: 15px;
        }


        .empty h3 {
            color: #526781;

            font-size: 19px;

            margin-bottom: 7px;
        }


        .empty p {
            color: #8a98aa;

            font-size: 13px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1100px) {

            .stats {
                grid-template-columns:
                    repeat(2, 1fr);
            }

        }


        @media (max-width: 900px) {

            .sidebar {
                width: 220px;
            }


            .main {
                margin-left: 220px;

                width:
                    calc(100% - 220px);
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


            .main {
                margin-left: 75px;

                width:
                    calc(100% - 75px);
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


            .stats {
                grid-template-columns: 1fr;
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
                style="margin-top:25px;"
            >
                Management

            </div>

            <a href="{{ route('admin.students') }}">

                👨‍🎓 &nbsp; Students

            </a>

            <a href="{{ route('admin.colleges') }}">

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
                style="margin-top:25px;"
            >

                Examination

            </div>

            <a href="{{ route('admin.assign-exams') }}">

                📝 &nbsp; Assign Exams

            </a>

            <a
                href="{{ route('admin.results') }}"
                class="active"
            >

                📊 &nbsp; Results

            </a>


        </div>

    </aside>


    <!--MAIN AREA-->
    <main class="main">


        <!-- TOPBAR -->

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

        <!--CONTENT-->

        <section class="content">


            <div class="content-header">

                <h1>
                    Examination Results
                </h1>

                <p>
                    View and monitor student examination performance.
                </p>

            </div>

            <!--STATISTICS-->
            <div class="stats">


                <!-- TOTAL RESULTS -->

                <div class="stat-card">

                    <div>

                        <p>
                            Total Results
                        </p>

                        <h2>
                            {{ $totalResults }}
                        </h2>

                    </div>


                    <div class="stat-icon">
                        📊
                    </div>

                </div>


                <!-- COMPLETED -->

                <div class="stat-card">

                    <div>

                        <p>
                            Completed
                        </p>

                        <h2>
                            {{ $completedResults }}
                        </h2>

                    </div>


                    <div class="stat-icon">
                        ✅
                    </div>

                </div>


                <!-- AVERAGE -->

                <div class="stat-card">

                    <div>

                        <p>
                            Average Percentage
                        </p>

                        <h2>
                            {{ number_format($averagePercentage, 2) }}%
                        </h2>

                    </div>


                    <div class="stat-icon">
                        📈
                    </div>

                </div>


                <!-- PASSED -->

                <div class="stat-card">

                    <div>

                        <p>
                            Passed
                        </p>

                        <h2>
                            {{ $passedResults }}
                        </h2>

                    </div>


                    <div class="stat-icon">
                        🏆
                    </div>

                </div>


            </div>


            <!--RESULTS TABLE-->

            <div class="results-card">


                <div class="results-header">

                    <div>

                        <h2>
                            Student Results
                        </h2>

                        <p>
                            Examination performance records
                        </p>

                    </div>

                </div>


                @if($results->count() > 0)


                    <div class="table-container">

                        <table>

                            <thead>

                                <tr>

                                    <th>
                                        Student
                                    </th>

                                    <th>
                                        Exam
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
                                        Date
                                    </th>

                                    <th>
                                        Action
                                    </th>

                                </tr>

                            </thead>


                            <tbody>


                                @foreach($results as $result)


                                    <tr>


                                        <!-- STUDENT -->

                                        <td>

                                            <div class="student">

                                                <div class="student-avatar">
                                                    👤
                                                </div>


                                                <div>

                                                    <div class="student-name">

                                                        @if($result->student)

                                                            {{ trim(
                                                                $result->student->first_name .
                                                                ' ' .
                                                                $result->student->last_name
                                                            ) }}

                                                        @else

                                                            Unknown Student

                                                        @endif

                                                    </div>

                                                </div>

                                            </div>

                                        </td>


                                        <!-- EXAM -->

                                        <td>

                                            <div class="exam-name">

                                                {{ $result->examAssignment->examPaper->subject ?? 'Unknown Exam' }}

                                            </div>


                                            <div class="assignment-id">

                                                Assignment #{{ $result->exam_assignment_id }}

                                            </div>

                                        </td>


                                        <!-- SCORE -->

                                        <td>

                                            <span class="score">

                                                {{ number_format($result->score, 2) }}

                                            </span>

                                        </td>


                                        <!-- TOTAL MARKS -->
                                        <td>

                                            {{ number_format($result->total_marks, 2) }}

                                        </td>


                                        <!-- PERCENTAGE -->
                                        <td>

                                            <span class="percentage">

                                                {{ number_format($result->percentage, 2) }}%

                                            </span>

                                        </td>

                                        <!-- STATUS -->

                                        <td>

                                            @php

                                                $statusClass = strtolower(
                                                    $result->status ?? 'pending'
                                                );

                                            @endphp


                                            <span class="status {{ $statusClass }}">

                                                {{ ucfirst(
                                                    $result->status ?? 'Pending'
                                                ) }}

                                            </span>

                                        </td>


                                        <!-- DATE -->
                                        <td>

                                            {{ $result->created_at
                                                ? $result->created_at->format('d M Y')
                                                : '-' }}

                                        </td>


                                        <!-- ACTION -->
                                        <td>

                                            <a
                                                href="{{ route('admin.result.show', $result->id) }}"
                                                class="view-btn"
                                            >

                                                View

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
                            Student examination results will appear here after exams are submitted.
                        </p>

                    </div>


                @endif


            </div>


        </section>


    </main>


</div>


</body>

</html>
```
