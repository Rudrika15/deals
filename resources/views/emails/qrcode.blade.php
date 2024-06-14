<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body style="font-family: Arial, sans-serif;">

    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <div style="text-align: center;">
            <!-- Site Logo -->
            <img src="{{ asset('images/logo.png') }}" alt="Site Logo" style="max-width: 200px;">
        </div>

        <p style="text-align: center;">Here's your purchase offer QR Code:</p>
        <?php
        use SimpleSoftwareIO\QrCode\Facades\QrCode;
        ?>
        <div style="text-align: center;">
            <!-- Replace 'qr-code-image.png' with the actual path to your QR code image -->
            {!! QrCode::size(200)->generate($qrCode) !!}
        </div>
        <div style="text-align: center; padding-top: 10px; font-weight: bold;">
            {{ $uuid }}
        </div>

        <p style="text-align: center;">Scan the QR code to proceed.</p>

        <hr style="border: 1px solid #ccc;">

        <p style="text-align: center;">Thank you for using our service.</p>
    </div>

</body>

</html>
