<x-layouts.auth>
    <h3 class="h3 text-center">新規登録</h3>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <x-label for="name" value="名前" />
            <x-input class="form-control" id="name" type="text" name="name" :value="old('name')" required autofocus />
        </div>
        <div class="form-group">
            <x-label for="email" value="メールアドレス" />
            <x-input class="form-control" id="email" type="email" name="email" :value="old('email')" required />
        </div>
        <div class="form-group">
            <x-label for="password" value="パスワード" />
            <x-input
                class="form-control" 
                id="password"
                type="password"
                name="password"
                required autocomplete="new-password" />
        </div>
        <div class="form-group">
            <x-label for="password_confirmation" value="パスワード(確認)" />
            <x-input
                class="form-control" 
                id="password_confirmation"
                type="password"
                name="password_confirmation" required />
        </div>
        <div class="form-group">
            <button class="btn btn-primary w-100 mb-3" type="submit">
                登録
            </button>
            <a href="{{ route('login') }}">
                ログイン
            </a>
        </div>
    </form>
</x-layouts.auth>
