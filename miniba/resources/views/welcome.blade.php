@extends('layouts.app')

@section('content')
<div class="container welcome-container my-4">

    <div class="container col-3">
        <div class="jumbotron welcome-jumbotron">
            <h1 class="display-4">チームを探す</h1>
            <form method="GET" action="{{ route('team.index') }}" class="form-inline my-2 my-lg-0">
                @csrf
                    <input class="form-control col-sm-8 mr-sm-2" type="search" placeholder="キーワードを入力" aria-label="Search" name="search">
                    <button class="btn my-2 my-sm-0" type="submit">検索</button>
            </form>
        </div>
    </div>

    <div class="tips col-9">
        <div class="cards">
            <div class="card" style="max-width: 18rem;">
                <a href="#">
                <div class="card-body">
                <h5 class="card-title">ミニバスってなに？</h5>
                <p class="card-text">ミニバスケットボールと普通のバスケットボールの違いを学ぼう！</p>
                </div>
            </a>
            </div>
            <div class="card" style="max-width: 18rem;">
                <a href="#">
                <div class="card-body">
                <h5 class="card-title">どうやって始めたらいいの？</h5>
                <p class="card-text">ミニバスケットボールの始め方をここで解説。</p>
                </div>
                </a>
            </div>
            <div class="card" style="max-width: 18rem;">
                <a href="#">
                <div class="card-body">
                <h5 class="card-title">どんな練習があるの？</h5>
                <p class="card-text">リングが無くてもできる練習からチームでチャレンジするものまで、様々な練習方法を紹介。</p>
                </div>
                </a>
            </div>
            <div class="card" style="max-width: 18rem;">
                <a href="#">
                <div class="card-body">
                <h5 class="card-title">ルールを覚えたい！</h5>
                <p class="card-text">誰でもわかる様にイラスト付きで優しく解説。試合前に読むだけでOK！</p>
                </div>
                </a>
            </div>
            <div class="card" style="max-width: 18rem;">
                <a href="#">
                <div class="card-body">
                <h5 class="card-title">ミニバスに必要な道具って？</h5>
                <p class="card-text">練習時や試合で必要な道具について紹介しています。</p>
                </div>
                </a>
            </div>
            <div class="card" style="max-width: 18rem;">
                <a href="#">
                <div class="card-body">
                <h5 class="card-title">やってみたいけど、不安が・・・</h5>
                <p class="card-text">まずは気軽に気になるチームとお話ししてみよう！</p>
                </div>
                </a>
            </div>
        </div>
    </div>

</div>
@endsection