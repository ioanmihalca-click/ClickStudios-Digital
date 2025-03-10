<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Mesaj nou formular de contact</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #0b5ed7;
            color: white;
            padding: 15px;
            border-radius: 5px 5px 0 0;
        }

        .content {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 0 0 5px 5px;
            border: 1px solid #ddd;
            border-top: none;
        }

        .field {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .message {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-top: 10px;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #6c757d;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>Mesaj nou de pe site</h2>
    </div>
    <div class="content">
        <div class="field">
            <div class="label">Nume:</div>
            <div>{{ $name }}</div>
        </div>

        <div class="field">
            <div class="label">Email:</div>
            <div>{{ $email }}</div>
        </div>

        <div class="field">
            <div class="label">Telefon:</div>
            <div>{{ $phone }}</div>
        </div>

        <div class="field">
            <div class="label">Subiect:</div>
            <div>{{ $subject }}</div>
        </div>

        <div class="field">
            <div class="label">Mesaj:</div>
            <div class="message">{{ $messageContent }}</div>
        </div>
    </div>

    <div class="footer">
        <p>Acest email a fost trimis automat din formularul de contact al site-ului ClickStudios-Digital.</p>
    </div>
</body>

</html>
