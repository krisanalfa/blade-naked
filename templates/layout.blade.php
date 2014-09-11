<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title', (f('controller.name') . f('controller.method') ? f('controller.name') . ' ' . f('controller.method', true) : 'Bono'))
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <link rel="apple-touch-icon" sizes="114x114" href="{{ Theme::base('vendor/blade-naked/img/apple-touch-icon-114x114.png') }}" />
    <link rel="stylesheet" href="{{ Theme::base('vendor/blade-naked/css/naked.min.css') }}" />
    <link rel="stylesheet" href="{{ Theme::base('vendor/blade-naked/css/main.css') }}" />

    <script src="{{ Theme::base('vendor/blade-naked/jquery/jquery.js') }}"></script>
    <script src="{{ Theme::base('vendor/blade-naked/js/main.js') }}"></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="row">
                <div class="span-2">
                    <a class="back-button" href="{{ URL::base() }}"></a>
                </div>
                <div class="span-8">
                    <h6 class="label title">{{ App::getInstance()->config('navbar.title') }}</h6>
                    <p>{{ App::getInstance()->config('navbar.subtitle') }}</p>
                </div>
                <div class="span-2">
                    <a href="{{ URL::site('/menu') }}" class="icon-menu"></a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        {{ f('notification.show') }}
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>
</html>
