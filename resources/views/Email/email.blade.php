<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Forgot OTP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            color: #12263a;
            margin: 0;
            margin-bottom: 10px;
            text-transform: capitalize;
        }

        .header h2 {
            color: #777;
            margin: 0;
        }

        .content {
            background-color: #fff;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .image{
            margin: 20px 0; 
        }

        .h2{
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #eff;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Your One-Time Password (OTP)</h2>
        </div>
        <div class="content">
            <div class="image">
                <img src="{{ $message->embed(public_path('mailImage/city.png'))}}" alt="Logo Image" width="100%">
            </div>
        </div>
        <h2 style="text-align: center;"><strong>OTP : </strong>{{ $mailData['otp'] }}</h2>
        <p><strong>Note :</strong>This is a One Time Password (OTP) for email verification. This OTP is valid for only 15 minutes. Please do not share your OTP with anyone for Security reasons.</p>
    </div>
</body>

</html>
