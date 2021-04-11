<x-layouts.guest>
    <div>This is a secure area of the application. Please confirm your password before continuing.</div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <div>
            <x-label for="password" value="Password" />
            <x-input id="password"
                type="password"
                name="password"
                required autocomplete="current-password" />
        </div>
        <div>
            <x-button>
                Confirm
            </x-button>
        </div>
    </form>
</x-layouts.guest>
