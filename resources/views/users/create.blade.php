@extends('layouts.admin')

@section('title', 'ユーザ登録')

@section('content')
<div class="container">
    <form action="{{Route('users.store')}}" method="POST">
        @csrf

        <!-- ▼▼▼▼エラーメッセージ▼▼▼▼　-->
        @if($errors->any())
        <div class="mb-8 py-4 px-6 border border-red-300 bg-red-50 rounded">
            <ul>
                @foreach($errors->all() as $error)
                <li class="text-red-400">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <!-- ▲▲▲▲エラーメッセージ▲▲▲▲　-->
        <table class='table table-striped'>
            <tr>
                <th>名前</th>
                <td>
                    <div class="mb-6">
                        <input id="name" class="block w-half px-4 py-3 mb-2 text-sm bg-white border rounded" type="text" name="name" value="{{ old('name') }}">
                    </div>
                </td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td>
                    <div class="mb-6">
                        <input id="email" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="email" name="email" value="{{ old('email') }}">
                    </div>
                </td>
            </tr>
            <tr>
                <td>パスワード（８文字以上）</td>
                <td>
                    <div class="mb-6">
                        <input id="password" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="password" name="password">
                    </div>
                </td>
            </tr>
            <tr>
                <td>パスワード（確認）</td>
                <td>
                    <div class="mb-6">
                        <input id="password_confirmation" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="password" name="password_confirmation">
                    </div>
                </td>
            </tr>
        </table>
        <h4>コード</h4>
        <button type="submit">登録</button>
    </form>
</div>
@endsection