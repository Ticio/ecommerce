@component('mail::message')
Hey {{$user->name}}

<p style="text-align: justify;">
	Trust this finds you well.This email is just to inform you that your product on swapnsells has been sold. Please find the details of the buyer below:
	
	<br>
	<br>Name: {{$user->buyername}}
    <br>Email: {{$user->buyeremail}}
    <br>Phone Number: {{$user->buyerphone_number}}
    <br>Residence: {{ $user->buyerresidence }}
    <br>Room Number: {{ $user->buyerroom_number }}
    <br>
</p>

<p style="text-align: justify; color: green;">
	<b>You are expected to contact the buyer within 24 hours to confirm when the delivery is to be done.</b>
</p>

@component('mail::button', ['url' => ''])
swapnsells
@endcomponent

@component('mail::button', ['url' => ''])
Thanks for using our platform.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
