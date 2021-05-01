<x-layouts.auth>
    <h3 class="h3 text-center">ログイン</h3>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label>メールアドレス</label>
            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
            <x-validation-error key="email"/>
        </div>
        <div class="form-group">
            <label>パスワード</label>
            <input class="form-control" type="password" name="password">
            <x-validation-error key="password"/>
        </div>
        <div class="form-group">
            <label for="remember_me">
                <input type="checkbox" name="remember">
                <span>ログイン情報を保つ</span>
            </label>
        </div>
        <div class="form-group">
            <button class="btn btn-primary w-100" type="submit">ログイン</button>
        </div>
        <p>
            <a href="{{ route('password.request') }}">パスワードをお忘れの方</a>
        </p>
    </form>
</x-layouts.auth>
