<x-guest-layout>
    <div>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</div>
    <x-auth-session-status :status="session('status')" />
    <x-auth-validation-errors :errors="$errors" />
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div>
            <x-label for="email" value="Email" />
            <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
        </div>
        <div>
            <x-button>
                Email Password Reset Link
            </x-button>
        </div>
    </form>
</x-guest-layout>
