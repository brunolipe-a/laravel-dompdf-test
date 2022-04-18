@props(['styles' => null, 'scripts' => null, 'size' => 'a4', 'margin' => '5em', 'fontSize' => '12px'])

<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="css/app.css" rel="stylesheet" type="text/css">
  <title>Document</title>
  <style>
    @page {
      size: {{ $size }};
    }

    html {
      margin: 0;
      padding: 0;
      font-size: {{ $fontSize }};
    }

    body {
      margin: {{ $margin }}
    }

  </style>
  {{ $styles }}
</head>

<body class="relative">
  {{ $slot }}
</body>

</html>
