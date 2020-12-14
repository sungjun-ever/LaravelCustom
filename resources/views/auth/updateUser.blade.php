@extends('layouts.main')
@section('title', '정보 수정')

@section('content')
    <div class="mx-auto p-8 max-w-3xl h-auto bg-white shadow-lg">
        <form method="POST" action="/auth/updateUser">
            @csrf
            <p class="border-b border-gray-400 text-left mb-8 pb-1 text-2xl">&nbsp 회 원 정 보</p>
            <p>
                <label for="userId" class="inline-block w-1/4 text-right mr-4">
                    <span class="text-sm text-red-500">*</span>
                    아이디</label>
                <input id="userId" type="text" name="userId" class="rounded-lg pl-1 outline-none" size="30" value="{{Auth::user()->userId}}" readonly>
            </p>
            <p class="mt-6">
                <label for="nickname" class="inline-block w-1/4 text-right mr-4">
                    <span class="text-sm text-red-500">*</span>
                    닉네임</label>
                <input id="nickname" type="text" name="nickname" class="rounded-lg pl-1 outline-none" size="30" value="{{Auth::user() -> nickname}}" readonly>
            </p>
            <p class="mt-6">
                <label for="email" class="inline-block w-1/4 text-right mr-4">
                    <span class="text-sm text-red-500">*</span>
                    이메일</label>
                <input id="email" type="email" name="email" class="rounded-lg pl-1 outline-none" size="30" value="{{Auth::user() -> email}}" readonly>
            </p>

            <p class="mt-6">
                <label for="password" class="inline-block w-1/4 text-right mr-4">
                    <span class="text-sm text-red-500">*</span>
                    비밀번호</label>
                <input id="password" type="password" name="password" class="{{$errors-> first('password') ? 'border-2 border-red-600' : 'border-2 border-blue-400'}}
                    rounded-lg pl-1 outline-none" size="30">
                <span class="ml-4 text-sm text-gray-500">10 ~ 16글자입니다</span>
                <p class="text-sm text-red-500 text-left w-5/12 mx-auto">{{Session::get('message')}}</p>

            </p>

            <p class="mt-6">
                <label for="password_confirmation" class="inline-block w-1/4 text-right mr-4">
                    <span class="text-sm text-red-500">*</span>
                    비밀번호 확인</label>
                <input id="password_confirmation" type="password" name="password_confirmation"
                       class="{{$errors-> first('password_confirmation') ? 'border-2 border-red-600' : 'border-2 border-blue-400'}}
                           rounded-lg pl-1 outline-none" size="30">
            </p>

            <p class="mt-6">
                <label for="tel" class="inline-block w-1/4 text-right mr-4">
                    <span class="text-sm text-red-500">*</span>
                    전화번호</label>
                <input id="tel" type="tel" name="tel" class="rounded-lg pl-1 outline-none" size="30" value="{{Auth::user() -> tel}}">
            </p>

            <p class="mt-8 text-center">
                <input class="bg-blue-600 rounded-xl hover:bg-blue-800 text-white px-6 py-2 mr-6" type="submit" value="수정">
                <input class="bg-red-600 rounded-xl hover:bg-red-800 text-white px-6 py-2" id="backMain" type="button"
                       value="취소" onclick="location.href = '{{route('main')}}'">
            </p>
        </form>
    </div>
@endsection


