<!DOCTYPE html>
<html>
<head>
    <title>Appointment Confirmation</title>
</head>
<body>
    <h2>Thank you for booking with Gratifying Spa</h2>
    <p>Dear {{ $details['name'] }},</p>
    <p>
        We are pleased to confirm your appointment at Gratifying Spa. Here are the details:
    </p>
    <ul>
        <li><strong>Appointment Date:</strong> {{ $details['preferred_date'] }}</li>
        <li><strong>Appointment Time:</strong> {{ $details['preferred_time'] }}</li>
        <li><strong>Type of Appointment:</strong> {{ $details['appointment_type'] }}</li>
    </ul>
    <p>
        If you have any questions or need to reschedule, please contact us.
    </p>
    <p>Thank you,</p>
    <p><strong> Gratifying Spa Team</strong></p>
</body>
</html>

