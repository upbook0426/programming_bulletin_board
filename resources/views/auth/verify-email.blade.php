<x-layouts.guest>
    <div>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</div>

    @if (session('status') == 'verification-link-sent')
        <div>A new verification link has been sent to the email address you provided during registration.</div>
    @endif
    <div>
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <div>
                <x-button>
                    Resend Verification Email
                </x-button>
            </div>
        </form>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Log out</button>
        </form>
    </div>
</x-layouts.guest>
