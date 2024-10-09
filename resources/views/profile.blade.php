<x-layout>
    <div class="container">
        <h2>Welcome {{ $user->name }}</h2>
        <form method="POST" action="{{ url('/user/two-factor-authentication') }}">
            @csrf

            @if ($user->two_factor_secret)
                Two factor authentication is enabled.
                <h3>QR Code for authenticator applications</h3>
                <div class="pt-5 pb-5">
                    {!! $user->twoFactorQrCodeSvg() !!}
                </div>
                <h3>Recovery codes</h3>
                <ul>
                    @foreach ($user->recoveryCodes() as $code)
                        <li>{{ $code }}</li>
                    @endforeach
                </ul>
                @method('DELETE')
                <button class="btn btn-danger">Disable</button>
            @else
                Two factor authentication is not enabled.
                <button class="btn btn-primary">Enable</button>
            @endif
        </form>
    </div>
</x-layout>
