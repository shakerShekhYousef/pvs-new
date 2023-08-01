@component('mail::message')
    # Contact Us

    A new message from {{$first_name}}  {{$last_name}}

    First Name : {{$first_name}}
    Last Name : {{$last_name}}
    E-mail : {{$email}}
    Phone Number : {{$phone}}
    Message : {{$message}}

    Thanks,
@endcomponent
