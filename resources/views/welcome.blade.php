<x-layouts.app>
    <x-header/>
    <div>
        @guest
            <a href="{{ route('register') }}">新規登録はこちらから</a>
        @endguest
    </div>
</x-layouts.app>
