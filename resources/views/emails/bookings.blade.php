<!DOCTYPE html>
<html>

<head>
    <title>Ride Booking Confirmation</title>
</head>

<body>
    <h2>Thank you for booking with Bike Rental</h2>
    <p>Dear {{ $details['name'] }},</p>
    <p>
        We are pleased to confirm your ride booking. Here are the details:
    </p>
    <ul>
        <li><strong>Selected Vehicle:</strong> {{ $details['vehicle'] }}</li>
        <li><strong>Selected Extras:</strong> {{ $details['extras'] }}</li>
        <li><strong>Brand:</strong> {{ $details['brand'] }}</li>
        <li><strong>Booking Date:</strong> {{ $details['preferred_date'] }}</li>
        <li><strong>Duration:</strong> {{ $details['days'] }} Days</li>
        <li><strong>Total Amount:</strong> {{ $details['total_amount'] }}</li>
    </ul>
    <p>
        If you have any questions or need to reschedule, please contact us.
    </p>
    <p>Thank you,</p>
    <p><strong>Bike & Scooty Rent Pokhara</strong></p>
</body>

</html>