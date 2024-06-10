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
    <h5>Hi {{ config('app.name') }},</h5>
    <p class="sender">You have a new message from {{ $name }}</p>
    <p class="message">{{ $user_message }}</p>
    <h6 class="email">From: {{ $email }}</h6>
</body>

</html>
