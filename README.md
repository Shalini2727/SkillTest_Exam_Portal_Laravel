# SkillTest Exam Portal

A Laravel 13 online examination portal matching the supplied reference screens, with the brand changed to SkillTest.

## Requirements
PHP 8.3+, Composer, MySQL/XAMPP.

## Setup
1. Extract the ZIP.
2. Open the extracted folder in VS Code.
3. Run `composer install`.
4. Copy `.env.example` to `.env`.
5. Create a MySQL database named `skilltest` in phpMyAdmin.
6. Run `php artisan key:generate`.
7. Run `php artisan migrate --seed`.
8. Run `php artisan serve`.
9. Open http://127.0.0.1:8000

## Demo accounts
Admin: admin@skilltest.com / password
Student: student@skilltest.com / password

## Main functionality
Admin login, dashboard, colleges, students, categories, question bank, exam-paper generation, exam assignment, exam report and results.

Student registration/login, assigned exams, timed MCQ exam, automatic marking and result.
