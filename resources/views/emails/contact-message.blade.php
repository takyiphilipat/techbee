<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">

    <h2 style="color:#facc15; margin-bottom: 10px;">
        🐝 The TechBee
    </h2>

    <p><strong>From:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>

    <hr style="margin: 15px 0;">

    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>

    <hr style="margin: 20px 0;">

    <p style="font-size: 12px; color: #777;">
        This message was sent from the contact form on
        <strong>The TechBee</strong>.
    </p>

</body>
</html>
