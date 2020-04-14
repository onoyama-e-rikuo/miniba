@extends('layouts.app')

@section('content')
<div class="container index-container">
                    @foreach ($teams as $team)
                    <div class="team-info">
                    <table>
                        <tr>
                            <th>チーム名</th>
                            <td>{{ $team->name }}</td>
                        </tr>
                        <tr>
                            <th>メンバー数</th>
                            <td>{{ $team->member }}</td>
                        </tr>
                        <tr>
                            <th>PRメッセージ</th>
                            <td>{{ $team->message }}</td>
                        </tr>
                    </table>
                    <br>
                    <a class="btn btn-primary col-6" href="{{ route('team.show', ['id' => $team->id]) }}">チーム詳細</a>
                    </div>
                    <hr>
                    <br>
                    @endforeach
                    <div class="pagi">
                    {{ $teams->links() }}
                    </div>
</div>
@endsection