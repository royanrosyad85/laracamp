@component('mail::message')
# Your Transaction Has Been Confirmed

Hi {{$checkout->User->name}}
<br>
Great news! Your recent transaction has been successfully confirmed, unlocking a world of possibilities for you at <b>{{$checkout->Camp->title}}</b> camp.
<h1>What's Next?</h1>
<br>
Now that your transaction is complete, dive into the exciting features and resources awaiting you on your personalized dashboard. Explore a wealth of knowledge, engage with exclusive content, and take your learning journey to new heights.

<br>
Thank you for choosing <b>{{$checkout->Camp->title}}</b> camp. We're thrilled to be a part of your learning adventure!

@component('mail::button', ['url' => route('user.dashboard')])
Access Your Dashboard
@endcomponent




Best Regards,<br>
{{ config('app.name') }}
@endcomponent
