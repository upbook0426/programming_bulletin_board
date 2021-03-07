<x-guest-layout>
    <x-auth-session-status :status="session('status')" />
    <x-auth-validation-errors :errors="$errors" />
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <x-label for="email" value="Email" />
            <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
        </div>
        <div>
            <x-label for="password" value="Password" />
            <x-input id="password"
                type="password"
                name="password"
                required autocomplete="current-password" />
        </div>
        <div>
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" name="remember">
                <span>Remember me</span>
            </label>
        </div>
        <div>
            <a href="{{ route('password.request') }}">
                Forgot your password?
            </a>
            <x-button>
                Log in
            </x-button>
        </div>
    </form>
</x-guest-layout>
