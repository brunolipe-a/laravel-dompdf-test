@props(['styles' => null, 'scripts' => null])

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="css/app.css" rel="stylesheet" type="text/css">
  <title>Document</title>
  <style>
    html {
      margin: 0;
      padding: 0;
    }

    @media screen {
      body {
        margin: 5em
      }
    }

    body {
      font: 15px;
    }

  </style>
  {{ $styles }}
  {{ $scripts }}
</head>

<body class="relative">
  {{ $slot }}
</body>

</html>
