@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
<img src="{{asset('assets/landing/images/logo.png')}}" class="light-logo" />
@endcomponent
@endslot

{{$subject}}
{{-- Body --}}
#Hello, {{$name}}

{!! $message !!}
{{-- Subcopy --}}

Regards,<br>{{ config('app.name') }}
{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
@endcomponent
@endslot
@endcomponent
