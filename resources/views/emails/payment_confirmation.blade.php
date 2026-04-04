<!DOCTYPE html>
<html>
<head>
    <title>Payment Confirmation</title>
</head>
<body>
    <h1>Payment Confirmation</h1>
    <p>Dear {{ $booking->name }},</p>
    <p>Your payment for the appointment has been successfully received.</p>
    <ul>
        <li><strong>Appointment Date:</strong> {{ $booking->preferred_date }}</li>
        <li><strong>Appointment Time:</strong> {{ $booking->preferred_time }}</li>
        <li><strong>Type of Appointment:</strong> {{ $booking->appointment_type }}</li>
    </ul>
    <p>
        If you have any questions or need to reschedule, please contact us.
    </p>
    <p>Thank you,</p>
    <p><strong>Gratifying Spa Team</strong></p>
</body>
</html>
