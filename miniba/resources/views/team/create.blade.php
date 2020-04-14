@extends('layouts.app')

@section('content')
<div class="container home-container">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    
                    @endif

                    <form action="{{ route('team.confirm') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label>チーム名</label>
                            <input type="text" name="name" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>都道府県</label>
                            <input type="text" name="prefecture" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>メンバー数</label>
                            <input type="number" name="member" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>メールアドレス</label>
                            <input type="email" name="email" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>ホームページ</label>
                            <input type="url" name="url" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>チーム詳細・PRメッセージ</label>
                            <textarea class="form-control" name="message" rows="8"></textarea>
                        </div>
                        <div class="creare-btn">
                            <input class="btn btn-primary col-6" type="submit" value="確認する">
                        </div>
                    </form>
</div>
@endsection