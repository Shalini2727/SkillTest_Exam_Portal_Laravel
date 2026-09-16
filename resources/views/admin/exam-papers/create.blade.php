# Updated Exam Paper Create Form

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
        Add Exam Paper - SkillTest Admin
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
           BRAND
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
           TOPBAR
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
           FORM CARD
        ========================= */

        .form-card {
            background: white;

            border-radius: 12px;

            border: 1px solid #e5ebf3;

            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);

            padding: 28px;
        }

        .form-card h3 {
            font-size: 19px;

            color: #1d3557;

            margin-bottom: 24px;
        }

        /* =========================
           FORM GROUP
        ========================= */

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;

            font-size: 14px;

            font-weight: 600;

            color: #263b59;

            margin-bottom: 8px;
        }

        .required {
            color: #e64545;
        }

        .form-control {
            width: 100%;

            padding: 12px 14px;

            border: 1px solid #dce4ee;

            border-radius: 7px;

            font-size: 14px;

            color: #263b59;

            background: white;

            outline: none;

            transition: 0.2s;
        }

        .form-control:focus {
            border-color: #159fe5;

            box-shadow: 0 0 0 3px rgba(21,159,229,0.10);
        }

        textarea.form-control {
            resize: vertical;

            min-height: 110px;
        }

        .form-row {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 20px;
        }

        /*ERROR*/
        .error-message {
            background: #fff0f0;

            color: #d64545;

            border: 1px solid #f1caca;

            padding: 12px 16px;

            border-radius: 8px;

            margin-bottom: 20px;

            font-size: 14px;
        }

        .field-error {
            color: #d64545;

            font-size: 12px;

            margin-top: 6px;
        }

        /* BUTTON*/
        .form-actions {
            display: flex;

            align-items: center;

            gap: 12px;

            margin-top: 10px;

            padding-top: 20px;

            border-top: 1px solid #edf1f5;
        }

        .btn-primary {
            border: none;

            background: #159fe5;

            color: white;

            padding: 11px 20px;

            border-radius: 7px;

            font-size: 14px;

            font-weight: 600;

            cursor: pointer;
        }

        .btn-primary:hover {
            background: #118bc9;
        }

        .btn-secondary {
            text-decoration: none;

            background: #f1f4f8;

            color: #526781;

            padding: 11px 20px;

            border-radius: 7px;

            font-size: 14px;

            font-weight: 600;
        }

        .btn-secondary:hover {
            background: #e6ebf2;
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

            .form-row {
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

            <h1>
                Add Exam Paper
            </h1>

            <p class="content-subtitle">
                Create a new examination paper for the SkillTest platform.
            </p>

            <!-- VALIDATION ERRORS -->
            @if($errors->any())

                <div class="error-message">

                    <strong>
                        Please fix the following errors:
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

            <!-- FORM CARD -->
            <div class="form-card">

                <h3>
                    Exam Paper Details
                </h3>

                <form
                    action="{{ route('admin.exam-papers.store') }}"
                    method="POST"
                >

                    @csrf

                    <!-- SUBJECT -->
                    <div class="form-group">

                        <label for="subject">

                            Subject Name

                            <span class="required">
                                *
                            </span>

                        </label>

                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            class="form-control"
                            value="{{ old('subject') }}"
                            placeholder="Enter subject name"
                            required
                        >

                        @error('subject')

                            <div class="field-error">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    <!-- DESCRIPTION -->
                    <div class="form-group">

                        <label for="description">
                            Description
                        </label>

                        <textarea
                            id="description"
                            name="description"
                            class="form-control"
                            placeholder="Enter exam description"
                        >{{ old('description') }}</textarea>

                        @error('description')

                            <div class="field-error">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    <!-- DURATION + MARKS -->
                    <div class="form-row">

                        <!-- DURATION -->

                        <div class="form-group">

                            <label for="duration">

                                Duration (Minutes)

                                <span class="required">
                                    *
                                </span>

                            </label>

                            <input
                                type="number"
                                id="duration"
                                name="duration"
                                class="form-control"
                                value="{{ old('duration') }}"
                                placeholder="e.g. 30"
                                min="1"
                                required
                            >

                            @error('duration')

                                <div class="field-error">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        <!-- TOTAL MARKS -->

                        <div class="form-group">

                            <label for="total_marks">

                                Total Marks

                                <span class="required">
                                    *
                                </span>

                            </label>

                            <input
                                type="number"
                                id="total_marks"
                                name="total_marks"
                                class="form-control"
                                value="{{ old('total_marks') }}"
                                placeholder="e.g. 100"
                                min="1"
                                required
                            >

                            @error('total_marks')

                                <div class="field-error">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>

                    </div>


                    <!-- BUTTONS -->

                    <div class="form-actions">

                        <button
                            type="submit"
                            class="btn-primary"
                        >
                            + Add Exam Paper
                        </button>

                        <a
                            href="{{ route('admin.exam-papers') }}"
                            class="btn-secondary"
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

