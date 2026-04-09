<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #1a1a1a;
            color: #f4f4f4;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            color: #feb234;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .content {
            padding: 30px;
            line-height: 1.6;
        }

        .content h2 {
            margin-top: 0;
            color: #1a1a1a;
        }

        .details-box {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 6px;
            margin: 20px 0;
            border: 1px solid #eeeeee;
            border-left: 4px solid #feb234;
        }

        .details-box p {
            margin: 10px 0;
            font-size: 14px;
        }

        .details-box strong {
            color: #555;
            display: inline-block;
            width: 140px;
        }

        .footer {
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #888;
            border-top: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Ride Confirmed</h1>
        </div>
        <div class="content">
            <h2>Hello {{ $details['name'] }},</h2>
            <p>Your ultimate ride with Bike &amp; Scooty Rent Pokhara is locked in. The mountains are calling, and your
                machine is fully prepped for the summit.</p>

            <div class="details-box">
                <p><strong>Your Name:</strong> {{ $details['name'] }}</p>
                <p><strong>Phone:</strong> {{ $details['phone'] }}</p>
                <p><strong>Region:</strong> {{ str_replace('_', ' ', ucwords($details['exploring_region'], '_')) }}</p>
                <p><strong>Machine:</strong> {{ $details['brand'] }} {{ $details['vehicle'] }}</p>
                <p><strong>Extras:</strong> {{ $details['extras'] }}</p>
                <p><strong>Pickup Date:</strong> {{ date('F j, Y', strtotime($details['preferred_date'])) }}</p>
                <p><strong>Duration:</strong> {{ $details['days'] }} {{ $details['days'] == 1 ? 'Day' : 'Days' }}</p>
                <p><strong>Total Payable:</strong> Nrs. {{ number_format($details['total_amount']) }}</p>
            </div>

            <p>Please remember to bring your original identification and a helmet (if not rented) upon pickup. Let the
                adventure begin.</p>

        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Bike &amp; Scooty Rent Pokhara. All rights reserved.</p>
        </div>
    </div>
</body>

</html>