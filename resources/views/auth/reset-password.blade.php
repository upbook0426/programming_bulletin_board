<x-guest-layout>
    <x-auth-validation-errors :errors="$errors" />
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div>
            <x-label for="email" value="Email" />
            <x-input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus />
        </div>
        <div>
            <x-label for="password" value="Password" />
            <x-input id="password" type="password" name="password" required />
        </div>
        <div>
            <x-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-input id="password_confirmation"
                type="password"
                name="password_confirmation" required />
        </div>
        <div>
            <x-button>
                Reset Password
            </x-button>
        </div>
    </form>
</x-guest-layout>
