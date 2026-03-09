<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Message</title>
</head>

<body style="margin:0; padding:0; background-color:#f4f4f4; font-family:Arial, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="padding:50px 0;">
<tr>
<td align="center">

<!-- ===== EMAIL CARD ===== -->
<table width="600" cellpadding="0" cellspacing="0"
style="background:#ffffff;
border-radius:20px;
box-shadow:0 20px 50px rgba(0,0,0,0.06);
overflow:hidden;">

<!-- ===== GOLD HEADER ===== -->
<tr>
<td align="center"
style="background:#b8860b;
padding:35px;">

    <h2 style="margin:0;
               font-weight:600;
               letter-spacing:1px;
               color:#ffffff;
               font-size:22px;">
        Wings of Jewels
    </h2>

    <p style="margin:6px 0 0;
              font-size:13px;
              color:#fff;
              opacity:0.85;">
        Official Contact Notification
    </p>

</td>
</tr>

<!-- ===== CONTENT ===== -->
<tr>
<td style="padding:40px; color:#444; font-size:15px;">

    <p style="font-size:16px;">
        You received a new message from your website.
    </p>

    <div style="height:1px; background:#eee; margin:20px 0;"></div>

    <p><strong style="color:#b8860b;">Name:</strong><br>
        {{ $data['name'] }}
    </p>

    <p><strong style="color:#b8860b;">Email:</strong><br>
        {{ $data['email'] }}
    </p>

    <p><strong style="color:#b8860b;">Phone:</strong><br>
        {{ $data['phone'] ?? 'Not Provided' }}
    </p>

    <p><strong style="color:#b8860b;">Message:</strong><br>
        {{ $data['message'] }}
    </p>

</td>
</tr>

<!-- ===== FOOTER ===== -->
<tr>
<td align="center"
style="background:#fafafa;
padding:20px;
font-size:12px;
color:#999;
border-top:1px solid #f0f0f0;">

© {{ date('Y') }} Wings of Jewels. All Rights Reserved.

</td>
</tr>

</table>

</td>
</tr>
</table>

</body>
</html>