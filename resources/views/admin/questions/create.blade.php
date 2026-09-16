
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Question - SkillTest Admin</title>

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

        .menu a:hover {
            background: rgba(255,255,255,0.08);
        }

        .menu a.active {
            background: #159fe5;
            color: white;
            font-weight: 600;
        }

        .main {
            margin-left: 275px;
            width: calc(100% - 275px);
            min-height: 100vh;
        }

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
        }

        .admin-name {
            font-weight: 600;
        }

        .logout {
            text-decoration: none;
            background: #e87922;
            color: white;
            padding: 10px 17px;
            border-radius: 7px;
            font-size: 14px;
        }

        .content {
            padding: 35px;
        }

        .content h1 {
            font-size: 30px;
            margin-bottom: 8px;
        }

        .content-subtitle {
            color: #718198;
            margin-bottom: 28px;
        }

        .form-card {
            background: white;
            border: 1px solid #e5ebf3;
            border-radius: 12px;
            padding: 28px;
            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);
            max-width: 900px;
        }

        .selected-subject {
            background: #f4f8fc;
            border: 1px solid #e1e8f0;
            padding: 14px 16px;
            border-radius: 8px;
            margin-bottom: 24px;
            color: #526781;
        }

        .selected-subject strong {
            color: #1d3557;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #263b59;
        }

        textarea,
        input,
        select {
            width: 100%;
            padding: 12px 13px;
            border: 1px solid #d8e1ec;
            border-radius: 7px;
            font-size: 14px;
            outline: none;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        textarea:focus,
        input:focus,
        select:focus {
            border-color: #159fe5;
        }

        .options-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .buttons {
            display: flex;
            gap: 12px;
            margin-top: 25px;
        }

        .btn {
            text-decoration: none;
            border: none;
            cursor: pointer;
            padding: 11px 18px;
            border-radius: 7px;
            font-size: 14px;
            font-weight: 600;
        }

        .btn-primary {
            background: #159fe5;
            color: white;
        }

        .btn-secondary {
            background: #eef2f7;
            color: #526781;
        }

        .errors {
            background: #fff0f0;
            border: 1px solid #f2caca;
            color: #c43c3c;
            padding: 14px 18px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .errors ul {
            margin-left: 18px;
        }

        @media(max-width:700px) {

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

            .brand p,
            .menu-title {
                display: none;
            }

            .menu a {
                font-size: 0;
                text-align: center;
            }

            .main {
                margin-left: 75px;
                width: calc(100% - 75px);
            }

            .content {
                padding: 20px;
            }

            .admin-name {
                display: none;
            }

            .options-grid {
                grid-template-columns: 1fr;
            }
        }

    </style>

</head>

<body>

<div class="layout">

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

            <a href="{{ route('admin.dashboard') }}">
                📊 &nbsp; Dashboard
            </a>

            <div class="menu-title" style="margin-top:25px;">
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

            <a href="{{ route('admin.questions') }}" class="active">
                ❓ &nbsp; Questions
            </a>

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


    <main class="main">

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


        <section class="content">

            <h1>
                Add Question
            </h1>

            <p class="content-subtitle">
                Add a question to the selected subject.
            </p>


            @if($errors->any())

                <div class="errors">

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <div class="form-card">

                @if($selectedExamPaper)

                    <div class="selected-subject">

                        Selected Subject:
                        <strong>
                            {{ $selectedExamPaper->subject }}
                        </strong>

                    </div>

                @else

                    <div class="form-group">

                        <label>
                            Select Subject
                        </label>

                        <select
                            onchange="if(this.value) window.location='{{ route('admin.questions.create') }}?exam_paper_id='+this.value"
                        >

                            <option value="">
                                -- Select Subject --
                            </option>

                            @foreach($examPapers as $examPaper)

                                <option value="{{ $examPaper->id }}">
                                    {{ $examPaper->subject }}
                                </option>

                            @endforeach

                        </select>

                    </div>

                @endif


                @if($selectedExamPaper)

                    <form
                        method="POST"
                        action="{{ route('admin.questions.store') }}"
                    >

                        @csrf

                        <input
                            type="hidden"
                            name="exam_paper_id"
                            value="{{ $selectedExamPaper->id }}"
                        >


                        <div class="form-group">

                            <label>
                                Question
                            </label>

                            <textarea
                                name="question"
                                placeholder="Enter question"
                                required
                            >{{ old('question') }}</textarea>

                        </div>


                        <div class="options-grid">

                            <div class="form-group">

                                <label>
                                    Option A
                                </label>

                                <input
                                    type="text"
                                    name="option_a"
                                    value="{{ old('option_a') }}"
                                    required
                                >

                            </div>


                            <div class="form-group">

                                <label>
                                    Option B
                                </label>

                                <input
                                    type="text"
                                    name="option_b"
                                    value="{{ old('option_b') }}"
                                    required
                                >

                            </div>


                            <div class="form-group">

                                <label>
                                    Option C
                                </label>

                                <input
                                    type="text"
                                    name="option_c"
                                    value="{{ old('option_c') }}"
                                    required
                                >

                            </div>


                            <div class="form-group">

                                <label>
                                    Option D
                                </label>

                                <input
                                    type="text"
                                    name="option_d"
                                    value="{{ old('option_d') }}"
                                    required
                                >

                            </div>

                        </div>


                        <div class="options-grid">

                            <div class="form-group">

                                <label>
                                    Correct Answer
                                </label>

                                <select
                                    name="correct_answer"
                                    required
                                >

                                    <option value="">
                                        -- Select Correct Answer --
                                    </option>

                                    <option value="A">
                                        A
                                    </option>

                                    <option value="B">
                                        B
                                    </option>

                                    <option value="C">
                                        C
                                    </option>

                                    <option value="D">
                                        D
                                    </option>

                                </select>

                            </div>


                            <div class="form-group">

                                <label>
                                    Marks
                                </label>

                                <input
                                    type="number"
                                    name="marks"
                                    min="1"
                                    value="{{ old('marks', 1) }}"
                                    required
                                >

                            </div>


                            <div class="form-group">

                                <label>
                                    Status
                                </label>

                                <select
                                    name="status"
                                    required
                                >

                                    <option value="1">
                                        Active
                                    </option>

                                    <option value="0">
                                        Inactive
                                    </option>

                                </select>

                            </div>

                        </div>


                        <div class="buttons">

                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                Add Question
                            </button>

                            <a
                                href="{{ route('admin.questions', ['exam_paper_id' => $selectedExamPaper->id]) }}"
                                class="btn btn-secondary"
                            >
                                Cancel
                            </a>

                        </div>

                    </form>

                @endif

            </div>

        </section>

    </main>

</div>

</body>

</html>

