<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="{{ asset('css/style_dashboard.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
<div class="flex-container">
<div><p class="tajuk">Selamat Datang {{ Auth::user()->name }}</p></div>
  <a class="play" href="/games">START</a>
  <br>
  <a class="play" href="/top-score">LEADER BOARD</a>
  <br>
  <a class="play" href="/login">QUIT</a>
</div>
</body>
</html>