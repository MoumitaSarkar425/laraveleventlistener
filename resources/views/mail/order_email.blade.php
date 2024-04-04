<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
   
</head>
<body>
<div>
    <h2>Order Confirmation</h2>
    <p class="mb-4">Dear {{ $name }},</p>
    <p>Your order #{{ $orderId }} has been completed. Thank you.</p>
    <p class="mt-4">Regards,<br>Demo Store</p>
</div>
</body>
</html>