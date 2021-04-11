<x-layouts.app>
    <div>
        @auth
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" onclick="return confirm('ログアウトしますか？')">ログアウト</button>
            </form>
            <a href="{{ route('questions.create') }}">質問投稿</a>
        @else
            <a href="{{ route('login') }}">Log in</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
</x-layouts.app>
