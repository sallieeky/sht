<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Login</title>
</head>
<body>
  <h1>Silakan Login Akun</h1>
  <form action="/login" method="POST">
    @csrf
    <label>
      Email
      <input type="text" name="email">
    </label>
    <br>
    <label>
      Password
      <input type="text" name="password">
    </label>
    <br>
    <button>Login</button>
  </form>
</body>
</html>