@extends('layouts.main')

@section('content')
    <div class="min-w-6/12 w-8/12 h-screen mt-8 mx-auto bg-white shadow-2xl">
        <form action="/frees" method="post" class="pt-8 min-w-6/12 w-8/12 h-full mx-auto text-center">
            @csrf
            <label id="title" class="text-lg">제목:</label>
            <input type="text" name="title" class="{{$errors-> first('userId') ? 'border-2 border-red-600' : 'border-2 border-blue-400'}}
                outline-none rounded-lg pl-2 w-8/12" autofocus>

            <textarea name="story" class="{{$errors-> first('userId') ? 'border-2 border-red-600' : 'border-2 border-blue-400'}}
                outline-none rounded-lg min-w-10/12 w-full h-3/4 mt-8 overflow-scroll resize-none px-2"></textarea>

            <div class="mt-8">
                <input type="submit" value="작성" class="bg-blue-600 hover:bg-blue-800 mr-12 px-6 py-2 text-white text-lg">
                <input type="button" value="취소" class="bg-red-600 hover:bg-red-800 px-6 py-2 text-white text-lg">
            </div>
        </form>
    </div>
@endsection
