@component('mail::message')
# Register Camp : {{ $checkout->Camp->title }}
<br>
Hi, {{ $checkout->User->name }}
<br>
thank you for register on <b>{{ $checkout->Camp->title }}</b>, please see payment Instruction by click the button below. 

@component('mail::button', ['url' => route('user.checkout.invoice',$checkout->id)])
Get Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
