@extends('layouts.student')

@section('title', 'Student Registration - SkillTest')

@section('content')

<div class="register-container">

    <div class="register-card">

        <div class="register-heading">

            <h1>
                Register!
            </h1>

            <p>
                Create your SkillTest student account
            </p>

        </div>


        <form
            method="POST"
            action="{{ route('student.register.store') }}"
        >

            @csrf
             @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            <h2>
                Personal Information
            </h2>


            <div class="form-grid">

                <div class="form-group">

                    <label>
                        First Name *
                    </label>

                    <input
                        type="text"
                        name="first_name"
                        value="{{ old('first_name') }}"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Middle Name
                    </label>

                    <input
                        type="text"
                        name="middle_name"
                        value="{{ old('middle_name') }}"
                    >

                </div>


                <div class="form-group">

                    <label>
                        Last Name
                    </label>

                    <input
                        type="text"
                        name="last_name"
                        value="{{ old('last_name') }}"
                    >

                </div>


                <div class="form-group">

                    <label>
                        Date of Birth *
                    </label>

                    <input
                        type="date"
                        name="dob"
                        value="{{ old('dob') }}"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Email *
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Mobile Number *
                    </label>

                    <input
                        type="text"
                        name="mobile"
                        value="{{ old('mobile') }}"
                        required
                    >

                </div>

            </div>


            <h2>
                Qualification Information
            </h2>


            <div class="form-grid">

                <div class="form-group">

                    <label>
                        Qualification *
                    </label>

                    <input
                        type="text"
                        name="qualification"
                        value="{{ old('qualification') }}"
                        placeholder="B.Tech / BCA / MCA"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Passing Year *
                    </label>

                    <input
                        type="number"
                        name="passing_year"
                        value="{{ old('passing_year') }}"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Percentile *
                    </label>

                    <input
                        type="number"
                        step="0.01"
                        name="percentile"
                        value="{{ old('percentile') }}"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        College *
                    </label>

                    <select
                        name="college_id"
                        required
                    >

                        <option value="">
                            Select College
                        </option>

                        @foreach($colleges as $college)

                            <option
                                value="{{ $college->id }}"
                            >

                                {{ $college->name }}

                            </option>

                        @endforeach

                    </select>

                </div>

            </div>


            <h2>
                Academic Information
            </h2>


            <div class="form-grid">

                <div class="form-group">

                    <label>
                        10th Percentage *
                    </label>

                    <input type="number" step="0.01" name="tenth_percentage" value="{{ old('tenth_percentage') }}" required>

                </div>


                <div class="form-group">

                    <label>
                        12th Percentage *
                    </label>

                    <input type="number" step="0.01" name="twelfth_percentage" value="{{ old('twelfth_percentage') }}" required>

                </div>


                <div class="form-group">

                    <label>
                        Graduation Percentage *
                    </label>
                    <input type="number" step="0.01" name="graduation_percentage" value="{{ old('graduation_percentage') }}" required>
                    
                </div>

            </div>


            <h2>
                Account Information
            </h2>


            <div class="form-grid">

                <div class="form-group">

                    <label>
                        Password *
                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Confirm Password *
                    </label>

                    <input
                        type="password"
                        name="password_confirmation"
                        required
                    >

                </div>

            </div>


            <button
                type="submit"
                class="primary-btn"
            >
                Create Account
            </button>


            <p class="register-login">

                Already registered?

                <a href="{{ route('student.login') }}">
                    Login
                </a>

            </p>

        </form>

    </div>

</div>

@endsection