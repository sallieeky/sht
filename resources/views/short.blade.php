<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Short Link</title>
</head>
<body>
  <ul>
    @foreach ($links as $link)
      <li>{{ $link->url_custom }}</li>
    @endforeach
  </ul>
  <h1>Short Your ULR</h1>
  <form action="/short" method="POST">
    @csrf
    <label for="">
      Url Panjang
      <input type="text" name="url_asal" id="">
    </label>
    <br>
    <label for="">
      Url Custom
      <input type="text" name="url_custom" id="">
    </label>
    <br>
    <button>Kirim</button>
  </form>
</body>
</html>