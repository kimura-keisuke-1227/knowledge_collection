@extends('layouts.user')

@section('title', 'タスク')

@section('content')
<div class="container">
    <form action="{{Route('projects.store')}}" method="POST">
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
                <td>プロジェクト名</td>
                <td>
                    <div class="mb-6">
                        <input id="project" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="project" >
                    </div>
                </td>
            </tr>
            <tr>
                <td>まとめ</td>
                <td>
                    <div class="mb-6">
                        <input id="summary" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="summary" >
                    </div>
                </td>
            </tr>
            <tr>
                <td>重要度</td>
                <td><input type="number" name="importance" value="1"></td>
            </tr>
            <tr>
                <td>順番</td>
                <td><input type="number" name="order" value="1"></td>
            </tr>
        </table>
        <div class="mb-4">
            <label for="detail" class="block text-left p-1 my-1 font-medium">詳細<span class="text-white text-xs bg-yellow-400 mx-2 py-1 px-2">必須</span></label>
            {{--
                --}}
            <textarea id="detail" name="detail" class="w-full h-96 p-4 text-xs leading-none resize-none bg-blueGray-50 rounded outline-none border" type="text" placeholder="ご自由にご記入ください"></textarea>
        </div>
        <br>

        
        <div class="ml-auto">
            <button type="submit" class="py-2 px-3 text-xs text-white font-semibold bg-indigo-500 rounded-md">登録</button>
        </div>
    </form>
    <h3>タスク</h3>
    <table class='table table-striped'>
            <tr>
                <th>id</th>
                <th>タスク名</th>
            </tr>
    </table>
</div>
@endsection