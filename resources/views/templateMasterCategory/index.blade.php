@extends('layouts.user')

@section('title', 'テンプレートカテゴリー一覧')

@section('content')
    <div class="container">
        <a href="{{ Route('templateMasterCategory.create') }}">テンプレートカテゴリー登録へ</a>
        <table class='table table-striped'>
            <tr>
                <th>ID</th>
                <th>カテゴリー</th>
                <th></th>
            </tr>
            @foreach ($templateMasterCategories as $templateMasterCategory)
                <tr>
                    <td>{{ $templateMasterCategory -> id}}</td>
                    <td>{{ $templateMasterCategory -> template_master_category }}</td>
                    <td><a href="{{Route('templateMasterCategory.show', ['templateMasterCategory'=>$templateMasterCategory])}}">詳細・修正</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection