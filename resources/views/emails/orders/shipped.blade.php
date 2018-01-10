@component('mail::message')
# Order Shipped

Order has been shipped

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
