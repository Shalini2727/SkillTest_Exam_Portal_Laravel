<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SkillTest - AI & Digital Assessment</title>

    <link rel="stylesheet" href="{{ asset('css/student.css') }}">

    <style>

        /* =========================================
           ACCOUNT TYPE MODAL
        ========================================== */

        .account-modal {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.70);
            backdrop-filter: blur(6px);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            padding: 20px;
        }

        .account-modal.hidden {
            display: none;
        }

        .account-modal-box {
            width: 100%;
            max-width: 500px;
            background: #ffffff;
            border-radius: 22px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.20);
            animation: modalAppear 0.3s ease;
        }

        @keyframes modalAppear {

            from {
                opacity: 0;
                transform: translateY(20px) scale(0.97);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }

        }

        .account-logo {
            width: 65px;
            height: 65px;
            margin: 0 auto 18px;

            border-radius: 18px;

            background: linear-gradient(
                135deg,
                #1597d4,
                #087bb8
            );

            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 28px;
            font-weight: 700;
        }

        .account-modal-box h2 {
            margin: 0;
            color: #172b4d;
            font-size: 28px;
        }

        .account-modal-box h2 span {
            color: #1597d4;
        }

        .account-modal-box p {
            margin: 10px 0 28px;
            color: #718096;
            font-size: 15px;
        }

        .account-options {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .account-option {
            text-decoration: none;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 25px 15px;

            background: #ffffff;

            transition: all 0.25s ease;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .account-option:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.10);
        }

        .student-option:hover {
            border-color: #1597d4;
            background: #f3fbff;
        }

        .admin-option:hover {
            border-color: #f28c28;
            background: #fff9f3;
        }

        .account-icon {
            width: 58px;
            height: 58px;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 26px;
            margin-bottom: 13px;
        }

        .student-icon {
            background: #e4f5fd;
            color: #1597d4;
        }

        .admin-icon {
            background: #fff0df;
            color: #e87500;
        }

        .account-option strong {
            font-size: 17px;
            color: #172b4d;
            margin-bottom: 5px;
        }

        .account-option span {
            font-size: 13px;
            color: #718096;
        }

        .close-modal {
            margin-top: 22px;
            border: none;
            background: transparent;
            color: #718096;
            cursor: pointer;
            font-size: 14px;
        }

        .close-modal:hover {
            color: #172b4d;
        }


        /*ACCOUNT TYPE NAVBAR BUTTON*/

        .account-type-btn {
            cursor: pointer;
            text-decoration: none;
        }


        /*RESPONSIVE MODAL*/
        @media (max-width: 550px) {

            .account-modal-box {
                padding: 30px 20px;
            }

            .account-options {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body class="landing-page">


    <!-- ACCOUNT TYPE MODAL-->
    <div id="accountModal" class="account-modal hidden">

        <div class="account-modal-box">

            <div class="account-logo">
                ✓
            </div>

            <h2>
                Welcome to Skill<span>Test</span>
            </h2>

            <p>
                Please select your account type to continue.
            </p>


            <div class="account-options">


                <!-- STUDENT -->

                <a
                    href="{{ route('student.login') }}"
                    class="account-option student-option"
                >

                    <div class="account-icon student-icon">
                        👤
                    </div>

                    <strong>
                        Student
                    </strong>

                    <span>
                        Normal User
                    </span>

                </a>


                <!-- ADMIN -->

                <a
                    href="{{ url('/admin/login') }}"
                    class="account-option admin-option"
                >

                    <div class="account-icon admin-icon">
                        🛡️
                    </div>

                    <strong>
                        Admin
                    </strong>

                    <span>
                        Manage Platform
                    </span>

                </a>

            </div>


            <button
                type="button"
                class="close-modal"
                onclick="closeAccountModal()"
            >
                Continue as guest
            </button>

        </div>

    </div>



    <!-- =========================
         NAVBAR
    ========================== -->

    <header class="landing-header">

        <div class="landing-brand">

            <div class="brand-icon">
                ✓
            </div>

            <div class="brand-text">

                <h2>
                    Skill<span>Test</span>
                </h2>

                <p>
                    AI & Digital Assessment
                </p>

            </div>

        </div>


        <nav class="landing-nav">

            <a
                href="#home"
                class="nav-link active"
            >
                Home
            </a>


            <a
                href="#features"
                class="nav-link"
            >
                Features
            </a>


            <a
                href="#about"
                class="nav-link"
            >
                About
            </a>


            <a
                href="#contact"
                class="nav-link"
            >
                Contact
            </a>


            <!-- ACCOUNT TYPE -->

            <a
                href="javascript:void(0)"
                onclick="openAccountModal()"
                class="login-btn account-type-btn"
            >
                Account Type
            </a>

        </nav>

    </header>



    <!--HERO SECTION-->
    <main id="home">

        <section class="hero-section">

            <div class="hero-content">


                <div class="hero-badge">

                    <span>
                        ✦
                    </span>

                    AI Powered Assessment Platform

                </div>


                <h1>

                    Test Your Skills.

                    <br>

                    <span>
                        Build Your Future.
                    </span>

                </h1>


                <p class="hero-description">

                    SkillTest is an intelligent digital assessment
                    platform designed to help students evaluate their
                    skills, take online exams and track their
                    performance.

                </p>


                <div class="hero-buttons">


                    <a
                        href="{{ route('student.register') }}"
                        class="hero-primary-btn"
                    >

                        Get Started

                        <span>
                            →
                        </span>

                    </a>


                    <a
                        href="javascript:void(0)"
                        onclick="openAccountModal()"
                        class="hero-secondary-btn"
                    >

                        Take an Assessment

                    </a>

                </div>


                <div class="hero-stats">


                    <div class="stat">

                        <strong>
                            100%
                        </strong>

                        <span>
                            Digital
                        </span>

                    </div>


                    <div class="stat">

                        <strong>
                            AI
                        </strong>

                        <span>
                            Powered
                        </span>

                    </div>


                    <div class="stat">

                        <strong>
                            24/7
                        </strong>

                        <span>
                            Accessible
                        </span>

                    </div>


                </div>

            </div>



            <!-- HERO VISUAL -->

            <div class="hero-visual">

                <div class="glow-circle circle-one"></div>

                <div class="glow-circle circle-two"></div>


                <div class="assessment-card">


                    <div class="card-top">

                        <div>

                            <small>
                                SKILLTEST
                            </small>

                            <h3>
                                Smart Assessment
                            </h3>

                        </div>


                        <div class="ai-icon">
                            AI
                        </div>

                    </div>



                    <div class="progress-area">

                        <div class="progress-header">

                            <span>
                                Your Progress
                            </span>

                            <strong>
                                85%
                            </strong>

                        </div>


                        <div class="progress-bar">

                            <div class="progress-fill"></div>

                        </div>

                    </div>



                    <div class="question-box">

                        <div class="question-number">
                            Q
                        </div>

                        <div>

                            <strong>
                                Assessment Ready
                            </strong>

                            <p>
                                Test your knowledge and skills
                            </p>

                        </div>

                    </div>



                    <div class="check-list">

                        <div>

                            <span class="check">
                                ✓
                            </span>

                            Skill Evaluation

                        </div>


                        <div>

                            <span class="check">
                                ✓
                            </span>

                            Instant Results

                        </div>


                        <div>

                            <span class="check">
                                ✓
                            </span>

                            Performance Tracking

                        </div>

                    </div>


                </div>



                <div class="floating-card floating-card-one">

                    <div class="floating-icon">
                        ✓
                    </div>

                    <div>

                        <strong>
                            Result
                        </strong>

                        <span>
                            Available instantly
                        </span>

                    </div>

                </div>



                <div class="floating-card floating-card-two">

                    <div class="floating-icon orange-icon">
                        ★
                    </div>

                    <div>

                        <strong>
                            Smart Testing
                        </strong>

                        <span>
                            AI powered
                        </span>

                    </div>

                </div>


            </div>

        </section>



        <!--FEATURES-->

        <section
            id="features"
            class="features-section"
        >

            <div class="section-heading">

                <span>
                    WHY SKILLTEST?
                </span>

                <h2>

                    Everything You Need For

                    <span>
                        Better Assessments
                    </span>

                </h2>

                <p>

                    A simple and powerful platform for modern
                    digital examinations and skill evaluation.

                </p>

            </div>



            <div class="feature-grid">


                <div class="feature-card">

                    <div class="feature-icon blue">
                        ✓
                    </div>

                    <h3>
                        Smart Assessments
                    </h3>

                    <p>

                        Take structured online assessments
                        designed to evaluate your knowledge
                        and skills.

                    </p>

                </div>



                <div class="feature-card">

                    <div class="feature-icon orange">
                        ⚡
                    </div>

                    <h3>
                        Instant Results
                    </h3>

                    <p>

                        Get your examination score and performance
                        information quickly after completing your test.

                    </p>

                </div>



                <div class="feature-card">

                    <div class="feature-icon purple">
                        ◈
                    </div>

                    <h3>
                        Performance Tracking
                    </h3>

                    <p>

                        Track your assessment performance and
                        understand your progress over time.

                    </p>

                </div>



                <div class="feature-card">

                    <div class="feature-icon green">
                        🔒
                    </div>

                    <h3>
                        Secure Platform
                    </h3>

                    <p>

                        Student accounts and assessment information
                        are managed through a secure platform.

                    </p>

                </div>


            </div>

        </section>



        <!--ABOUT-->
        <section
            id="about"
            class="about-section"
        >

            <div class="about-box">


                <div class="about-content">

                    <span class="section-label">
                        ABOUT SKILLTEST
                    </span>

                    <h2>

                        A Smarter Way To

                        <span>
                            Evaluate Skills
                        </span>

                    </h2>


                    <p>

                        SkillTest brings students and digital
                        assessments together in one simple platform.
                        Students can create an account, access their
                        assigned exams, complete assessments and
                        view their results.

                    </p>


                    <p>

                        Our goal is to make online assessment
                        simple, accessible and meaningful.

                    </p>

                </div>



                <div class="about-visual">

                    <div class="about-circle">

                        <div class="about-inner">

                            <strong>
                                AI
                            </strong>

                            <span>
                                Assessment
                            </span>

                        </div>

                    </div>

                </div>


            </div>

        </section>



        <!--CTA-->
        <section class="cta-section">

            <div>

                <span>
                    READY TO BEGIN?
                </span>

                <h2>
                    Start Your SkillTest Journey Today
                </h2>

                <p>

                    Create your account and take your first
                    digital assessment.

                </p>

            </div>


            <a
                href="{{ route('student.register') }}"
                class="cta-button"
            >

                Create Student Account →

            </a>

        </section>


    </main>



    <!--FOOTER-->

    <footer
        id="contact"
        class="landing-footer"
    >


        <div class="footer-brand">

            <h2>
                Skill<span>Test</span>
            </h2>

            <p>
                AI & Digital Assessment
            </p>

            <small>
                © {{ date('Y') }} SkillTest. All rights reserved.
            </small>

        </div>



        <div class="footer-column">

            <h4>
                Platform
            </h4>

            <a href="#home">
                Home
            </a>

            <a href="#features">
                Features
            </a>

            <a href="#about">
                About
            </a>

        </div>



        <div class="footer-column">

            <h4>
                Student
            </h4>


            <a
                href="javascript:void(0)"
                onclick="openAccountModal()"
            >
                Login
            </a>


            <a href="{{ route('student.register') }}">
                Register
            </a>

        </div>



        <div class="footer-column">

            <h4>
                Contact
            </h4>

            <span>
                AI & Digital Assessment Platform
            </span>

            <span>
                Support available for students
            </span>

        </div>


    </footer>



    <!--ACCOUNT MODAL JAVASCRIPT-->

    <script>


        function openAccountModal() {

            document
                .getElementById('accountModal')
                .classList
                .remove('hidden');

        }



        function closeAccountModal() {

            document
                .getElementById('accountModal')
                .classList
                .add('hidden');

        }


        document
            .getElementById('accountModal')
            .addEventListener('click', function (event) {

                if (event.target === this) {

                    closeAccountModal();

                }

            });


    </script>


</body>

</html>