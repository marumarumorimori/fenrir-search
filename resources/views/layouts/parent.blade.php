<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ハンレス</title>
    <link rel="stylesheet" href="{{ asset('/css/reset.css')  }}">
    <link rel="stylesheet" href="{{ asset('/css/header.css')  }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css')  }}">
    @stack('css')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>
    <div class="bg-img">
        <header>
            <div class="header-inner">
                <a href="{{ route('index') }}"><h1 class="header-logo"><img src="{{ asset('/images/fenrir-title.png')  }}" alt="ハンレス"></h1></a>
            </div>
        </header>
        <main>
            <div class="container">
                <h2>@yield('title')</h2>
                @yield('content')
            </div>
        </main>
        <footer>
            <small>@2022 tsuji shina</small>
        </footer>
    </div>
</body>
</html>