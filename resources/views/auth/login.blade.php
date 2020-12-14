@extends('layouts.main')

@section('title', '로그인')

@section('content')
    <div class="mx-auto pt-4 pb-4 max-w-2xl h-auto bg-white shadow-lg">
        <form class="p-4 w-full" action="/auth/login" method="post">
            @csrf
            <p class="border-b border-gray-400 text-2xl text-left mb-8 pb-1">&nbsp 로 그 인</p>
            <p class="mt-4">
                <label for="userId" class="inline-block w-1/3 text-lg text-right mr-4">아이디</label>
                <input type="text" name="userId" id="userId" class="border-2 border-blue-400 rounded-lg pl-2 outline-none" size="30">
            </p>
            <p class="mt-6">
                <label for="password" class="inline-block w-1/3 text-lg text-right mr-4">비밀번호</label>
                <input type="password" name="password" id="password" class="border-2 border-blue-400 rounded-lg pl-2 outline-none" size="30">
            </p>
            <p class="mt-6 w-3/5 mx-auto text-right">
                <label for="remember_me" class="inline-block"></label>
                <input type="checkbox" id="remember_me" name="remember" class="w-4 h-4">
                <span class="text-xl text-gray-400">로그인 유지</span>
            </p>

            <p class="mt-8 text-center">
                <input class="bg-blue-600 rounded-xl hover:bg-blue-800 text-white px-6 py-2 mr-6" type="submit" value="로그인">
                <input class="bg-red-600 rounded-xl hover:bg-red-800 text-white px-6 py-2" id="backMain" type="button"
                       value="취소" onclick="location.href = '{{route('main')}}'">
            </p>
        </form>
    </div>
@endsection
