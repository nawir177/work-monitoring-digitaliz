<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>

</head>

<body>
     <div style="margin:0; padding: 0">
          <img src="{{ asset('assets/img/print.png') }}" alt="" width="260px">
     </div>
     <hr style="height: 2px; background-color: rgb(0, 46, 137)">
     <div class="container">
          {{ $slot }}
     </div>
</body>

</html>
