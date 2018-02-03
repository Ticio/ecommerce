@component('mail::message')
Hey {{$user->name}}

<p style="text-align: justify;">Trust this finds you well.This email is just to inform you that your product on swapnsells has been sold. Please you are expected to contact us via <span style=" color:blue; font-weight: bold;">swapnsells@gmail.com</span> to pay your commission and get the full information of your buyer. 
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
