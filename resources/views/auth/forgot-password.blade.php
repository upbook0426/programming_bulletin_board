<x-layouts.auth>
    <h3 class="h3 text-center">パスワード再設定</h3>
    <x-auth-session-status :status="session('status')" />
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group">
            <label>メールアドレス</label>
            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
            <x-validation-error key="email"/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary w-100" type="submit">メールを送信</button>
        </div>
    </form>
</x-layouts.auth>
