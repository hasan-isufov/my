<
!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yeni İletişim Mesajı</title>
</head>
<body>
    <h1>Yeni İletişim Mesajı</h1>
    <p><strong>Ad:</strong> {{ $data['name'] }}</p>
    <p><strong>Soyad:</strong> {{ $data['surname'] }}</p>
    <p><strong>E-mail:</strong> {{ $data['email'] }}</p>
    <p><strong>Mesaj:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
