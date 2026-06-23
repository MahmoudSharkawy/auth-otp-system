<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// 1. تعديل المسار الرئيسي ليقوم بالتحويل لصفحة تسجيل الدخول بدلاً من صفحة Welcome
Route::get('/', function () {
    return redirect()->route('login');
});

// 2. مسار الـ Dashboard (يجب أن يكون محمياً بـ auth ولكن لا يتطلب OTP بعد الدخول)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 3. مسارات البروفايل
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 4. استدعاء مسارات الـ Auth (تأكد أن هذا السطر موجود دائماً)
require __DIR__.'/auth.php';