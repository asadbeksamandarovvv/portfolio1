{{-- Hii Admin 


<p><b>Name : - </b> {{ $user->name}}</p>
<p><b>Email : - </b>{{ $user->email}}</p>
<p><b>Subject : - </b>{{ $user->subject}}</p>
<p><b>Message : - </b>{{ $user->message}}</p>

Thanks <br>
{{ config('app.name')} } --}}
<!DOCTYPE html>
<html>
<head>
    <title>Contact Message</title>
</head>
<body>
    <h1>New Contact Message</h1>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Subject:</strong> {{ $subject }}</p>
    <p><strong>Message:</strong> {{ $message }}</p>
</body>
</html>