// resources/views/emails/contact-form.blade.php

<h1>New Message from Customer</h1>
<p><strong>Name:</strong> {{ $contactData['name'] }}</p>
<p><strong>Email:</strong> {{ $contactData['email'] }}</p>
<p><strong>Phone:</strong> {{ $contactData['phone'] }}</p>
<p><strong>Message:</strong></p>
<p>{{ $contactData['message'] }}</p>
