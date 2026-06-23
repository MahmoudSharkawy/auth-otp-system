<x-guest-layout>
    <div class="mb-4 text-sm text-gray-640">
        {{ __('تم إرسال رمز تحقق (OTP) إلى بريدك الإلكتروني. يرجى إدخاله أدناه للمتابعة.') }}
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('otp.verify.submit') }}">
        @csrf

        <div>
            <x-input-label for="otp" :value="__('رمز التحقق (OTP)')" />
            <x-text-input id="otp" class="block mt-1 w-full" type="text" name="otp" required autofocus />
            <x-input-error :messages="$errors->get('otp')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('تأكيد وتسجيل الدخول') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>