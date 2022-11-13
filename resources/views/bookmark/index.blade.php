@extends('layouts.user')

@section('title', 'ブックマーク一覧')

@section('content')
<div class="container">

    <a href="{{Route('bookmarks.create')}}">ブックマーク登録</a>
    <table class='table table-striped'>
        <tr>
            <th>表示順</th>
            <th>タイトル</th>
            <th>概要</th>
            <th>リンク</th>
            <th></th>
        </tr>
        @foreach ($bookmarks as $bookmark)
        <tr>
            <td>{{ $bookmark -> order}}</td>
            <td>
                @if ($bookmark->isURL==$is_url)
                <a href="{{$bookmark -> bookmark }}" target="_blank">{{$bookmark -> title}}</a>
                @else
                {{ $bookmark -> title }}
                @endif
            </td>
            <td>{{ $bookmark -> summary}}</td>
            <td><a href="{{$bookmark -> bookmark}}">リンク</a></td>
            <td><a href="{{Route('bookmarks.show', ['bookmark'=>$bookmark])}}">詳細・修正</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection