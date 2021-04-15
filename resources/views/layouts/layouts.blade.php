<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- スマホ対応 -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @component('components.header')
        @endcomponent
        <div class="container pt-5 pb-5"> <!-- pt-5はBootstrap4に存在するクラスで、padding-top: 3remというCSSが設定される -->
                @component('components.flash')
                @endcomponent
            @yield('content')
        </div>

        @component('components.footer')
        @endcomponent

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>