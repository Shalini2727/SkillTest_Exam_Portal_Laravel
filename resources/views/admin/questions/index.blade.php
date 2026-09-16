
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Questions - SkillTest Admin</title>

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

        .success-message {
            background: #e7f8ef;
            color: #1b8a50;
            border: 1px solid #c9eedb;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .question-card {
            background: white;
            border-radius: 12px;
            border: 1px solid #e5ebf3;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(20, 50, 90, 0.04);
        }

        .card-header {
            padding: 20px 24px;
            border-bottom: 1px solid #e8edf4;
        }

        .card-header h3 {
            font-size: 19px;
            color: #1d3557;
            margin-bottom: 18px;
        }

        .subject-form {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .subject-form label {
            font-size: 14px;
            font-weight: 600;
            color: #526781;
        }

        .subject-select {
            width: 350px;
            padding: 11px 13px;
            border: 1px solid #d8e1ec;
            border-radius: 7px;
            background: white;
            color: #263b59;
            font-size: 14px;
            outline: none;
        }

        .subject-select:focus {
            border-color: #159fe5;
        }

        .add-question {
            text-decoration: none;
            background: #159fe5;
            color: white;
            padding: 10px 16px;
            border-radius: 7px;
            font-size: 14px;
            font-weight: 600;
            margin-left: auto;
        }

        .add-question:hover {
            background: #118bc9;
        }

        .selected-subject {
            padding: 18px 24px;
            background: #f4f8fc;
            border-bottom: 1px solid #e3e9f1;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .selected-subject strong {
            color: #1d3557;
        }

        .question-count {
            background: #eaf5ff;
            color: #159fe5;
            padding: 7px 13px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }

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
            vertical-align: top;
        }

        tbody tr:hover {
            background: #fafcff;
        }

        .question-text {
            min-width: 280px;
            max-width: 450px;
        }

        .options {
            line-height: 1.8;
            min-width: 220px;
        }

        .correct-answer {
            font-weight: 600;
            color: #1b8a50;
        }

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

        .no-selection {
            text-align: center;
            padding: 55px 20px;
            color: #7d8da3;
        }

        .no-selection h3 {
            color: #526781;
            margin-bottom: 8px;
        }

        .no-questions {
            text-align: center;
            padding: 50px 20px;
            color: #7d8da3;
        }

        @media (max-width: 900px) {

            .sidebar {
                width: 220px;
            }

            .main {
                margin-left: 220px;
                width: calc(100% - 220px);
            }

            .content {
                padding: 25px;
            }

            .subject-form {
                flex-wrap: wrap;
            }

            .add-question {
                margin-left: 0;
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

            .admin-name {
                display: none;
            }

            .content {
                padding: 20px;
            }

            .subject-select {
                width: 100%;
            }

            .subject-form {
                display: block;
            }

            .subject-form label {
                display: block;
                margin-bottom: 8px;
            }

            .add-question {
                display: inline-block;
                margin-top: 12px;
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
                Question Bank
            </h1>

            <p class="content-subtitle">
                Select a subject to view and manage its questions.
            </p>

            @if(session('success'))

                <div class="success-message">
                    {{ session('success') }}
                </div>

            @endif


            <div class="question-card">

                <!-- HEADER -->

                <div class="card-header">

                    <h3>
                        Select Subject
                    </h3>

                    <form
                        method="GET"
                        action="{{ route('admin.questions') }}"
                        class="subject-form"
                    >

                        <label for="exam_paper_id">
                            Subject
                        </label>

                        <select
                            name="exam_paper_id"
                            id="exam_paper_id"
                            class="subject-select"
                            onchange="this.form.submit()"
                        >

                            <option value="">
                                -- Select Subject --
                            </option>

                            @foreach($examPapers as $examPaper)

                                <option
                                    value="{{ $examPaper->id }}"
                                    {{ $selectedExamPaper && $selectedExamPaper->id == $examPaper->id ? 'selected' : '' }}
                                >
                                    {{ $examPaper->subject }}
                                </option>

                            @endforeach

                        </select>


                        @if($selectedExamPaper)

                            <a
                                href="{{ route('admin.questions.create', ['exam_paper_id' => $selectedExamPaper->id]) }}"
                                class="add-question"
                            >
                                + Add Question
                            </a>

                        @endif

                    </form>

                </div>


                @if(!$selectedExamPaper)

                    <div class="no-selection">

                        <h3>
                            Select a Subject
                        </h3>

                        <p>
                            Choose a subject from the dropdown above to view its questions.
                        </p>

                    </div>

                @else

                    <!-- SELECTED SUBJECT -->
                    <div class="selected-subject">

                        <div>
                            Subject:
                            <strong>
                                {{ $selectedExamPaper->subject }}
                            </strong>
                        </div>

                        <span class="question-count">
                            {{ $questions->count() }} Questions
                        </span>

                    </div>


                    <!-- QUESTIONS TABLE -->
                    <div class="table-container">

                        <table>

                            <thead>

                                <tr>

                                    <th>
                                        ID
                                    </th>

                                    <th>
                                        Question
                                    </th>

                                    <th>
                                        Options
                                    </th>

                                    <th>
                                        Correct Answer
                                    </th>

                                    <th>
                                        Marks
                                    </th>

                                    <th>
                                        Status
                                    </th>

                                </tr>

                            </thead>


                            <tbody>

                                @forelse($questions as $question)

                                    <tr>

                                        <td>
                                            {{ $question->id }}
                                        </td>

                                        <td class="question-text">
                                            {{ $question->question }}
                                        </td>

                                        <td class="options">

                                            <div>
                                                <strong>A:</strong>
                                                {{ $question->option_a }}
                                            </div>

                                            <div>
                                                <strong>B:</strong>
                                                {{ $question->option_b }}
                                            </div>

                                            <div>
                                                <strong>C:</strong>
                                                {{ $question->option_c }}
                                            </div>

                                            <div>
                                                <strong>D:</strong>
                                                {{ $question->option_d }}
                                            </div>

                                        </td>

                                        <td class="correct-answer">
                                            {{ $question->correct_answer }}
                                        </td>

                                        <td>
                                            {{ $question->marks }}
                                        </td>

                                        <td>

                                            @if($question->status == 1)

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

                                            <div class="no-questions">

                                                No questions have been added for this subject yet.

                                            </div>

                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                @endif

            </div>

        </section>

    </main>

</div>

</body>

</html>

