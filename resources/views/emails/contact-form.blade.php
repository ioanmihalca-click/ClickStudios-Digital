<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesaj nou formular de contact</title>
</head>

<body style="margin: 0; padding: 0; background-color: #f3f4f6; font-family: Arial, Helvetica, sans-serif;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
        style="background-color: #f3f4f6; padding: 30px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0"
                    style="max-width: 600px; width: 100%; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);">

                    <!-- Header -->
                    <tr>
                        <td style="background-color: #047857; padding: 28px 30px; text-align: center;">
                            <h1
                                style="margin: 0; color: #ffffff; font-size: 22px; font-weight: bold; letter-spacing: 1px;">
                                Click Studios Digital
                            </h1>
                            <p style="margin: 8px 0 0; color: #a7f3d0; font-size: 14px;">
                                Mesaj nou de pe site
                            </p>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="background-color: #f0fdf4; padding: 30px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                <!-- Name -->
                                <tr>
                                    <td style="padding-bottom: 20px;">
                                        <div style="font-size: 12px; font-weight: bold; color: #065f46; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px;">
                                            Nume
                                        </div>
                                        <div style="font-size: 15px; color: #1f2937;">
                                            {{ $name }}
                                        </div>
                                    </td>
                                </tr>

                                <!-- Email -->
                                <tr>
                                    <td style="padding-bottom: 20px;">
                                        <div style="font-size: 12px; font-weight: bold; color: #065f46; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px;">
                                            Email
                                        </div>
                                        <div style="font-size: 15px; color: #1f2937;">
                                            <a href="mailto:{{ $email }}" style="color: #047857; text-decoration: none;">{{ $email }}</a>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Phone -->
                                <tr>
                                    <td style="padding-bottom: 20px;">
                                        <div style="font-size: 12px; font-weight: bold; color: #065f46; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px;">
                                            Telefon
                                        </div>
                                        <div style="font-size: 15px; color: #1f2937;">
                                            {{ $phone }}
                                        </div>
                                    </td>
                                </tr>

                                <!-- Subject -->
                                <tr>
                                    <td style="padding-bottom: 20px;">
                                        <div style="font-size: 12px; font-weight: bold; color: #065f46; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px;">
                                            Subiect
                                        </div>
                                        <div style="font-size: 15px; color: #1f2937;">
                                            {{ $subject }}
                                        </div>
                                    </td>
                                </tr>

                                <!-- Message -->
                                <tr>
                                    <td>
                                        <div style="font-size: 12px; font-weight: bold; color: #065f46; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px;">
                                            Mesaj
                                        </div>
                                        <div style="background-color: #ffffff; padding: 16px; border-radius: 6px; border-left: 4px solid #047857; font-size: 15px; color: #1f2937; line-height: 1.6;">
                                            {{ $messageContent }}
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding: 20px 30px; text-align: center; border-top: 1px solid #e5e7eb;">
                            <p style="margin: 0; font-size: 12px; color: #9ca3af; line-height: 1.5;">
                                Acest email a fost trimis automat din formularul de contact al site-ului ClickStudios-Digital.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>

</html>
