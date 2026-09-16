<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'SkillTest')
    </title>

    <link
        rel="stylesheet"
        href="{{ asset('css/student.css') }}"
    >

</head>

<body>

    <header class="student-header">

        <div class="brand">

            <a href="{{ route('student.dashboard') }}">
                SkillTest
            </a>

            <span>
                AI & Digital Assessment
            </span>

        </div>

        {{-- Show student name and logout ONLY on dashboard --}}

        @if(session('student_id') && request()->routeIs('student.dashboard'))

            <div class="student-menu">

                <span>
                    Welcome,
                    {{ session('student_name') }}
                </span>

                <form
                    method="POST"
                    action="{{ route('student.logout') }}"
                >

                    @csrf

                    <button
                        type="submit"
                        class="logout-btn"
                    >
                        Logout
                    </button>

                </form>

            </div>

        @endif

    </header>


    @if(session('success'))

        <div class="alert success">
            {{ session('success') }}
        </div>

    @endif


    @if(session('error'))

        <div class="alert error">
            {{ session('error') }}
        </div>

    @endif


    @yield('content')


    <script
        src="{{ asset('js/student.js') }}"
    ></script>

    @yield('scripts')

</body>

</html>