@component('mail::message')
# Hello Roger, vous avez un nouveau message sur votre site des devs de l'UPB de:
-{{$msg->name}}<br>
-{{$msg->email}}
@component('mail::panel')
{{$msg->message}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
