<!-- resources/views/success.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Response</title>
</head>
<body>
    <h1>Payment Response</h1>
    <p>Here is the response data from Portmone:</p>
    <pre>{{ json_encode($data, JSON_PRETTY_PRINT) }}</pre>
    <a href="{{ url('/') }}">Return to Home</a>
</body>
</html>
