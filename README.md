# Laravel Auth OTP System

نظام مصادقة متكامل مبني باستخدام إطار العمل **Laravel**، يتضمن تسجيل الدخول التقليدي مع طبقة حماية إضافية عبر **OTP (One Time Password)** لزيادة أمان الحسابات.

## المميزات
- **نظام مصادقة كامل:** (تسجيل، دخول، استعادة كلمة المرور) معتمد على Laravel Breeze.
- **طبقة حماية OTP:** إرسال رمز تحقق عشوائي للبريد الإلكتروني بعد تسجيل الدخول.
- **حماية المسارات:** لا يمكن الوصول للوحة التحكم (Dashboard) إلا بعد التحقق من الرمز المرسل.
- **سهولة الإعداد:** يدعم البريد الإلكتروني عبر SMTP (مثل Mailtrap).

## المتطلبات التقنية
- PHP 8.2+
- Laravel 11/13
- MySQL

## خطوات التثبيت

1. **نسخ المشروع:**
   ```bash
   git clone [https://github.com/your-username/auth-otp-system.git](https://github.com/your-username/auth-otp-system.git)
   cd auth-otp-system
