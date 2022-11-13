@extends('layouts.user')

@section('title', 'コード')

@section('content')
<div class="container">
    <form action="{{Route('codes.store')}}" method="POST">
        @csrf
        <table class='table table-striped'>
            <tr>
                <th>言語</th>
                <td>
                    {{ $code ->getLanguageName() }}
                </td>
            </tr>
            <tr>
                <td>題名</td>
                <td>
                    <div class="mb-6">
                        <input name="title" value="{{ $code -> title }}" id="title" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" value="{{ old('') }}">
                    </div>
                </td>
            </tr>
            <tr>
                <td>概要</td>
                <td>
                    <div class="mb-6">
                        <input name="summary" value="{{ $code -> summary }}" id="summary" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" value="{{ old('') }}">
                    </div>
                </td>
            </tr>
            <tr>
                <td>重要度</td>
                <td>
                    <div class="mb-6">
                        <div class="flex">
                            <select id="importance" class="appearance-none block pl-4 pr-8 py-3 mb-2 text-sm bg-white border rounded" name="importance">
                                @foreach($list_importance as $importance)
                                <option value="{{$importance -> id}}" @if ($importance -> id ==$code->importance)
                                    selected
                                    @endif
                                    >{{$importance -> division}}</option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none transform -translate-x-full flex items-center px-2 text-gray-500">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>回数</td>
                <td><input type="number" name="count" value="1"></td>
            </tr>
        </table>
        <div class="mb-4">
            <label for="code" class="block text-left p-1 my-1 font-medium">コード<span class="text-white text-xs bg-yellow-400 mx-2 py-1 px-2">必須</span></label>
            <textarea name="code" id="code" class="w-full h-96 p-4 text-xs leading-none resize-none bg-blueGray-50 rounded outline-none border" type="text" placeholder="ご自由にご記入ください">{{$code->code}}</textarea>
        </div>
        <div class="mb-4">
            <label for="comment" class="block text-left p-1 my-1 font-medium">説明・コメント<span class="text-white text-xs bg-yellow-400 mx-2 py-1 px-2">必須</span></label>
            <textarea name="comment" id="comment" class="w-full h-96 p-4 text-xs leading-none resize-none bg-blueGray-50 rounded outline-none border" type="text" placeholder="ご自由にご記入ください">{{$code->comment}}</textarea>
        </div>

        <br>
        <button type="submit">登録</button>
    </form>
</div>
@endsection