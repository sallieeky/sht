<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Register</title>
</head>
<body>
  <h1>Silakan Register Akun</h1>
  <form action="/register" method="POST">
    @csrf
    <label>
      Name
      <input type="text" name="name">
    </label>
    <br>
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
    <button>Register</button>
  </form>
</body>
</html>