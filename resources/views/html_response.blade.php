<!-- resources/views/portmone/html_response.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portmone HTML Response</title>
    <style>
        iframe {
            width: 100%;
            height: 90vh;
            border: none;
        }
    </style>
</head>
<body>
    <h1>Portmone Payment Gateway Response</h1>
    <iframe srcdoc="{{ $htmlContent }}"></iframe>
</body>
</html>
