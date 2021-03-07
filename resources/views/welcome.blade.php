<x-guest-layout>
    <div>
        @auth
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit">ログアウト</button>
            </form>
        @else
            <a href="{{ route('login') }}">Log in</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
</x-guest-layout>
