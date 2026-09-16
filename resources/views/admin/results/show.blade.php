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
        Result Details - SkillTest
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


        .page-header {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 28px;
        }


        .page-header h1 {
            font-size: 30px;

            color: #1d3557;

            margin-bottom: 7px;
        }


        .page-header p {
            color: #718198;

            font-size: 14px;
        }


        /* =========================
           BACK BUTTON
        ========================= */

        .back-btn {
            text-decoration: none;

            background: white;

            color: #263b59;

            border:
                1px solid #dfe6ef;

            padding: 10px 16px;

            border-radius: 7px;

            font-size: 14px;

            font-weight: 600;

            transition: 0.2s;
        }


        .back-btn:hover {
            border-color: #159fe5;

            color: #159fe5;
        }


        /* =========================
           RESULT OVERVIEW
        ========================= */

        .overview {
            display: grid;

            grid-template-columns:
                1fr 1fr 1fr;

            gap: 18px;

            margin-bottom: 25px;
        }


        .overview-card {
            background: white;

            border:
                1px solid #e5ebf3;

            border-radius: 12px;

            padding: 23px;

            box-shadow:
                0 2px 8px
                rgba(20,50,90,0.04);
        }


        .overview-card p {
            color: #718198;

            font-size: 13px;

            margin-bottom: 8px;
        }


        .overview-card h2 {
            color: #1d3557;

            font-size: 25px;
        }


        /* =========================
           DETAILS GRID
        ========================= */

        .details-card {
            background: white;

            border:
                1px solid #e5ebf3;

            border-radius: 12px;

            padding: 27px;

            box-shadow:
                0 2px 8px
                rgba(20,50,90,0.04);

            margin-bottom: 25px;
        }


        .details-card h2 {
            color: #1d3557;

            font-size: 20px;

            margin-bottom: 22px;
        }


        .details-grid {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 20px 35px;
        }


        .detail-item {
            border-bottom:
                1px solid #edf1f5;

            padding-bottom: 14px;
        }


        .detail-label {
            color: #8a98aa;

            font-size: 12px;

            text-transform: uppercase;

            letter-spacing: 0.4px;

            margin-bottom: 6px;
        }


        .detail-value {
            color: #263b59;

            font-size: 15px;

            font-weight: 600;
        }


        /* =========================
           STUDENT CARD
        ========================= */

        .student-card {
            display: flex;

            align-items: center;

            gap: 16px;

            background: #f8fbff;

            border:
                1px solid #e4edf7;

            border-radius: 10px;

            padding: 18px;

            margin-bottom: 24px;
        }


        .student-avatar {
            width: 55px;
            height: 55px;

            border-radius: 50%;

            background: #eaf4ff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 25px;
        }


        .student-info h3 {
            color: #263b59;

            font-size: 18px;

            margin-bottom: 4px;
        }


        .student-info p {
            color: #718198;

            font-size: 13px;
        }


        /* =========================
           SCORE
        ========================= */

        .score-card {
            background: white;

            border:
                1px solid #e5ebf3;

            border-radius: 12px;

            padding: 27px;

            box-shadow:
                0 2px 8px
                rgba(20,50,90,0.04);
        }


        .score-card h2 {
            color: #1d3557;

            font-size: 20px;

            margin-bottom: 22px;
        }


        .score-row {
            display: grid;

            grid-template-columns:
                1fr 1fr 1fr;

            gap: 18px;
        }


        .score-box {
            text-align: center;

            padding: 20px;

            background: #f8fafc;

            border:
                1px solid #e8edf3;

            border-radius: 10px;
        }


        .score-box p {
            color: #718198;

            font-size: 13px;

            margin-bottom: 8px;
        }


        .score-box h3 {
            color: #1d3557;

            font-size: 25px;
        }


        .percentage-box h3 {
            color: #159fe5;
        }


        /* =========================
           STATUS
        ========================= */

        .status {
            display: inline-block;

            padding: 7px 13px;

            border-radius: 20px;

            font-size: 12px;

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
           RESPONSIVE
        ========================= */

        @media (max-width: 1000px) {

            .overview {
                grid-template-columns:
                    1fr 1fr;
            }


            .score-row {
                grid-template-columns:
                    1fr 1fr;
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


            .page-header {
                align-items: flex-start;

                flex-direction: column;

                gap: 15px;
            }


            .overview {
                grid-template-columns: 1fr;
            }


            .details-grid {
                grid-template-columns: 1fr;
            }


            .score-row {
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


    <!--MAIN-->
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


            <!-- PAGE HEADER -->
            <div class="page-header">


                <div>

                    <h1>
                        Result Details
                    </h1>

                    <p>
                        View detailed examination performance.
                    </p>

                </div>


                <a
                    href="{{ route('admin.results') }}"
                    class="back-btn"
                >

                    ← Back to Results

                </a>


            </div>


            <!--STUDENT + EXAM INFORMATION-->
            <div class="details-card">


                <h2>
                    Student & Examination Information
                </h2>


                @php

                    $student = $result->student;

                    $assignment = $result->examAssignment;

                    $examPaper = $assignment
                        ? $assignment->examPaper
                        : null;

                    $studentName = $student
                        ? trim(
                            $student->first_name .
                            ' ' .
                            $student->last_name
                        )
                        : 'Unknown Student';

                @endphp


                <!-- STUDENT -->
                <div class="student-card">


                    <div class="student-avatar">
                        👤
                    </div>


                    <div class="student-info">

                        <h3>
                            {{ $studentName }}
                        </h3>


                        @if($student)

                            <p>
                                {{ $student->email ?? 'Email not available' }}
                            </p>

                        @else

                            <p>
                                Student information not available.
                            </p>

                        @endif

                    </div>


                </div>


                <!-- DETAILS -->
                <div class="details-grid">


                    <!-- STUDENT ID -->
                    <div class="detail-item">

                        <div class="detail-label">
                            Student ID
                        </div>

                        <div class="detail-value">

                            {{ $result->student_id }}

                        </div>

                    </div>


                    <!-- ASSIGNMENT ID -->
                    <div class="detail-item">

                        <div class="detail-label">
                            Assignment ID
                        </div>

                        <div class="detail-value">

                            #{{ $result->exam_assignment_id }}

                        </div>

                    </div>


                    <!-- EXAM -->
                    <div class="detail-item">

                        <div class="detail-label">
                            Examination
                        </div>

                        <div class="detail-value">

                            {{ $examPaper->subject ?? 'Unknown Exam' }}

                        </div>

                    </div>


                    <!-- EXAM PAPER ID -->
                    <div class="detail-item">

                        <div class="detail-label">
                            Exam Paper ID
                        </div>

                        <div class="detail-value">

                            {{ $assignment->exam_paper_id ?? '-' }}

                        </div>

                    </div>


                    <!-- STATUS -->
                    <div class="detail-item">

                        <div class="detail-label">
                            Status
                        </div>


                        @php

                            $statusClass = strtolower(
                                $result->status ?? 'pending'
                            );

                        @endphp


                        <div>

                            <span
                                class="status {{ $statusClass }}"
                            >

                                {{ ucfirst(
                                    $result->status ?? 'Pending'
                                ) }}

                            </span>

                        </div>

                    </div>


                    <!-- DATE -->
                    <div class="detail-item">

                        <div class="detail-label">
                            Result Date
                        </div>

                        <div class="detail-value">

                            {{ $result->created_at
                                ? $result->created_at->format('d M Y, h:i A')
                                : '-' }}

                        </div>

                    </div>


                </div>


            </div>


            <!-- SCORE-->
            <div class="score-card">


                <h2>
                    Examination Performance
                </h2>


                <div class="score-row">


                    <!-- SCORE -->
                    <div class="score-box">

                        <p>
                            Score
                        </p>

                        <h3>

                            {{ number_format(
                                $result->score,
                                2
                            ) }}

                        </h3>

                    </div>


                    <!-- TOTAL -->
                    <div class="score-box">

                        <p>
                            Total Marks
                        </p>

                        <h3>

                            {{ number_format(
                                $result->total_marks,
                                2
                            ) }}

                        </h3>

                    </div>


                    <!-- PERCENTAGE -->
                    <div
                        class="score-box percentage-box"
                    >

                        <p>
                            Percentage
                        </p>

                        <h3>

                            {{ number_format(
                                $result->percentage,
                                2
                            ) }}%

                        </h3>

                    </div>


                </div>


            </div>


        </section>


    </main>


</div>


</body>

</html>

