@extends('layouts.user')

@section('title', '薬品')

@section('content')
<div class="container">
    <form action="{{Route('codes.store')}}" method="POST">
        @csrf
        <table class='table table-striped'>
            <tr>
                <th>言語</th>
                <td>
                    {{ $code ->getLanguageName() }}
                </td>
            </tr>
            <tr>
                <td>概要</td>
                <td><input type="text" name="summary"></td>
            </tr>
            <tr>
                <td>説明</td>
                <td><input type="text" name="explain"></td>
            </tr>
            <tr>
                <td>重要度</td>
                <td><input type="number" name="importance" value="1"></td>
            </tr>
            <tr>
                <td>回数</td>
                <td><input type="number" name="count" value="1"></td>
            </tr>
        </table>
        <h4>コード</h4>
        <textarea name="code" id="" cols="100" rows="10" >{{$code -> code}}</textarea>
        <p>
        {!! nl2br(e($code -> code)) !!}
        </p>
        <br>
        <button type="submit">登録</button>
    </form>
</div>
@endsection