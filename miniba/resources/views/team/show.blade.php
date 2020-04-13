@extends('layouts.app')

@section('content')
<div class="container home-container">
    <div class="team-info">
    <table>
        <tr>
            <th>チーム名</th>
            <td>{{ $team->name }}</td>
        </tr>
        <tr>
            <th>ふりがな</th>
            <td>{{ $team->ruby }}</td>
        </tr>
        <tr>
            <th>メンバー数</th>
            <td>{{ $team->member }}</td>
        </tr>
        <tr>
            <th>ホームページ</th>
            <td>{{ $team->url }}</td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td>{{ $team->email }}</td>
        </tr>
        <tr>
            <th>PRメッセージ</th>
            <td>{{ $team->message }}</td>
        </tr>
    </table>
    <br>
    <a class="btn btn-primary col-6" href="{{ route('contact.input') }}" role="button">話を聞いてみる</a>
    </div>
</div>
@endsection