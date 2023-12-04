<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #212A3E;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 400px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333333;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            color: #777777;
            margin-bottom: 15px;
        }

        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container text-center" style="padding: 50px;">        
        <h1>Pendaftaran Berhasil</h1>
        <p style="text-align: center;">Silakan periksa email Anda untuk verifikasi.</p>
        <p style="text-align: center;">Apabila belum terkirim, silahkan bisa mengirimkan verifikasi email kembali.</p>
        <p style="text-align: center;"><a href="{{ route('verification.notice') }}" class="button">Kirim ulang email verifikasi</a></p>
    </div>
</body>
</html>
