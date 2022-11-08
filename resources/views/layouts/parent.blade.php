<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/search.css">
</head>
<body>
    <header>
        <div class="header-inner">
            <a href="search.html"><h1 class="header-logo">ロゴ</h1></a>
            <a href="search.html">！！<i class="fa-regular fa-magnifying-glass"></i></a>
        </div>
    </header>
    <main>

<div class="container">
  <h2>@yield('title')</h2>
  @yield('content')
</div>

</main>
    <footer>
        <small>aa</small>
    </footer>

</body>
</html>