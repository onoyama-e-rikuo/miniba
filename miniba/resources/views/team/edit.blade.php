@extends('layouts.app')

@section('content')
<div class="container home-container">
                    <form action="{{ route('team.update', ['id' => $team->id]) }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label>チーム名</label>
                        <input type="text" name="name" class="form-control" value="{{ $team->name }}">
                        </div>
                        <div class="form-group">
                            <label>都道府県</label>
                            <input type="text" name="prefecture" class="form-control" value="{{ $team->prefecture }}">
                        </div>
                        <div class="form-group">
                            <label>メンバー数</label>
                            <input type="number" name="member" class="form-control" value="{{ $team->member }}">
                        </div>
                        <div class="form-group">
                            <label>メールアドレス</label>
                            <input type="email" name="email" class="form-control" value="{{ $team->email }}">
                        </div>
                        <div class="form-group">
                            <label>ホームページ</label>
                            <input type="url" name="url" class="form-control" value="{{ $team->url }}">
                        </div>
                        <div class="form-group">
                            <label>チーム詳細・PRメッセージ</label>
                            <textarea class="form-control" name="message" rows="8">{{ $team->message }}</textarea>
                        </div>
                        <div class="form-btn">
                            <input class="btn btn-primary col-6" type="submit" value="更新する">
                        </div>
                    </form>
</div>
@endsection