@extends('layouts.user')

@section('title', 'テンプレート詳細')

@section('content')
<div class="container">
    <a href="{{Route('templateMasterCategory.index')}}">カテゴリ一覧</a>
    <a href="{{Route('templateMasterCategory.create')}}">カテゴリ登録</a>
    <form action="{{Route('template.store')}}" method="POST">
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
                <th>テンプレート名</th>
                <td>
                    <div class="mb-6">
                        <input name="template_master_header" id="template_master_header" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" value="{{$templateMasterHeader->template_master_header}}">
                    </div>
                </td>
            </tr>
            <tr>
                <td>カテゴリー</td>
                <td>
                    <div class="mb-6">
                        <div class="flex">
                            <select name="template_master_category_id" id="template_master_category_id" class="appearance-none block pl-4 pr-8 py-3 mb-2 text-sm bg-white border rounded">
                                @foreach($myTemplateCategories as $templateCategory)
                                <option value="{{$templateCategory -> id}}" @if ($templateCategory -> id == $templateMasterHeader->template_master_category_id)
                                    selected
                                    @endif
                                    >{{$templateCategory -> template_master_category}}</option>
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
                        <input id="order" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="number" name="order" value="{{ $templateMasterHeader->order }}">
                    </div>
                </td>
            </tr>
        </table>
        <br>
        <div class="ml-auto">
            <button type="submit" class="py-2 px-3 text-xs text-white font-semibold bg-indigo-500 rounded-md">登録</button>
        </div>
    </form>

    <h3>テンプレートアイテム一覧</h3>
    <a href="{{Route('templateItem.create')}}">テンプレートアイテム登録</a>
</div>
@endsection