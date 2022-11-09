@extends('layouts.user')

@section('title', '薬品')

@section('content')
    <div class="container">

        <table class='table table-striped'>
            <tr>
                <th>ID</th>
                <th>言語</th>
                <th>概要</th>
                <th></th>
            </tr>
            @foreach ($codes as $code)
                <tr>
                    <td>{{ $code -> id}}</td>
                    <td>{{ $code -> getLanguageName() }}</td>
                    <td>{{ $code -> summary}}</td>
                    <td><a href="{{Route('codes.show', ['code'=>$code])}}">詳細・修正</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection