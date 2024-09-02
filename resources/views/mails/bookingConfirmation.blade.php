<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User message</title>

    <style>
        h5 {
            font-size: 1.5rem;
            color: #333;
        }

        .sender {
            font-size: 1.2rem;
            color: #333;
        }

        .message {
            font-size: 1rem;
            color: #333;
        }

        .email {
            font-size: 1rem;
            color: #333;
        }
    </style>
</head>

<body>


    <h5 class="email">Hi {{ $user_name }},</h5>
    <p class="sender">You have a new message from {{ config('app.name') }},</p>
    <p class="message">Your booking has been confirmed with the following details:</p>

    <p class="message">Location : {{ $tours_package->location }}</p>
    <p class="message">Price : ${{ number_format($tours_package->price) }}</p>
    <p class="message">Check-in Date : {{ date('jS M Y', strtotime($checkin_date)) }}</p>
    <p class="message">Check-out Date : {{ date('jS M Y', strtotime($checkout_date)) }}</p>
    <p class="message">Total Adults : {{ $total_adults }}</p>
    <p class="message">Total Children : {{ $total_children }}</p>
    <p class="message">Total Cost : ${{ number_format($total_price) }}</p>
    <p class="message">Thank you for booking with us! </p>



</body>

</html>
