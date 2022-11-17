@extends('layouts.user')

@section('title', 'テンプレートカテゴリー登録')

@section('content')
<div class="container">
    <form action="{{Route('templateMasterCategory.store')}}" method="POST">
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
                <th>カテゴリー名</th>
                <td>
                    <div class="mb-6">
                        <input name="template_master_category" id="template_master_category" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" value="{{ old('template_category') }}">
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
        <br>
        <div class="ml-auto">
            <button type="submit" class="py-2 px-3 text-xs text-white font-semibold bg-indigo-500 rounded-md">登録</button>
        </div>
    </form>
</div>
@endsection