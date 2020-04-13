@extends('layouts.app')

@section('content')
<div class="container home-container">
        @foreach ($teams as $team)
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
                <a class="btn btn-primary col-4" href="{{ route('team.edit', ['id' => $team->id]) }}" role="button">チーム編集</a>
                <br>
                <form method="POST" action="{{route('team.destroy', ['id' => $team->id])}}" id="delete_{{$team->id}}" class="col-12 btn">
                    @csrf
                    <a href="#" class="btn btn-danger col-4" data-id="{{$team->id}}" onclick="deletePost(this);">チーム削除</a>
                </form>
            </div>
            <hr>
            <br>
        @endforeach
        <div class="create-btn">
            <a class="btn btn-primary col-6" href="{{ route('team.create') }}" role="button">チーム登録</a>
        </div>
</div>

<script>

function deletePost(e) {
    'use strict';
    if (confirm('本当に削除してもいいですか？')) {
        document.getElementById('delete_' + e.dataset.id).submit();
    }
}

</script>
@endsection
