<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sendmail</title>
</head>
<body>
  <h1>Kirim Email</h1>
  <form action="/sendmail" method="post">
    @csrf
    <label for="">
      Nama Penerima
      <input type="text" name="to">
    </label>
    <br>
    <label for="">
      Pesan
      <input type="text" name="pesan">
    </label>
    <br>
    <button>Kirim</button>
  </form>
</body>
</html>