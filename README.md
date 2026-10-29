# SkillTest Exam Portal

SkillTest is a web-based online examination portal developed using Laravel and MySQL. It provides separate Admin and Student modules to manage examinations, conduct timed MCQ tests, and calculate results automatically.

## Features

### Admin Module
- Admin login and authentication
- Admin dashboard
- College management
- Student management
- Question bank management
- Exam paper creation and question management
- Exam assignment to students
- Examination reports and results

### Student Module
- Student registration and login
- Student dashboard
- View assigned examinations
- Timed MCQ-based examinations
- Submit examination answers
- Automatic answer evaluation
- Score and percentage calculation
- Pass/Fail result generation
- View examination results

## Technology Stack

- **Backend:** PHP, Laravel 13
- **Frontend:** HTML5, CSS3, JavaScript, Bootstrap, Blade
- **Database:** MySQL
- **Database Management:** phpMyAdmin
- **Development Environment:** XAMPP
- **Package Management:** Composer
- **Frontend Build Tool:** Vite
- **Architecture:** MVC (Model-View-Controller)

## Application Flow

### Admin Flow
Admin Login → Dashboard → Manage Colleges and Students → Manage Questions → Create Exam Paper → Assign Exam → View Results

### Student Flow
Student Registration/Login → Dashboard → View Assigned Exam → Start Timed Exam → Submit Answers → Automatic Evaluation → View Result

## Database

The application uses MySQL with Laravel migrations and seeders.

Major database entities include:
- Colleges
- Students
- Admins
- Categories
- Questions
- Exam Papers
- Exam Assignments
- Results

Database migrations are included in the `database/migrations` directory.

## Project Structure

```text
SkillTest_Exam_Portal_Laravel/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   └── Models/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
│   ├── css/
│   └── js/
├── resources/
│   └── views/
│       ├── admin/
│       ├── student/
│       └── layouts/
├── routes/
├── storage/
├── artisan
├── composer.json
├── package.json
└── vite.config.js
```

## Installation and Setup

### Requirements
- PHP version compatible with the project dependencies
- Composer
- MySQL
- XAMPP (for local development)

### Steps

1. Clone the repository:

   ```bash
   git clone https://github.com/Shalini2727/SkillTest_Exam_Portal_Laravel.git
   ```

2. Open the project directory:

   ```bash
   cd SkillTest_Exam_Portal_Laravel
   ```

3. Install PHP dependencies:

   ```bash
   composer install
   ```

4. Create a `.env` file from `.env.example` and configure your database credentials.

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Run database migrations after configuring the database:

   ```bash
   php artisan migrate
   ```

7. Install frontend dependencies and build assets:

   ```bash
   npm install
   npm run build
   ```

8. Start the local development server:

   ```bash
   php artisan serve
   ```

The application will be available at the local URL displayed by Laravel.

## Repository

GitHub: https://github.com/Shalini2727/SkillTest_Exam_Portal_Laravel
