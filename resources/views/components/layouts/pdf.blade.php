@props(['styles' => null, 'size' => 'a4', 'pdf' => true])

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
      font-size: {{ $pdf ? '12px' : '16px' }};
    }

  </style>
  {{ $styles }}
</head>

<body {{ $attributes->class('relative') }}>
  <x-pdf.footer />
  {{ $slot }}
</body>

</html>
