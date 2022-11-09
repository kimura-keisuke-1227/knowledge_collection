@extends('layouts.user')

@section('title', '案件一覧')

@section('content')
    <div class="container">

        <table class='table table-striped'>
            <tr>
                <th>ID</th>
                <th>タイトル</th>
                <th>概要</th>
                <th></th>
            </tr>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project -> id}}</td>
                    <td>{{ $project -> title }}</td>
                    <td>{{ $project -> summary}}</td>
                    <td><a href="{{Route('projects.show', ['project'=>$project])}}">詳細・修正</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection