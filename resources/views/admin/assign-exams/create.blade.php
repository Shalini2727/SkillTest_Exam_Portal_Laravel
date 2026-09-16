<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Assign Exam - SkillTest Admin
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

        .layout {
            display: flex;
            min-height: 100vh;
        }

        /*SIDEBAR*/
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

        /*MAIN */
        .main {
            margin-left: 275px;
            width: calc(100% - 275px);
            min-height: 100vh;
        }

        /*TOPBAR*/
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

        /*CONTENT*/
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

        /*CARD*/
        .form-card {
            background: white;
            border-radius: 12px;
            border: 1px solid #e5ebf3;
            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);

            max-width: 850px;
        }

        .card-header {
            padding: 22px 25px;
            border-bottom: 1px solid #e8edf4;
        }

        .card-header h3 {
            font-size: 19px;
            color: #1d3557;
        }

        .card-header p {
            margin-top: 6px;
            font-size: 13px;
            color: #718198;
        }

        /*FORM*/
        .form-body {
            padding: 28px 25px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;

            font-size: 14px;

            font-weight: 600;

            color: #526781;

            margin-bottom: 8px;
        }

        .form-group label span {
            color: #d64545;
        }

        .form-control {
            width: 100%;

            padding: 12px 14px;

            border: 1px solid #d8e1ec;

            border-radius: 7px;

            background: white;

            color: #263b59;

            font-size: 14px;

            outline: none;

            transition: 0.2s;
        }

        .form-control:focus {
            border-color: #159fe5;

            box-shadow: 0 0 0 3px rgba(21,159,229,0.08);
        }

        select.form-control {
            cursor: pointer;
        }

        .help-text {
            margin-top: 6px;

            font-size: 12px;

            color: #8a98aa;
        }

        /*ERROR*/
        .error-message {
            background: #fff0f0;

            color: #d64545;

            border: 1px solid #f3cccc;

            padding: 12px 16px;

            border-radius: 8px;

            margin-bottom: 22px;

            font-size: 14px;
        }

        .field-error {
            color: #d64545;

            font-size: 12px;

            margin-top: 6px;
        }

        /*INFO BOX*/
        .info-box {
            background: #f4f8fc;

            border: 1px solid #e3e9f1;

            border-radius: 8px;

            padding: 15px 17px;

            margin-bottom: 25px;
        }

        .info-box strong {
            color: #1d3557;
        }

        .info-box p {
            margin-top: 5px;

            color: #718198;

            font-size: 13px;

            line-height: 1.5;
        }

        /*BUTTONS*/
        .form-actions {
            display: flex;

            gap: 12px;

            padding-top: 8px;
        }

        .btn {
            border: none;

            text-decoration: none;

            padding: 11px 18px;

            border-radius: 7px;

            font-size: 14px;

            font-weight: 600;

            cursor: pointer;
        }

        .btn-primary {
            background: #159fe5;

            color: white;
        }

        .btn-primary:hover {
            background: #118bc9;
        }

        .btn-secondary {
            background: #eef2f7;

            color: #526781;
        }

        .btn-secondary:hover {
            background: #e1e7ef;
        }

        /*RESPONSIVE*/
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

            .form-actions {
                flex-direction: column;
            }

            .btn {
                text-align: center;
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
            <div class="menu-title">Main</div>
            <a href="{{ route('admin.dashboard') }}">

                📊 &nbsp; Dashboard

            </a>


            <div
                class="menu-title"
                style="margin-top:25px;">Management</div>
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
            <div
                class="menu-title"
                style="margin-top:25px;">
                Examination
            </div>


            <a
                href="{{ route('admin.assign-exams') }}"
                class="active">
                📝 &nbsp; Assign Exams
            </a>
            <a href="{{ route('admin.results') }}">
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
                    class="logout">
                    Logout
                </a>
            </div>
        </header>

        <!-- CONTENT -->
        <section class="content">

            <h1>
                Assign Exam
            </h1>

            <p class="content-subtitle">

                Assign an examination paper to a student.
            </p>

            <!-- FORM CARD -->
            <div class="form-card">
                <div class="card-header">

                    <h3>
                        Assign Examination
                    </h3>

                    <p>
                        Select a student and the subject they need to take.
                    </p>

                </div>

                <div class="form-body">
                    <!-- VALIDATION ERRORS -->
                    @if($errors->any())

                        <div class="error-message">
                            <strong>
                                Please correct the following:
                            </strong>
                            <ul style="margin-top:8px; padding-left:20px;">
                                @foreach($errors->all() as $error)

                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    @endif

                    <!-- INFORMATION -->
                    <div class="info-box">

                        <strong>
                            How assignment works
                        </strong>

                        <p>
                            Select an active student and an active exam paper.
                            The selected subject will then become available to
                            that student in their examination area.
                        </p>

                    </div>
                    <form
                        method="POST"
                        action="{{ route('admin.assign-exams.store') }}">
                        @csrf
                        <!-- STUDENT -->
                        <div class="form-group">

                            <label for="student_id">

                                Student

                                <span>*</span>

                            </label>
                            <select
                                name="student_id"
                                id="student_id"
                                class="form-control"
                                required
                            >
                                <option value="">
                                    -- Select Student --
                                </option>


                                @foreach($students as $student)

                                    <option
                                        value="{{ $student->id }}"
                                        {{ old('student_id') == $student->id ? 'selected' : '' }}
                                    >

                                        {{ $student->first_name }}

                                        @if($student->middle_name)
                                            {{ $student->middle_name }}
                                        @endif

                                        @if($student->last_name)
                                            {{ $student->last_name }}
                                        @endif

                                        -

                                        {{ $student->email }}

                                    </option>

                                @endforeach

                            </select>
                            @error('student_id')

                                <div class="field-error">
                                    {{ $message }}
                                </div>

                            @enderror
                            <div class="help-text">

                                Only active students are shown.

                            </div>

                        </div>

                        <!-- EXAM PAPER / SUBJECT -->

                        <div class="form-group">

                            <label for="exam_paper_id">

                                Subject

                                <span>*</span>

                            </label>


                            <select
                                name="exam_paper_id"
                                id="exam_paper_id"
                                class="form-control"
                                required
                            >

                                <option value="">
                                    -- Select Subject --
                                </option>


                                @foreach($examPapers as $examPaper)

                                    <option
                                        value="{{ $examPaper->id }}"
                                        {{ old('exam_paper_id') == $examPaper->id ? 'selected' : '' }}
                                    >

                                        {{ $examPaper->subject }}

                                    </option>

                                @endforeach

                            </select>


                            @error('exam_paper_id')

                                <div class="field-error">
                                    {{ $message }}
                                </div>

                            @enderror


                            <div class="help-text">

                                Only active exam papers are shown.

                            </div>

                        </div>

                        <!-- BUTTONS -->
                        <div class="form-actions">


                            <button
                                type="submit"
                                class="btn btn-primary"
                            >

                                Assign Exam

                            </button>
                            <a
                                href="{{ route('admin.assign-exams') }}"
                                class="btn btn-secondary"
                            >

                                Cancel

                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</div>
</body>
</html>

