<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exam Papers - SkillTest Admin</title>

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
            width: 275px;
            background: #102957;
            color: white;
            min-height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
        }

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

        .menu a.active {
            background: #159fe5;
            color: white;
            font-weight: 600;
        }

        /* MAIN */

        .main {
            margin-left: 275px;
            width: calc(100% - 275px);
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

        /* CONTENT */

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

        /* SUCCESS */

        .success-message {
            background: #e7f8ef;
            color: #1b8a50;
            border: 1px solid #c9eedb;

            padding: 12px 16px;
            border-radius: 8px;

            margin-bottom: 20px;
            font-size: 14px;
        }

        /* CARD */

        .exam-card {
            background: white;
            border-radius: 12px;
            border: 1px solid #e5ebf3;
            overflow: hidden;

            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);
        }

        .card-header {
            padding: 20px 24px;
            border-bottom: 1px solid #e8edf4;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-header h3 {
            font-size: 19px;
            color: #1d3557;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .exam-count {
            background: #eaf5ff;
            color: #159fe5;

            padding: 7px 13px;
            border-radius: 20px;

            font-size: 13px;
            font-weight: 600;
        }

        /* ADD BUTTON */

        .add-exam {
            text-decoration: none;
            background: #159fe5;
            color: white;

            padding: 10px 16px;
            border-radius: 7px;

            font-size: 14px;
            font-weight: 600;
        }

        .add-exam:hover {
            background: #118bc9;
        }

        /* TABLE */

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
            padding: 15px 18px;

            font-size: 13px;
            color: #526781;

            border-bottom: 1px solid #e3e9f1;
            white-space: nowrap;
        }

        td {
            padding: 16px 18px;

            font-size: 14px;
            color: #455a73;

            border-bottom: 1px solid #edf1f5;
        }

        tbody tr:hover {
            background: #fafcff;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        /* STATUS */

        .status-active {
            display: inline-block;

            background: #e7f8ef;
            color: #1b8a50;

            padding: 5px 11px;
            border-radius: 20px;

            font-size: 12px;
            font-weight: 600;
        }

        .status-inactive {
            display: inline-block;

            background: #fff0f0;
            color: #d64545;

            padding: 5px 11px;
            border-radius: 20px;

            font-size: 12px;
            font-weight: 600;
        }

        /* NO EXAMS */

        .no-exams {
            text-align: center;
            padding: 50px 20px;
            color: #7d8da3;
        }

        /* RESPONSIVE */

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

            .card-header {
                align-items: flex-start;
                gap: 15px;
                flex-direction: column;
            }

            .header-right {
                width: 100%;
                justify-content: space-between;
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

            <a
                href="{{ route('admin.exam-papers') }}"
                class="active"
            >
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

            <a href="{{ route('admin.results') }}">
                📊 &nbsp; Results
            </a>

        </div>

    </aside>

    <!-- MAIN -->

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

        <!-- CONTENT -->

        <section class="content">

            <h1>
                Exam Papers
            </h1>

            <p class="content-subtitle">
                Create and manage examination papers for the SkillTest platform.
            </p>

            @if(session('success'))

                <div class="success-message">
                    {{ session('success') }}
                </div>

            @endif

            <!-- EXAM PAPER CARD -->

            <div class="exam-card">

                <div class="card-header">

                    <h3>
                        Registered Exam Papers
                    </h3>

                    <div class="header-right">

                        <span class="exam-count">

                            {{ $examPapers->count() }}

                            Exam Papers

                        </span>

                        <a
                            href="{{ route('admin.exam-papers.create') }}"
                            class="add-exam"
                        >
                            + Add Exam Paper
                        </a>

                    </div>

                </div>

                <!-- TABLE -->

                <div class="table-container">

                    <table>

                        <thead>

                            <tr>

                                <th>
                                    ID
                                </th>

                                <th>
                                    Subject
                                </th>

                                <th>
                                    Description
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

                            </tr>

                        </thead>

                        <tbody>

                            @forelse($examPapers as $examPaper)

                                <tr>

                                    <td>
                                        {{ $examPaper->id }}
                                    </td>

                                    <td>
                                        {{ $examPaper->subject }}
                                    </td>

                                    <td>

                                        @if($examPaper->description)

                                            {{ $examPaper->description }}

                                        @else

                                            Not Available

                                        @endif

                                    </td>

                                    <td>

                                        {{ $examPaper->duration }}

                                        minutes

                                    </td>

                                    <td>
                                        {{ $examPaper->total_marks }}
                                    </td>

                                    <td>

                                        @if($examPaper->status == 1)

                                            <span class="status-active">
                                                Active
                                            </span>

                                        @else

                                            <span class="status-inactive">
                                                Inactive
                                            </span>

                                        @endif

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="6">

                                        <div class="no-exams">

                                            No exam papers created yet.

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

