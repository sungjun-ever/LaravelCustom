@extends('layouts.main')

@section('content')
    <div class="flex w-8/12 mx-auto justify-between">
        <div class="flex-initial w-3/12"></div>
        <div class="flex-initial w-3/12 text-right">
            <a class="mr-4 text-lg" href="{{route('create')}}"><i class="xi-pen"></i>
                <span class="text-black border-b border-black">글쓰기</span></a>
        </div>
    </div>
{{--    글 목록  --}}
    <div class="w-8/12 h-screen mt-8 mx-auto bg-white shadow-2xl">

    </div>
@endsection
