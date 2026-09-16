<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Admin Dashboard - SkillTest')
    </title>


    <style>

        /* RESET*/

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background: #f5f7fb;

            color: #172b4d;

        }

       /*MAIN WRAPPER*/
        .admin-wrapper {

            min-height: 100vh;

            display: flex;

        }


        /*SIDEBAR*/
        .sidebar {

            width: 250px;

            background: #172b4d;

            color: white;

            min-height: 100vh;

            position: fixed;

            left: 0;

            top: 0;

            bottom: 0;

            overflow-y: auto;

        }


        /* =====================================================
           SIDEBAR BRAND
        ===================================================== */

        .sidebar-brand {

            padding: 25px 22px;

            border-bottom:
                1px solid
                rgba(255,255,255,0.10);

        }


        .sidebar-brand h2 {

            font-size: 25px;

            font-weight: 700;

        }


        .sidebar-brand h2 span {

            color: #159bd3;

        }


        .sidebar-brand p {

            font-size: 12px;

            color: #b9c4d5;

            margin-top: 5px;

        }


        /* =====================================================
           SIDEBAR MENU
        ===================================================== */

        .sidebar-menu {

            padding: 20px 12px;

        }


        .sidebar-section {

            font-size: 11px;

            color: #8493a8;

            padding:
                15px
                15px
                8px;

            text-transform: uppercase;

            letter-spacing: 1px;

        }


        .sidebar-menu a {

            display: block;

            color: #d8e0eb;

            text-decoration: none;

            padding: 13px 15px;

            border-radius: 8px;

            margin-bottom: 5px;

            font-size: 14px;

            transition: 0.2s;

        }


        .sidebar-menu a:hover {

            background: #234269;

            color: white;

        }


        .sidebar-menu a.active {

            background: #159bd3;

            color: white;

        }


        /* =====================================================
           MAIN AREA
        ===================================================== */

        .admin-main {

            margin-left: 250px;

            width:
                calc(100% - 250px);

            min-height: 100vh;

        }


        /* =====================================================
           TOP HEADER
        ===================================================== */

        .admin-header {

            height: 75px;

            background: white;

            border-bottom:
                1px solid
                #e5e9ef;

            display: flex;

            justify-content: space-between;

            align-items: center;

            padding:
                0 30px;

            position: sticky;

            top: 0;

            z-index: 10;

        }


        .admin-header h3 {

            font-size: 20px;

            color: #172b4d;

        }


        .admin-user {

            display: flex;

            align-items: center;

            gap: 15px;

        }


        .admin-name {

            font-size: 14px;

            font-weight: 600;

            color: #172b4d;

        }


        /* =====================================================
           LOGOUT BUTTON
        ===================================================== */

        .logout-btn {

            background: #f28c16;

            color: white;

            border: none;

            padding:
                9px 16px;

            border-radius: 6px;

            cursor: pointer;

            text-decoration: none;

            font-size: 13px;

            display: inline-block;

        }


        .logout-btn:hover {

            opacity: 0.9;

        }


        /* =====================================================
           CONTENT
        ===================================================== */

        .admin-content {

            padding: 30px;

        }


        /* =====================================================
           ALERTS
        ===================================================== */

        .alert {

            padding:
                13px 16px;

            border-radius: 7px;

            margin-bottom: 20px;

            font-size: 14px;

        }


        .alert-success {

            background: #e5f8ef;

            color: #147a4b;

        }


        .alert-error {

            background: #fff1f1;

            color: #c53030;

        }


        /* =====================================================
           PAGE HEADING
        ===================================================== */

        .page-heading {

            margin-bottom: 25px;

        }


        .page-heading h1 {

            font-size: 28px;

            margin-bottom: 7px;

        }


        .page-heading p {

            color: #7a8797;

            line-height: 1.6;

        }


        /* =====================================================
           STATISTICS
        ===================================================== */

        .stats-grid {

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 20px;

            margin-bottom: 30px;

        }


        .stat-card {

            background: white;

            border-radius: 12px;

            padding: 23px;

            border:
                1px solid
                #e8ecf2;

            display: flex;

            justify-content: space-between;

            align-items: center;

            transition: 0.2s;

        }


        .stat-card:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 8px 20px
                rgba(0,0,0,0.05);

        }


        .stat-card h4 {

            color: #7a8797;

            font-size: 13px;

            margin-bottom: 8px;

            font-weight: 500;

        }


        .stat-card strong {

            font-size: 30px;

            color: #172b4d;

        }


        .stat-icon {

            width: 48px;

            height: 48px;

            border-radius: 10px;

            display: flex;

            justify-content: center;

            align-items: center;

            font-size: 21px;

        }


        .blue {

            background: #e5f6fd;

            color: #159bd3;

        }


        .orange {

            background: #fff0df;

            color: #f28c16;

        }


        .purple {

            background: #eee9ff;

            color: #7357c8;

        }


        .green {

            background: #e5f8ef;

            color: #159b62;

        }


        /* =====================================================
           LOWER DASHBOARD
        ===================================================== */

        .dashboard-grid {

            display: grid;

            grid-template-columns:
                2fr 1fr;

            gap: 20px;

        }


        .dashboard-card {

            background: white;

            border:
                1px solid
                #e8ecf2;

            border-radius: 12px;

            padding: 25px;

        }


        .dashboard-card h2 {

            font-size: 18px;

            margin-bottom: 8px;

        }


        .dashboard-card p {

            color: #7a8797;

            font-size: 14px;

            line-height: 1.6;

        }


        /* =====================================================
           QUICK ACTIONS
        ===================================================== */

        .quick-actions {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 12px;

            margin-top: 20px;

        }


        .quick-action {

            text-decoration: none;

            padding: 17px;

            border:
                1px solid
                #e5e9ef;

            border-radius: 8px;

            color: #172b4d;

            font-size: 14px;

            font-weight: 600;

            transition: 0.2s;

        }


        .quick-action:hover {

            border-color: #159bd3;

            color: #159bd3;

            background: #f8fcff;

        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1100px) {

            .stats-grid {

                grid-template-columns:
                    repeat(2, 1fr);

            }

            .dashboard-grid {

                grid-template-columns: 1fr;

            }

        }


        @media (max-width: 750px) {

            .sidebar {

                width: 210px;

            }

            .admin-main {

                margin-left: 210px;

                width:
                    calc(100% - 210px);

            }

            .stats-grid {

                grid-template-columns: 1fr;

            }

            .admin-content {

                padding: 20px;

            }

            .admin-header {

                padding:
                    0 20px;

            }

            .admin-name {

                display: none;

            }

        }


        @media (max-width: 500px) {

            .sidebar {

                width: 70px;

            }

            .admin-main {

                margin-left: 70px;

                width:
                    calc(100% - 70px);

            }

            .sidebar-brand {

                padding:
                    20px 10px;

                text-align: center;

            }

            .sidebar-brand h2 {

                font-size: 16px;

            }

            .sidebar-brand p {

                display: none;

            }

            .sidebar-menu a {

                font-size: 0;

                text-align: center;

                padding: 14px 5px;

            }

            .sidebar-section {

                display: none;

            }

            .quick-actions {

                grid-template-columns: 1fr;

            }

        }

    </style>


    @yield('styles')

</head>


<body>


<div class="admin-wrapper">


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <aside class="sidebar">


        <div class="sidebar-brand">

            <h2>
                Admin<span> Panel</span>
            </h2>

        </div>


        <nav class="sidebar-menu">


            <div class="sidebar-section">
                Main
            </div>


            <a
                href="{{ route('admin.dashboard') }}"
                class="active"
            >
                📊 Dashboard
            </a>


            <div class="sidebar-section">
                Management
            </div>


            <a href="{{ route('admin.students') }}">
                👨‍🎓 Students
            </a>


            <a href="{{ route('admin.colleges') }}">
                🏫 Colleges
            </a>


            <a href="{{ route('exam-papers') }}">
                📝 Exam Papers
            </a>


            <a href="{{ route('admin.questions') }}">
                ❓ Questions
            </a>


            <div class="sidebar-section">
                Examination
            </div>


            <a href="{{ route('assign-exams') }}">
                📋 Assign Exams
            </a>


            <a href="{{ route('admin.results') }}">
                📈 Results
            </a>


        </nav>


    </aside>



    <!--MAIN AREA-->
    <main class="admin-main">


        <!-- HEADER -->
        <header class="admin-header">


            <h3>

                @yield(
                    'page-heading',
                    'Admin Dashboard'
                )

            </h3>


            <div class="admin-user">


                <span class="admin-name">

                    Welcome,
                    {{ session('admin_name') }}

                </span>


                <a
                    href="{{ route('admin.logout') }}"
                    class="logout-btn"
                >
                    Logout
                </a>


            </div>


        </header>



        <!-- CONTENT -->
        <section class="admin-content">


            @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

            @endif


            @if(session('error'))

                <div class="alert alert-error">

                    {{ session('error') }}

                </div>

            @endif


            @yield('content')


        </section>


    </main>


</div>


@yield('scripts')


</body>

</html>