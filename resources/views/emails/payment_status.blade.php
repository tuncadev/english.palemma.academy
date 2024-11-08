<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Статус платежу</title>
</head>
<body>
    <h1>Оновлення статусу платежу</h1>
    <p>Шановний, {{$emailData['name']}}!</p>

    @if($emailData['status'] === 'success')
        <p>Ваш платіж пройшов успішно!

        <p>Натисніть посилання нижче, щоб завершити реєстрацію:</p>

        <a href="{{ $emailData['callbackUrl'] }}">Налаштуйте свій обліковий запис</a>

    @else
        <p>На жаль, ваш платіж не було здійснено.</p>
        @if($emailData['failureReason'])
            <p>Причина: {{ $emailData['failureReason'] }}</p>
        @endif
    @endif

    <p>Ідентифікатор транзакції: {{ $emailData['transactionId'] }}</p>
    <p>Номер рахунку-фактури: {{ $emailData['invoice_id'] }}</p>

    <p>Дякуємо, що обирали нас!!</p>
</body>
</html>
