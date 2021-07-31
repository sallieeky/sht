<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Verifikasi dulu</title>
</head>
<body>
  <h1>Silakan Verifikasi Akun Dulu</h1>
  <h3>{{ Auth::user() }}</h3>
  <form action="/email/verification-notification" method="POST">
    @csrf
    <button name="user" value="{{ Auth::user() }}"> Resend Verifikasi</button>
  </form>
</body>
</html>