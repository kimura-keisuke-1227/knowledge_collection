@extends('layouts.user')

@section('title', 'テンプレート一覧')

@section('content')
    <div class="container">
        <a href="{{ Route('template.create') }}">テンプレート登録へ</a>
        <table class='table table-striped'>
            <tr>
                <th>ID</th>
                <th>テンプレート</th>
                <th>カテゴリー</th>
                <th></th>
            </tr>
            @foreach ($templateMasterHeaders as $templateMasterHeader)
                <tr>
                    <td>{{ $templateMasterHeader -> id}}</td>
                    <td>{{ $templateMasterHeader -> template_master_header }}</td>
                    <td><a href="{{Route('template.show', ['template'=>$templateMasterHeader])}}">詳細・修正</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection