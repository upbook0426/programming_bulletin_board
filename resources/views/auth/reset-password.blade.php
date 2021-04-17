<x-layouts.auth>
    <h3 class="h3">パスワード再設定</h3>
    <x-auth-session-status :status="$errors->first('email')" />
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <input type="hidden" name="email" value="{{ old('email', $request->email) }}">
        <div class="form-group">
            <label>パスワード</label>
            <input class="form-control" type="password" name="password" value="{{ old('password') }}" >
            <x-validation-error key="password" />
        </div>
        <div class="form-group">
            <label>パスワード確認</label>
            <input class="form-control" type="password" name="password_confirmation" value="{{ old('password_confirmation')}}">
            <x-validation-error key="password_confirmation" />
        </div>
        <div class="form-group">
            <button class="btn btn-primary w-100" type="submit">パスワードを再設定</button>
        </div>
    </form>
</x-layouts.auth>
