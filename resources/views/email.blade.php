<!-- resources/views/emails/contact-form.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Form Submission</title>
    </head>
    <body>
        <h1>Contact Form Submission</h1>
        <p>Name: {{ $name }}</p>
        <p>Email: {{ $email }}</p>
        <p>Message: {{ $message }}</p>
    </body>
</html>