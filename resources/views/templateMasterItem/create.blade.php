@extends('layouts.user')

@section('title', 'テンプレートアイテム登録')

@section('content')
<div class="container">
    <a href="{{Route('templateMasterCategory.index')}}">カテゴリ一覧</a>
    <a href="{{Route('templateMasterCategory.create')}}">カテゴリ登録</a>
    <form action="{{Route('templateItem.store')}}" method="POST">
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
                <th>内容</th>
                <td>
                    <div class="mb-6">
                        <input name="template_item" id="template_item" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" value="{{ old('template_category') }}">
                    </div>
                </td>
            </tr>
            <tr>
                <td>入力タイプ</td>
                <td>
                    <div class="mb-6">
                        <div class="flex">
                            <select name="input_type" id="input_type" class="appearance-none block pl-4 pr-8 py-3 mb-2 text-sm bg-white border rounded">
                                @foreach($inputTypes as $inputType)
                                <option value="{{$inputType -> id}}">{{$inputType -> division}}</option>
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
                <td>小数桁(1~5まで)</td>
                <td>
                    <div class="mb-6">
                        <input id="digit" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="number" name="digit" value="1">
                    </div>
                </td>
            </tr>
            <tr>
                <td>順番</td>
                <td>
                    <div class="mb-6">
                        <input id="order" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="number" name="order" value="1">
                    </div>
                </td>
            </tr>
        </table>
        <br>
        <div class="mb-4">
            <label for="explain" class="block text-left p-1 my-1 font-medium">タスク内容説明<span class="text-white text-xs bg-yellow-400 mx-2 py-1 px-2">必須</span></label>
            <textarea name="explain" id="body" class="w-full h-24 p-4 text-xs leading-none resize-none bg-blueGray-50 rounded outline-none border" type="text" placeholder="ご自由にご記入ください"></textarea>
        </div>
        <div class="ml-auto">
            <button type="submit" class="py-2 px-3 text-xs text-white font-semibold bg-indigo-500 rounded-md">登録</button>
        </div>
    </form>

    <h3>リスト</h3>
</div>
@endsection