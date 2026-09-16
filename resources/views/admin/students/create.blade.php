<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Student - SkillTest Admin</title>

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
           MENU
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
            width: calc(100% - 275px);
            min-height: 100vh;
        }


        /* =========================
           TOP BAR
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
           FORM CARD
        ========================= */

        .student-card {
            background: white;
            border-radius: 12px;
            border: 1px solid #e5ebf3;
            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);

            padding: 28px;

            max-width: 1000px;
        }

        .student-card h3 {
            font-size: 19px;
            color: #1d3557;
            margin-bottom: 25px;
        }


        /* =========================
           FORM GRID
        ========================= */

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label {
            font-size: 14px;
            font-weight: 600;
            color: #263b59;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 12px 14px;

            border: 1px solid #d9e2ec;
            border-radius: 7px;

            font-size: 14px;
            color: #455a73;

            outline: none;

            background: white;
        }

        input:focus,
        select:focus {
            border-color: #159fe5;
            box-shadow: 0 0 0 2px rgba(21,159,229,0.10);
        }


        /* =========================
           ERROR
        ========================= */

        .error {
            color: #d64545;
            font-size: 12px;
            margin-top: 6px;
        }


        /* =========================
           BUTTONS
        ========================= */

        .buttons {
            margin-top: 28px;

            display: flex;
            gap: 10px;
        }

        .add-student {
            border: none;
            background: #159fe5;
            color: white;

            padding: 11px 18px;

            border-radius: 7px;

            font-size: 14px;
            font-weight: 600;

            cursor: pointer;
        }

        .add-student:hover {
            background: #118bc9;
        }

        .cancel {
            text-decoration: none;

            background: #eef2f6;
            color: #526781;

            padding: 11px 18px;

            border-radius: 7px;

            font-size: 14px;
        }

        .cancel:hover {
            background: #e2e7ed;
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

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
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

            <div class="menu-title" style="margin-top:25px;">
                Management
            </div>


            <a href="{{ route('admin.students') }}" class="active">
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

            <div class="menu-title" style="margin-top:25px;">
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


        <!-- TOP BAR -->

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
                Add Student
            </h1>


            <p class="content-subtitle">
                Add a new student to SkillTest.
            </p>



            <!-- FORM CARD -->

            <div class="student-card">


                <h3>
                    Student Details
                </h3>


                <form
                    action="{{ route('admin.students.store') }}"
                    method="POST"
                >

                    @csrf


                    <div class="form-grid">


                        <!-- FIRST NAME -->

                        <div class="form-group">

                            <label>
                                First Name
                            </label>

                            <input
                                type="text"
                                name="first_name"
                                value="{{ old('first_name') }}"
                                placeholder="Enter first name"
                            >

                            @error('first_name')
                                <span class="error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>



                        <!-- MIDDLE NAME -->

                        <div class="form-group">

                            <label>
                                Middle Name
                            </label>

                            <input
                                type="text"
                                name="middle_name"
                                value="{{ old('middle_name') }}"
                                placeholder="Enter middle name"
                            >

                            @error('middle_name')
                                <span class="error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>



                        <!-- LAST NAME -->

                        <div class="form-group">

                            <label>
                                Last Name
                            </label>

                            <input
                                type="text"
                                name="last_name"
                                value="{{ old('last_name') }}"
                                placeholder="Enter last name"
                            >

                            @error('last_name')
                                <span class="error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>



                        <!-- DATE OF BIRTH -->

                        <div class="form-group">

                            <label>
                                Date of Birth
                            </label>

                            <input
                                type="date"
                                name="dob"
                                value="{{ old('dob') }}"
                            >

                            @error('dob')
                                <span class="error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>



                        <!-- EMAIL -->

                        <div class="form-group">

                            <label>
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Enter email"
                            >

                            @error('email')
                                <span class="error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>



                        <!-- MOBILE -->

                        <div class="form-group">

                            <label>
                                Mobile
                            </label>

                            <input
                                type="text"
                                name="mobile"
                                value="{{ old('mobile') }}"
                                placeholder="Enter mobile number"
                            >

                            @error('mobile')
                                <span class="error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>



                        <!-- COLLEGE -->

                        <div class="form-group">

                            <label>
                                College
                            </label>

                            <select name="college_id">

                                <option value="">
                                    Select College
                                </option>

                                @foreach($colleges as $college)

                                    <option
                                        value="{{ $college->id }}"
                                        {{ old('college_id') == $college->id ? 'selected' : '' }}
                                    >
                                        {{ $college->name }}
                                    </option>

                                @endforeach

                            </select>


                            @error('college_id')
                                <span class="error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>



                        <!-- QUALIFICATION -->

                        <div class="form-group">

                            <label>
                                Qualification
                            </label>

                            <input
                                type="text"
                                name="qualification"
                                value="{{ old('qualification') }}"
                                placeholder="Example: B.Tech"
                            >

                            @error('qualification')
                                <span class="error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>



                        <!-- PASSING YEAR -->

                        <div class="form-group">

                            <label>
                                Passing Year
                            </label>

                            <input
                                type="number"
                                name="passing_year"
                                value="{{ old('passing_year') }}"
                                placeholder="Example: 2026"
                                min="1900"
                                max="2100"
                            >

                            @error('passing_year')
                                <span class="error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>



                        <!-- PERCENTILE -->

                        <div class="form-group">

                            <label>
                                Percentile
                            </label>

                            <input
                                type="number"
                                name="percentile"
                                value="{{ old('percentile') }}"
                                placeholder="Example: 90.44"
                                step="0.01"
                                min="0"
                                max="100"
                            >

                            @error('percentile')
                                <span class="error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>



                        <!-- 10TH PERCENTAGE -->

                        <div class="form-group">

                            <label>
                                10th Percentage
                            </label>

                            <input
                                type="number"
                                name="tenth_percentage"
                                value="{{ old('tenth_percentage') }}"
                                placeholder="Example: 78.00"
                                step="0.01"
                                min="0"
                                max="100"
                            >

                            @error('tenth_percentage')
                                <span class="error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>



                        <!-- 12TH PERCENTAGE -->

                        <div class="form-group">

                            <label>
                                12th Percentage
                            </label>

                            <input
                                type="number"
                                name="twelfth_percentage"
                                value="{{ old('twelfth_percentage') }}"
                                placeholder="Example: 85.00"
                                step="0.01"
                                min="0"
                                max="100"
                            >

                            @error('twelfth_percentage')
                                <span class="error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>



                        <!-- GRADUATION PERCENTAGE -->

                        <div class="form-group">

                            <label>
                                Graduation Percentage
                            </label>

                            <input
                                type="number"
                                name="graduation_percentage"
                                value="{{ old('graduation_percentage') }}"
                                placeholder="Example: 78.00"
                                step="0.01"
                                min="0"
                                max="100"
                            >

                            @error('graduation_percentage')
                                <span class="error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>



                        <!-- PASSWORD -->

                        <div class="form-group">

                            <label>
                                Password
                            </label>

                            <input
                                type="password"
                                name="password"
                                placeholder="Enter password"
                            >

                            @error('password')
                                <span class="error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                    </div>



                    <!-- BUTTONS -->

                    <div class="buttons">

                        <button
                            type="submit"
                            class="add-student"
                        >
                            Add Student
                        </button>


                        <a
                            href="{{ route('admin.students') }}"
                            class="cancel"
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