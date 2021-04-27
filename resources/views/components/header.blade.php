<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <span class="navbar-brand">PB</span>
        <ul class="nav">
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('questions.index') }}">質問一覧</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('questions.create') }}">質問投稿</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <a class="nav-link" onclick="if (confirm('ログアウトしますか？')) {
                            this.closest('form').submit();
                        }">ログアウト</a>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
