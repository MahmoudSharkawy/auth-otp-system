<x-guest-layout>
    <div class="mb-6 text-center">
        <div class="inline-flex p-3 bg-indigo-100 text-indigo-600 rounded-full mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
        </div>
        <h2 class="text-2xl font-bold text-gray-800">التحقق من الهوية</h2>
        <p class="text-sm text-gray-500 mt-1">
            لقد أرسلنا رمز تحقق (OTP) مكون من 6 أرقام إلى بريدك الإلكتروني.
        </p>
    </div>

    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-50 text-red-600 text-sm rounded-lg border border-red-200">
            @foreach ($errors->all() as $error)
                <p class="font-medium">⚠️ {{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('otp.verify.submit') }}" class="space-y-5">
        @csrf

        <div>
            <x-input-label for="otp" :value="__('أدخل رمز التحقق (OTP)')" class="text-right" />
            
            <x-text-input id="otp" 
                          class="block mt-1 w-full text-center text-2xl font-bold tracking-widest bg-gray-50 focus:bg-white focus:ring-indigo-500 focus:border-indigo-500" 
                          type="text" 
                          name="otp" 
                          maxlength="6"
                          placeholder="000000"
                          required 
                          autofocus 
                          autocomplete="off" />
        </div>

        <div>
            <x-primary-button class="w-full justify-center text-base py-2.5">
                {{ __('تأكيد وتسجيل الدخول') }}
            </x-primary-button>
        </div>
    </form>

    <div class="mt-4 text-center">
        <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:text-indigo-900 underline">
            العودة لصفحة تسجيل الدخول
        </a>
    </div>
</x-guest-layout>