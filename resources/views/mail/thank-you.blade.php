<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
</head>
<body>
    <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#f4f4f4">
        <tr>
            <td>
                <table align="center" cellpadding="0" cellspacing="0" width="600" style="margin: auto; background-color: #ffffff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <tr>
                        <td style="padding: 30px; text-align: center;">
                            <h2 style="color: #333; margin-bottom: 20px;">Thank You! Mr./Ms {{ $details['name'] }}</h2>
                            <p style="color: #666; margin-bottom: 10px;">We have received your message:</p>
                            <p style="color: #666; margin-bottom: 10px;"><strong>Email:</strong> {{ $details['email'] }}</p>
                            <p style="color: #666; margin-bottom: 10px;"><strong>Message:</strong> {{ $details['message'] }}</p>
                            <p style="color: #666; margin-bottom: 10px;">We will get back to you as soon as possible.</p>
                            <p style="color: #666; margin-bottom: 10px;">Thank you for contacting us!</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
