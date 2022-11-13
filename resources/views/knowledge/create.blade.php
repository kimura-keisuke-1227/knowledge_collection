@extends('layouts.user')

@section('title', '記事作成')

@section('content')
<div class="container">
    <form action="{{Route('knowledge.store')}}" method="POST">
        @csrf

        @if($errors->any())
        <div class="mb-8 py-4 px-6 border border-red-300 bg-red-50 rounded">
            <ul>
                @foreach($errors->all() as $error)
                <li class="text-red-400">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <table class='table table-striped'>
            <tr>
                <th>カテゴリー</th>
                <td>
                    <div class="mb-6">
                        <div class="flex">
                            <select id="categories" class="appearance-none block pl-4 pr-8 py-3 mb-2 text-sm bg-white border rounded" name="category_id">
                                @foreach($categories as $category)
                                <option value="{{$category -> id}}">{{$category -> category}}</option>
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
                <td>題名</td>
                <td>
                    <div class="mb-6">
                        <input id="title" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="title" value="{{ old('title') }}">
                    </div>
                </td>
            </tr>
            <tr>
                <td>まとめ</td>
                <td>
                    <div class="mb-6">
                        <input id="summary" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="summary" value="{{ old('summary') }}">
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
                                <option value="{{$importance -> id}}" 
                                @if ($importance -> division ==$importance_normal)
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
                <td>順番</td>
                <td>
                    <div class="mb-6">
                        <input id="order" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="number" name="order" value="{{ old('order') }}">
                    </div>
                </td>
            </tr>
        </table>
        <div class="mb-4">
            <label for="knowledge" class="block text-left p-1 my-1 font-medium">詳細<span class="text-white text-xs bg-yellow-400 mx-2 py-1 px-2">必須</span></label>
            <textarea id="knowledge" name="knowledge" class="w-full h-96 p-4 text-xl leading-none resize-none bg-blueGray-50 rounded outline-none border" type="text" placeholder="ご自由にご記入ください"></textarea>
        </div>
        <br>
        <div class="ml-auto">
            <button type="submit" class="py-2 px-3 text-xs text-white font-semibold bg-indigo-500 rounded-md">登録</button>
        </div>
    </form>
</div>
@endsection