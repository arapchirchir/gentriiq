<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Confirmation</title>
</head>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto;">
        <h3>Dear {{ $user_name }},</h3>
        <h4 style="margin-bottom: 20px;">Your booking for <span
                style="color: #0aac60;">{{ $tours_package->package_name }}</span> with the
            following
            details has
            been received successfully.</h4>


        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                <thead>
                    <tr style="background-color: #f2f2f2;">
                        <th style="border: 1px solid #2e2b2b; padding: 8px; text-align: left;">#</th>
                        <th style="border: 1px solid #2e2b2b; padding: 8px; text-align: left;">Detail</th>
                        <th style="border: 1px solid #2e2b2b; padding: 8px; text-align: left;">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">1</td>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">Location</td>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">{{ $tours_package->location }}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">2</td>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">Price</td>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">${{ number_format($tours_package->price) }}
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">3</td>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">Check-in Date</td>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">
                            {{ date('jS M Y', strtotime($checkin_date)) }}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">4</td>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">Check-out Date</td>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">
                            {{ date('jS M Y', strtotime($checkout_date)) }}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">5</td>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">Total Adults</td>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">{{ $total_adults }}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">6</td>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">Total Children</td>
                        <td style="border: 1px solid #2e2b2b; padding: 8px;">{{ $total_children }}</td>
                    </tr>

                    <tr>
                        <td colspan="2" style="border: 1px solid #2e2b2b; padding: 8px; font-weight: bold;">Total
                            Cost</td>
                        <td style="border: 1px solid #2e2b2b; padding: 8px; font-weight: bold;">
                            ${{ number_format($total_price) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p>To confirm your booking, please click <a href="#" style="color: #007bff; text-decoration: none;">
                here </a>to make payment.</p>
        <p>Thank you for booking with us!</p>


    </div>
</body>

</html>
