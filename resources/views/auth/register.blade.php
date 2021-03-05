<x-guest-layout>
    <x-auth-validation-errors :errors="$errors" />
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <x-label for="name" value="Name" />
            <x-input id="name" type="text" name="name" :value="old('name')" required autofocus />
        </div>
        <div>
            <x-label for="email" value="Email" />
            <x-input id="email" type="email" name="email" :value="old('email')" required />
        </div>
        <div>
            <x-label for="password" value="Password" />
            <x-input id="password"
                type="password"
                name="password"
                required autocomplete="new-password" />
        </div>
        <div>
            <x-label for="password_confirmation" value="Confirm Password" />
            <x-input id="password_confirmation"
                type="password"
                name="password_confirmation" required />
        </div>
        <div>
            <a href="{{ route('login') }}">
                Already registered?
            </a>
            <x-button>
                Register
            </x-button>
        </div>
    </form>
</x-guest-layout>
