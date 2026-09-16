<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Exam Result - SkillTest</title>

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

        /* ==============================
           SIDEBAR
        ============================== */

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

        /* ==============================
           MAIN
        ============================== */

        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
            min-height: 100vh;
        }

        /* ==============================
           TOPBAR
        ============================== */

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

        /* ==============================
           CONTENT
        ============================== */

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

        /* ==============================
           ALERT
        ============================== */

        .alert {
            padding: 14px 18px;
            border-radius: 8px;
            margin-bottom: 25px;
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

        /* ==============================
           RESULT HEADER
        ============================== */

        .result-header {
            background: white;

            border: 1px solid #e5ebf3;
            border-radius: 14px;

            padding: 30px;

            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);

            margin-bottom: 25px;
        }

        .result-header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;

            gap: 20px;
        }

        .result-header h1 {
            color: #1d3557;
            font-size: 26px;
            margin-bottom: 8px;
        }

        .result-header p {
            color: #718198;
            font-size: 14px;
        }

        .completed-badge {
            display: inline-block;

            background: #e7f8ef;
            color: #1b8a50;

            padding: 8px 16px;

            border-radius: 20px;

            font-size: 13px;
            font-weight: 600;
        }

        /* ==============================
           SCORE CARD
        ============================== */

        .score-card {
            background: linear-gradient(
                135deg,
                #102957,
                #159fe5
            );

            color: white;

            border-radius: 14px;

            padding: 30px;

            margin-bottom: 25px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 30px;
        }

        .score-left h3 {
            font-size: 15px;
            font-weight: normal;
            opacity: 0.85;

            margin-bottom: 10px;
        }

        .score-number {
            font-size: 44px;
            font-weight: 700;
        }

        .score-total {
            font-size: 18px;
            opacity: 0.8;
        }

        .percentage-box {
            text-align: center;
            min-width: 150px;
        }

        .percentage-number {
            font-size: 38px;
            font-weight: 700;
        }

        .percentage-label {
            font-size: 13px;
            opacity: 0.85;
        }

        /* ==============================
           DETAILS
        ============================== */

        .details-card {
            background: white;

            border: 1px solid #e5ebf3;
            border-radius: 14px;

            padding: 28px;

            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);

            margin-bottom: 25px;
        }

        .details-card h2 {
            color: #1d3557;
            font-size: 20px;

            margin-bottom: 22px;
        }

        .details-grid {
            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 20px;
        }

        .detail-item {
            background: #f8fafc;

            border: 1px solid #edf1f5;

            border-radius: 9px;

            padding: 18px;
        }

        .detail-label {
            color: #718198;

            font-size: 12px;

            margin-bottom: 7px;
        }

        .detail-value {
            color: #1d3557;

            font-size: 16px;

            font-weight: 600;
        }

        /* ==============================
           PERFORMANCE
        ============================== */

        .performance-card {
            background: white;

            border: 1px solid #e5ebf3;
            border-radius: 14px;

            padding: 28px;

            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);

            margin-bottom: 25px;
        }

        .performance-card h2 {
            font-size: 20px;
            color: #1d3557;

            margin-bottom: 20px;
        }

        .progress-container {
            width: 100%;

            background: #edf2f7;

            height: 14px;

            border-radius: 20px;

            overflow: hidden;
        }

        .progress-bar {
            height: 100%;

            background: #159fe5;

            border-radius: 20px;

            transition: width 0.5s ease;
        }

        .performance-text {
            display: flex;

            justify-content: space-between;

            margin-top: 10px;

            color: #718198;

            font-size: 13px;
        }

        /* ==============================
           BUTTONS
        ============================== */

        .actions {
            display: flex;

            gap: 12px;

            flex-wrap: wrap;
        }

        .button {
            display: inline-block;

            text-decoration: none;

            padding: 12px 20px;

            border-radius: 8px;

            font-size: 14px;

            font-weight: 600;
        }

        .primary-button {
            background: #159fe5;
            color: white;
        }

        .primary-button:hover {
            background: #118bc9;
        }

        .secondary-button {
            background: #eaf4ff;
            color: #1d5f91;
        }

        .secondary-button:hover {
            background: #dcefff;
        }

        /* ==============================
           NO RESULT
        ============================== */

        .no-result {
            background: white;

            border: 1px solid #e5ebf3;

            border-radius: 14px;

            padding: 60px 20px;

            text-align: center;

            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);
        }

        .no-result-icon {
            font-size: 50px;
            margin-bottom: 15px;
        }

        .no-result h2 {
            color: #526781;
            margin-bottom: 10px;
        }

        .no-result p {
            color: #718198;
            margin-bottom: 25px;
            font-size: 14px;
        }

        /* ==============================
           RESPONSIVE
        ============================== */

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

            .details-grid {
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

            .result-header-top {
                flex-direction: column;
                align-items: flex-start;
            }

            .score-card {
                flex-direction: column;
                align-items: flex-start;
            }

            .percentage-box {
                text-align: left;
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


            <a href="{{ route('student.dashboard') }}">
                📊 &nbsp; Dashboard
            </a>


            <div class="menu-title"
                 style="margin-top:25px;">

                Examination

            </div>


            <a href="{{ route('student.exams') }}">
                📝 &nbsp; My Exams
            </a>


            <a href="{{ route('student.results') }}"
               class="active">

                📊 &nbsp; My Results

            </a>


            <div class="menu-title"
                 style="margin-top:25px;">

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


    <!--MAIN-->
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


        <!--CONTENT-->
        <section class="content">


            <h1 class="page-title">
                Examination Result
            </h1>


            <p class="page-subtitle">
                Review your performance for the completed assessment.
            </p>


            <!-- SUCCESS MESSAGE -->

            @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

            @endif


            <!-- ERROR MESSAGE -->

            @if(session('error'))

                <div class="alert alert-error">

                    {{ session('error') }}

                </div>

            @endif


            {{--

                IMPORTANT:

                The controller should send:

                $assignment
                $result

                Therefore we check whether the RESULT exists.

            --}}


            @if($result)


                <!--RESULT HEADER-->

                <div class="result-header">

                    <div class="result-header-top">

                        <div>

                            <h1>

                                {{ $assignment->examPaper->subject ?? 'Examination' }}

                            </h1>


                            <p>

                                Your examination has been successfully completed.

                            </p>

                        </div>


                        <span class="completed-badge">

                            ✓ Completed

                        </span>

                    </div>

                </div>


                <!--SCORE-->
                <div class="score-card">


                    <div class="score-left">

                        <h3>
                            Marks Obtained
                        </h3>


                        <div>

                            <span class="score-number">

                                {{ $result->score ?? 0 }}

                            </span>


                            <span class="score-total">

                                / {{ $result->total_marks ?? 0 }}

                            </span>

                        </div>

                    </div>


                    <div class="percentage-box">

                        <div class="percentage-number">

                            {{ number_format($result->percentage ?? 0, 2) }}%

                        </div>


                        <div class="percentage-label">

                            Overall Percentage

                        </div>

                    </div>


                </div>


                <!--EXAM DETAILS-->
                <div class="details-card">


                    <h2>
                        Examination Details
                    </h2>


                    <div class="details-grid">


                        <div class="detail-item">

                            <div class="detail-label">
                                Subject
                            </div>

                            <div class="detail-value">

                                {{ $assignment->examPaper->subject ?? 'N/A' }}

                            </div>

                        </div>


                        <div class="detail-item">

                            <div class="detail-label">
                                Total Marks
                            </div>

                            <div class="detail-value">

                                {{ $result->total_marks ?? 0 }}

                            </div>

                        </div>


                        <div class="detail-item">

                            <div class="detail-label">
                                Marks Obtained
                            </div>

                            <div class="detail-value">

                                {{ $result->score ?? 0 }}

                            </div>

                        </div>


                        <div class="detail-item">

                            <div class="detail-label">
                                Examination Status
                            </div>

                            <div class="detail-value">

                                {{ ucfirst($result->status ?? 'Completed') }}

                            </div>

                        </div>


                        <div class="detail-item">

                            <div class="detail-label">
                                Submitted At
                            </div>

                            <div class="detail-value">

                                @if($assignment->submitted_at)

                                    {{ \Carbon\Carbon::parse($assignment->submitted_at)->format('d M Y, h:i A') }}

                                @else

                                    N/A

                                @endif

                            </div>

                        </div>


                        <div class="detail-item">

                            <div class="detail-label">
                                Duration
                            </div>

                            <div class="detail-value">

                                {{ $assignment->examPaper->duration ?? 0 }}
                                minutes

                            </div>

                        </div>


                    </div>

                </div>


                <!--PERFORMANCE-->
                <div class="performance-card">


                    <h2>
                        Performance
                    </h2>


                    <div class="progress-container">

                        <div
                            class="progress-bar"
                            style="width: {{ min(100, max(0, (float) ($result->percentage ?? 0))) }}%;">
                        </div>

                    </div>


                    <div class="performance-text">

                        <span>
                            Performance
                        </span>


                        <strong>

                            {{ number_format($result->percentage ?? 0, 2) }}%

                        </strong>

                    </div>


                </div>


                <!--ACTIONS-->
                <div class="actions">


                    <a
                        href="{{ route('student.results') }}"
                        class="button primary-button">

                        ← Back to My Results

                    </a>


                    <a
                        href="{{ route('student.exams') }}"
                        class="button secondary-button">

                        📝 View My Exams

                    </a>


                </div>


            @else


                <!--RESULT NOT AVAILABLE-->
                <div class="no-result">


                    <div class="no-result-icon">
                        📊
                    </div>


                    <h2>
                        Result Not Available
                    </h2>


                    <p>

                        The result for this examination could not be found.

                    </p>


                    <a
                        href="{{ route('student.results') }}"
                        class="button primary-button">

                        Back to My Results

                    </a>


                </div>


            @endif


        </section>


    </main>


</div>


</body>

</html>