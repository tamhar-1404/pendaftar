<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Reset CSS */
        body, h1, p {
            margin: 0;
            padding: 0;
        }

        /* Container Style */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            background-color: #f8f8f8;
            font-family: Arial, sans-serif;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Title Style */
        .title {
            font-size: 28px;
            font-weight: bold;
            color: #0d47a1; /* Blue color */
            margin-top: 20px;
            text-align: center;
        }

        /* Soft Style */
        .soft {
            color: #000; /* Black color */
        }

        /* Body Style */
        .body {
            font-size: 16px;
            color: #000; /* Black color */
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <center>
            <h1 style="color: #00c3ff;">Humma<span class="soft">soft</span></h1>
        </center>
        <h2 style="color: #0d47a1;">Selamat murid anda telah di terima atas nama </h2>
        <center>
            <h1>{{ $name }}</h1>
        </center>
    </div>
</body>
</html>
