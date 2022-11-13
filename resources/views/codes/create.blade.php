@extends('layouts.user')

@section('title', 'コード')

@section('content')
<div class="container">
    <form action="{{Route('codes.store')}}" method="POST">
        @csrf
        <table class='table table-striped'>
            <tr>
                <th>カテゴリー</th>
                <td>
                    <div class="mb-6">
                        <div class="flex">
                            <select id="category_id" class="appearance-none block pl-4 pr-8 py-3 mb-2 text-sm bg-white border rounded" name="category_id">
                                @foreach ($categories as $category)
                                <option value="{{$category ->id}}">{{$category->category}}</option>
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
                <td>タイトル</td>
                <td>
                    <div class="mb-6">
                        <input id="title" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="title">
                    </div>
                </td>
            </tr>
            <tr>
                <td>概要</td>
                <td>
                    <div class="mb-6">
                        <input id="summary" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="summary">
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
                <td>回数</td>
                <td>
                    <div class="mb-6">
                        <input id="count" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="number" name="count" value="0">
                    </div>
                </td>
            </tr>
        </table>
        <h4>コード</h4>
        <div class="mb-4">
            <textarea id="code" name="code" class="w-full h-96 p-4 text-xs leading-none resize-none bg-blueGray-50 rounded outline-none border" type="text" placeholder="ご自由にご記入ください"></textarea>
        </div>
        <h4>説明</h4>
        <div class="mb-4">
            <textarea id="explain" name="explain" class="w-full h-96 p-4 text-xs leading-none resize-none bg-blueGray-50 rounded outline-none border" type="text" placeholder="ご自由にご記入ください"></textarea>
        </div>
        <br>
        <div class="ml-auto">
            <button type="submit" class="py-2 px-3 text-xs text-white font-semibold bg-indigo-500 rounded-md">登録</button>
        </div>
    </form>
</div>
@endsection