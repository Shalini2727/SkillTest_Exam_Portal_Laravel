<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Admin Dashboard - SkillTest
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
           MAIN LAYOUT
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
           SKILLTEST BRAND
        ========================= */

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



        /* =========================
           SIDEBAR MENU
        ========================= */

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


        /* Active Dashboard */

        .menu a.active {
            background: #159fe5;
            color: white;
            font-weight: 600;
        }



        /* =========================
           MAIN AREA
        ========================= */

        .main {
            margin-left: 275px;

            width: calc(100% - 275px);

            min-height: 100vh;
        }



        /* =========================
           TOP NAVBAR
        ========================= */

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



        /* =========================
           CONTENT
        ========================= */

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



        /* =========================
           STAT CARDS
        ========================= */

        .stats {
            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 18px;

            margin-bottom: 30px;
        }


        .stat-card {
            background: white;

            border-radius: 12px;

            border: 1px solid #e5ebf3;

            padding: 22px;

            display: flex;

            justify-content: space-between;

            align-items: center;

            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);
        }


        .stat-card p {
            color: #718198;

            font-size: 14px;

            margin-bottom: 10px;
        }


        .stat-card h2 {
            font-size: 28px;

            color: #1d3557;
        }


        .stat-icon {
            width: 48px;

            height: 48px;

            border-radius: 10px;

            background: #eaf5ff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 22px;
        }



        /* =========================
           QUICK ACTIONS
        ========================= */

        .quick-actions {
            background: white;

            border-radius: 12px;

            border: 1px solid #e5ebf3;

            padding: 25px;

            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);
        }


        .quick-actions h2 {
            font-size: 20px;

            color: #1d3557;

            margin-bottom: 7px;
        }


        .quick-actions > p {
            color: #718198;

            font-size: 14px;

            margin-bottom: 20px;
        }


        .actions-grid {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 12px;
        }


        .action {
            display: flex;

            align-items: center;

            gap: 12px;

            text-decoration: none;

            color: #263b59;

            border: 1px solid #e5ebf3;

            padding: 16px;

            border-radius: 9px;

            transition: 0.2s;

            cursor: pointer;
        }


        .action:hover {
            border-color: #159fe5;

            background: #f5fbff;
        }


        .action-icon {
            font-size: 20px;

            width: 35px;

            text-align: center;
        }


        .action-text {
            font-weight: 600;

            font-size: 14px;
        }



        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1100px) {

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

        }



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


            .stats {
                grid-template-columns: 1fr;
            }


            .actions-grid {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>

<div class="layout">


    <!--SIDEBAR-->
    <aside class="sidebar">


        <!-- SkillTest -->

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


            <a
                href="{{ route('admin.dashboard') }}"
                class="active"
            >

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


            <a href="{{ route('admin.results') }}">

                📊 &nbsp; Results

            </a>


        </div>

    </aside>

    <!-- MAIN AREA -->

    <main class="main">
        <!-- OP NAVBAR-->

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



        <!--DASHBOARD CONTENT-->
        <section class="content">


            <h1>
                Dashboard
            </h1>


            <p class="content-subtitle">

                Welcome back,
                {{ session('admin_name') }}.

                Manage your SkillTest assessment platform from here.

            </p>



            <!--STATISTICS-->
            <div class="stats">



                <!-- Students -->

                <div class="stat-card">

                    <div>

                        <p>
                            Total Students
                        </p>

                        <h2>
                            {{ $totalStudents }}
                        </h2>

                    </div>


                    <div class="stat-icon">
                        👨‍🎓
                    </div>

                </div>

                <!-- Colleges -->

                <div class="stat-card">

                    <div>

                        <p>
                            Total Colleges
                        </p>

                        <h2>
                            {{ $totalColleges }}
                        </h2>

                    </div>


                    <div class="stat-icon">
                        🏫
                    </div>

                </div>



                <!-- Exam Papers -->
                <div class="stat-card">

                    <div>

                        <p>
                            Total Exam Papers
                        </p>

                        <h2>
                            {{ $totalExamPapers }}
                        </h2>

                    </div>


                    <div class="stat-icon">
                        📄
                    </div>

                </div>



                <!-- Questions -->
                <div class="stat-card">

                    <div>

                        <p>
                            Total Questions
                        </p>

                        <h2>
                            {{ $totalQuestions }}
                        </h2>

                    </div>


                    <div class="stat-icon">
                        ❓
                    </div>

                </div>


            </div>

            <!--QUICK ACTIONS-->

            <div class="quick-actions">


                <h2>
                    Quick Actions
                </h2>


                <p>
                    Frequently used administration functions.
                </p>


                <div class="actions-grid">



                    <!--MANAGE STUDENTS-->
                    <a
                        href="{{ route('admin.students') }}"
                        class="action"
                    >

                        <div class="action-icon">
                            ➕
                        </div>

                        <div class="action-text">
                            Manage Students
                        </div>

                    </a>



                    <!-- ADD QUESTION-->
<a href="{{ url('/admin/questions/create') }}" class="action">

    <div class="action-icon">
        ❓
    </div>

    <div class="action-text">
        Add Question
    </div>

</a>



                    <!-- CREATE EXAM PAPER-->
                    <a 
    href="{{ url('/admin/exam-papers') }}" 
    class="action"
>
    <div class="action-icon">
        📄
    </div>

    <div class="action-text">
        Create Exam Paper
    </div>
</a>


                    <!--ASSIGN EXAM-->
<a 
    href="{{ url('/admin/assign-exams') }}" 
    class="action"
>
    <div class="action-icon">
        📝
    </div>

    <div class="action-text">
        Assign Exam
    </div>
</a>


                </div>

            </div>


        </section>


    </main>


</div>



<!--QUICK ACTION JAVASCRIPT-->
<script>

    function showComingSoon(section) {

        alert(
            section +
            " section is ready to be connected.\n\n" +
            "We will build this section and connect it to the database next."
        );

    }

</script>


</body>

</html>