<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verification Code</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body style="margin:0;padding:0;background-color:#f0ede8;font-family:'DM Sans',sans-serif;-webkit-font-smoothing:antialiased;">

    <div style="width:100%;padding:48px 16px;background-color:#f0ede8;">
        <div style="max-width:480px;margin:0 auto;background-color:#faf9f7;border-radius:4px;overflow:hidden;box-shadow:0 2px 24px rgba(0,0,0,0.06);">

            <!-- Accent bar -->
            <div style="height:3px;background:linear-gradient(90deg,#1a1a1a 0%,#555 100%);"></div>

            <div style="padding:48px 48px 40px;">

                <!-- Brand -->
                <div style="display:flex;align-items:center;gap:10px;margin-bottom:40px;">
                    <div style="width:8px;height:8px;border-radius:50%;background-color:#1a1a1a;flex-shrink:0;"></div>
                    <span style="font-family:'DM Sans',sans-serif;font-weight:500;font-size:13px;letter-spacing:0.12em;text-transform:uppercase;color:#1a1a1a;">BRIVA DIGITAL</span>
                </div>

                <!-- Heading -->
                <h1 style="font-family:'DM Serif Display',serif;font-size:28px;color:#1a1a1a;line-height:1.25;margin:0 0 12px;font-weight:400;">Verify your<br>identity</h1>
                <p style="font-size:14px;color:#888;font-weight:300;line-height:1.6;margin:0 0 40px;">
                    Use the code below to complete your sign-in.<br>
                    It was requested just now from your account.
                </p>

                <!-- Code block -->
                <div style="background-color:#f0ede8;border-radius:3px;padding:28px 24px;text-align:center;margin-bottom:32px;">
                    <p style="font-size:10px;letter-spacing:0.18em;text-transform:uppercase;color:#aaa;font-weight:500;margin:0 0 14px;">One-time code</p>
                    <p style="font-family:'Courier New',monospace;font-size:38px;letter-spacing:0.2em;color:#1a1a1a;font-weight:600;margin:0;">{{ $code }}</p>
                </div>

                <!-- Divider -->
                <div style="height:1px;background-color:#e8e5e0;margin-bottom:28px;"></div>

                <!-- Expiry -->
                <div style="display:flex;align-items:flex-start;gap:12px;margin-bottom:32px;">
                    <svg style="flex-shrink:0;width:16px;height:16px;margin-top:1px;" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="8" cy="8" r="7" stroke="#bbb" stroke-width="1.2"/>
                        <path d="M8 4.5V8.5L10.5 10" stroke="#bbb" stroke-width="1.2" stroke-linecap="round"/>
                    </svg>
                    <p style="font-size:13px;color:#999;line-height:1.6;font-weight:300;margin:0;">
                        This code expires in <strong style="color:#555;font-weight:500;">10 minutes.</strong>
                        If you didn't request this, you can safely ignore this email.
                    </p>
                </div>

                <!-- Security note -->
                <div style="background-color:#f5f3ef;border-left:2px solid #d0ccc5;padding:14px 18px;border-radius:0 2px 2px 0;margin-bottom:40px;">
                    <p style="font-size:12px;color:#aaa;line-height:1.7;font-weight:300;margin:0;">
                        Never share this code with anyone. Daystar University staff will never ask for your verification code.
                    </p>
                </div>

            </div>

            <!-- Footer -->
            <div style="padding:24px 48px;border-top:1px solid #e8e5e0;background-color:#faf9f7;">
                <p style="font-size:11px;color:#bbb;text-align:center;line-height:1.8;font-weight:300;margin:0;">
                    Briva Digital &nbsp;&middot;&nbsp; P.O. Box 725, Molo, Kenya<br>
                    <a href="#" style="color:#999;text-decoration:none;border-bottom:1px solid #ddd;">Unsubscribe</a>
                    &nbsp;&middot;&nbsp;
                    <a href="#" style="color:#999;text-decoration:none;border-bottom:1px solid #ddd;">Privacy Policy</a>
                </p>
            </div>

        </div>
    </div>

</body>
</html>