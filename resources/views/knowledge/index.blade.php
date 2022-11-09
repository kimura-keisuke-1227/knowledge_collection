@extends('layouts.user')

@section('title', '記事一覧')

@section('content')
    <div class="container">

        <table class='table table-striped'>
            <tr>
                <th>ID</th>
                <th>タイトル</th>
                <th>概要</th>
                <th></th>
            </tr>
            @foreach ($knowledge as $article)
                <tr>
                    <td>{{ $article -> id}}</td>
                    <td>{{ $article -> title }}</td>
                    <td>{{ $article -> summary}}</td>
                    <td><a href="{{Route('knowledge.show', ['knowledge'=>$article])}}">詳細・修正</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection