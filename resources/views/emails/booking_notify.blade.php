<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; color: #333; }
        .container { max-width: 600px; margin: 40px auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .header { background-color: #1a1a1a; color: #ffffff; padding: 30px; text-align: center; }
        .header h1 { margin: 0; font-size: 22px; color: #4ade80; text-transform: uppercase; letter-spacing: 1px; }
        .content { padding: 30px; line-height: 1.6; }
        .details-box { background-color: #f9f9f9; padding: 20px; border-radius: 6px; margin: 20px 0; border: 1px solid #eeeeee; border-left: 4px solid #4ade80; }
        .details-box p { margin: 10px 0; font-size: 14px; }
        .details-box strong { color: #555; display: inline-block; width: 140px; }
        .footer { background-color: #f4f4f4; text-align: center; padding: 20px; font-size: 12px; color: #888; border-top: 1px solid #ddd; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Booking Alert</h1>
        </div>
        <div class="content">
            <p>You have received a new ride booking request. Here are the rider's details:</p>
            
            <div class="details-box">
                <p><strong>Customer Name:</strong> {{ $details['name'] }}</p>
                <p><strong>Phone:</strong> {{ $details['phone'] }}</p>
                <p><strong>Region:</strong> {{ str_replace('_', ' ', ucwords($details['exploring_region'], '_')) }}</p>
                <p><strong>Machine:</strong> {{ $details['brand'] }} {{ $details['vehicle'] }}</p>
                <p><strong>Extras:</strong> {{ $details['extras'] }}</p>
                <p><strong>Pickup Date:</strong> {{ date('F j, Y', strtotime($details['preferred_date'])) }}</p>
                <p><strong>Duration:</strong> {{ $details['days'] }} {{ $details['days'] == 1 ? 'Day' : 'Days' }}</p>
                <p><strong>Total Amount:</strong> Nrs. {{ number_format($details['total_amount']) }}</p>
            </div>
            
            <p>Check the admin dashboard for the uploaded license/citizenship attachment and further verification.</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Bike &amp; Scooty Rent Pokhara System. Automated notification.</p>
        </div>
    </div>
</body>
</html>
