@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img src="{{asset('assets/landing/images/logo.png')}}" class="light-logo" />
        @endcomponent
    @endslot

    {{-- Body --}}
    # Welcome to the Redsea, {{$user['username']}}
    <?php
    $actionUrl = route('userverify', ['token' => $user->vercode]);
    ?>
    Your registered email-id is {{$user['email']}} , Please click on the below link to verify your email account
    @component('mail::button', ['url' => $actionUrl])
        Verify Email
    @endcomponent

    Regards,<br>{{ config('app.name') }}
    {{-- Subcopy --}}

    @component('mail::subcopy')
        If you’re having trouble clicking the "Verify Email" button, copy and paste the URL below
        into your web browser: [{{ $actionUrl }}]({!! $actionUrl !!})
    @endcomponent


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        @endcomponent
    @endslot
@endcomponent
