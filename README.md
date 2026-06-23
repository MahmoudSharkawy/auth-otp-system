# Laravel OTP Authentication System

A robust, secure, and modern authentication boilerplate built with **Laravel**. This project extends the standard Laravel Breeze authentication flow by adding a mandatory **One-Time Password (OTP)** verification step, ensuring an extra layer of security for user accounts.

---

## 🚀 Features

* **Secure Authentication:** Powered by Laravel Breeze (Login, Registration, Password Reset).
* **OTP Verification Layer:** Automatic generation and verification of 6-digit codes sent via email.
* **Middleware Protection:** Seamlessly restricts access to the `dashboard` until OTP validation is completed.
* **Database-Ready:** Optimized for MySQL with custom user table attributes for OTP tracking.
* **Modern UI:** Built with Tailwind CSS for a clean, responsive, and professional user experience.

---

## 🛠 Prerequisites

Before you begin, ensure you have the following installed:
* **PHP** 8.2 or higher
* **Composer** (PHP Dependency Manager)
* **Node.js & NPM** (For compiling assets)
* **MySQL** (or any database supported by Laravel)

---

## 📥 Installation Guide

1.  **Clone the Repository:**
    ```bash
    git clone https://github.com/MahmoudSharkawy/auth-otp-system.git
    cd auth-otp-system
    ```

2.  **Install Dependencies:**
    ```bash
    composer install
    npm install
    ```

3.  **Environment Configuration:**
    * Duplicate the `.env.example` file and rename it to `.env`.
    * Generate your application key: `php artisan key:generate`.
    * Configure your database credentials in the `.env` file:
        ```env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=your_db_name
        DB_USERNAME=your_username
        DB_PASSWORD=your_password
        ```
    * Configure your SMTP settings (e.g., Mailtrap) to handle OTP emails.

4.  **Database Setup:**
    Run the migrations to create the necessary tables, including users, password resets, and session tracking:
    ```bash
    php artisan migrate
    ```

5.  **Compile Assets & Start:**
    ```bash
    npm run dev
    # In a separate terminal tab:
    php artisan serve
    ```

---

## 🛡 How the OTP Flow Works

1.  **Login:** The user submits their standard credentials.
2.  **Interception:** Instead of being redirected to the dashboard, the user is redirected to the `/otp/verify` route.
3.  **Email Dispatch:** A unique, time-sensitive OTP is sent to the user's registered email address.
4.  **Verification:** Upon entering the correct OTP, the session is fully authenticated, and the user gains access to the protected dashboard.

---

## 🏗 Technologies Used

* **Framework:** [Laravel](https://laravel.com/)
* **Frontend:** [Tailwind CSS](https://tailwindcss.com/)
* **Email Testing:** [Mailtrap](https://mailtrap.io/)
* **Language:** PHP

---

## 📄 License

This project is open-source and available under the [MIT License](https://opensource.org/licenses/MIT).

---
*Developed for secure authentication practices using Laravel.*
