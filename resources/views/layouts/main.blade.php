<!doctype html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <script src="{{asset('js/index.js')}}"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title', '연습')</title>
</head>
<body>
    <header class="bg-gray-800 min-w-full h-16 flex flex-row shadow-2xl">
        <div class="flex-initial w-3/12 py-2 text-right mr-3">
            <a href="{{route('main')}}" class="text-3xl text-white">Allonsy</a>
        </div>
        <div class="flex-initial w-6/12 h-full py-5 ml-12">
            <ul class="flex flex-row">
                <li class="flex-initial mx-2 text-white text-base hover:text-gray-400">
                    <a href="{{route('freemain')}}" >자유게시판</a></li>
            </ul>
        </div>

        <div class="flex-initial w-3/12 text-left py-4">
            @guest
                <a href="{{route('login')}}" class="inline-block text-lg text-white mr-1 hover:text-gray-400">로그인</a>
                <i class="xi-ellipsis-v text-xl text-white"></i>
                <a href="{{route('register')}}" class="text-lg text-white ml-1 mr-8 hover:text-gray-400">회원가입</a>
            @endguest

            @auth
                <a href="{{route('userMenu')}}" class="text-lg text-white mr-1 hover:text-gray-400">{{Auth::user()->nickname}}</a>
                <i class="xi-ellipsis-v text-xl text-white"></i>
                <form class="inline-block" method="post" action="/auth/logout">
                    @csrf
                    <input type="submit" class="bg-transparent cursor-pointer text-lg text-white ml-1 mr-8 hover:text-gray-400" value="로그아웃">
                </form>
            @endauth
        </div>
    </header>

    @yield('submenu')

    <section class="bg-gray-100 min-h-screen py-16">
    @yield('content')
    </section>
    <footer class="bg-white h-32">

    </footer>
</body>
</html>
