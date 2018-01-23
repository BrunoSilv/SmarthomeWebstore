@component('mail::message')
# Order Shipped

Order has been shipped
Total : {{$total}}<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
