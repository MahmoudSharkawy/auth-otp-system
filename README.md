# Laravel OTP Authentication System

A secure authentication system built with **Laravel**, integrating standard login functionality with an additional **One-Time Password (OTP)** verification layer to enhance account security.

## Features
- **Full Authentication Suite:** Registration, login, and password recovery powered by Laravel Breeze.
- **OTP Verification:** Automatic email-based OTP generation and verification step after login.
- **Route Protection:** Ensures users cannot access the dashboard until the OTP has been successfully verified.
- **SMTP Ready:** Configured for seamless email delivery via services like Mailtrap.

## Prerequisites
- PHP 8.2 or higher
- Laravel 11/13
- MySQL

## Installation

1. **Clone the repository:**
   \`\`\`bash
   git clone https://github.com/your-username/auth-otp-system.git
   cd auth-otp-system
   \`\`\`

2. **Install dependencies:**
   \`\`\`bash
   composer install
   npm install && npm run dev
   \`\`\`

3. **Configure the Environment:**
   - Copy the example environment file:
     \`\`\`bash
     cp .env.example .env
     \`\`\`
   - Generate application key:
     \`\`\`bash
     php artisan key:generate
     \`\`\`
   - Update your \`.env\` file with your database credentials and mail settings.

4. **Run Database Migrations:**
   \`\`\`bash
   php artisan migrate
   \`\`\`

5. **Start the Development Server:**
   \`\`\`bash
   php artisan serve
   \`\`\`

## Technologies Used
- [Laravel](https://laravel.com/)
- [Tailwind CSS](https://tailwindcss.com/)
- [Mailtrap](https://mailtrap.io/)

---
*Developed for secure authentication practices using Laravel.*
