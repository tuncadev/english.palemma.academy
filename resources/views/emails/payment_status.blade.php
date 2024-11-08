<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Status</title>
</head>
<body>
    <h1>Payment Status Update</h1>
    <p>Dear User,</p>

    @if($emailData['status'] === 'success')
        <p>Your payment was successful! Click the link below to complete your registration:</p>
        <a href="{{ $emailData['callbackUrl'] }}">Set Up Your Account</a>
    @else
        <p>Unfortunately, your payment failed.</p>
        @if($emailData['failureReason'])
            <p>Reason: {{ $emailData['failureReason'] }}</p>
        @endif
    @endif

    <p>Transaction ID: {{ $emailData['transactionId'] }}</p>

    <p>Thank you for choosing us!</p>
</body>
</html>
