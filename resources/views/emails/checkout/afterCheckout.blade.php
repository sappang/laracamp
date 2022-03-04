@component('mail::message')
# Register Camp : {{ $checkout->Camp->title }}
<br>
Hi, {{ $checkout->User->name }}
<br>
thank you for register on <b>{{ $checkout->Camp->title }}</b>, please see payment Instruction by click the button below. 

@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
