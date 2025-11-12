<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesan dari Website Semakmur</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .email-container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #2484F6;
        }

        .header h1 {
            color: #2484F6;
            margin: 0;
        }

        .content {
            margin-bottom: 20px;
        }

        .field {
            margin-bottom: 15px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 5px;
        }

        .field strong {
            color: #2484F6;
            display: inline-block;
            width: 100px;
        }

        .message-box {
            background: #fff;
            border: 1px solid #e9ecef;
            border-radius: 5px;
            padding: 15px;
            margin-top: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
            color: #6c757d;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <h1>📧 Pesan Baru dari Website Semakmur</h1>
        </div>

        <div class="content">
            <div class="field">
                <strong>Nama:</strong> {{ $name }}
            </div>

            <div class="field">
                <strong>Email:</strong> {{ $email }}
            </div>

            <div class="field">
                <strong>Subject:</strong> {{ $subject }}
            </div>

            <div class="field">
                <strong>Waktu:</strong> {{ $sent_at }}
            </div>

            <div class="field">
                <strong>Pesan:</strong>
                <div class="message-box">
                    {{ $user_message }}
                </div>
            </div>
        </div>

        <div class="footer">
            <p>📞 Hubungi balik: <a href="mailto:{{ $email }}">{{ $email }}</a></p>
            <p>Pesan ini dikirim melalui form kontak website Semakmur - Marketplace Ekspor Indonesia</p>
        </div>
    </div>
</body>

</html>
