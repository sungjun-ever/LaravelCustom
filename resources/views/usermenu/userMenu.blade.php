@extends('layouts.main')
@section('submenu')
    <div class="w-full bg-gray-100 mx-auto pt-4">
        <div class="w-1/2 mx-auto text-lg text-center">
            <a href="{{route('updateUser')}}" class="hover:text-gray-500">회원 정보</a>
            <i class="xi-ellipsis-v mx-4"></i>
            <a href="#" class="hover:text-gray-500">작성 글 보기</a>
            <i class="xi-ellipsis-v mx-4"></i>
            <a href="#" class="hover:text-gray-500">작성 댓글 보기</a>
        </div>
    </div>

@endsection

