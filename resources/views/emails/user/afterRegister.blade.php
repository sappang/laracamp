@component('mail::message')
# Welcome!
<br>
Hi {{ $user->name }}
<br>
Welcome to Laracamp, your account has been created successfully. Now youcan choose your best match camp!

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
