@extends('layouts.student')

@section('title', 'Student Login - SkillTest')

@section('content')

<div class="auth-container">

    <div class="auth-card">

        <div class="auth-logo">
            SkillTest

            <span>
                AI & Digital Assessment
            </span>
        </div>


        <div class="login-icon">
            👤
        </div>


        <h1>
            Student Login
        </h1>

        <p class="auth-subtitle">
            Login to continue your assessment
        </p>


        <form
            method="POST"
            action="{{ route('student.login.store') }}"
        >

            @csrf


            <div class="form-group">

                <label>
                    Email Address
                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Enter your email"
                    required
                >

                @error('email')

                    <small class="error-text">
                        {{ $message }}
                    </small>

                @enderror

            </div>


            <div class="form-group">

                <label>
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                >

                @error('password')

                    <small class="error-text">
                        {{ $message }}
                    </small>

                @enderror

            </div>


            <button
                type="submit"
                class="primary-btn full-btn"
            >
                Login
            </button>

        </form>


        <div class="auth-footer">

            Don't have an account?

            <a href="{{ route('student.register') }}">
                Register
            </a>

        </div>

    </div>

</div>

@endsection