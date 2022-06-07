@component('mail::message')
#merci de bien activer votre compte

@component('mail::panel')
pour activer votre compte


@endcomponent

@component('mail::button',['url' =>$url])
 
cliquez ici
@endcomponent

merci.
<br>
équipe{{config("app.name")}}
@endcomponent
