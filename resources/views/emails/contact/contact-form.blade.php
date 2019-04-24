@component('mail::message')
#Thank you for your message 

<strong>Name: </strong> {{$data['name']}}
<strong>E-mail: </strong> {{$data['email']}}
<strong>Message: </strong> {{$data['message']}}
@endcomponent
