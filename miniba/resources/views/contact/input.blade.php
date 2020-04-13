@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">お問い合わせ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.confirm') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label>お名前</label>
                            <input type="text" name="name" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>メールアドレス</label>
                            <input type="email" name="email" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>お問い合わせ内容</label>
                            <textarea class="form-control" name="message" rows="8"></textarea>
                        </div>
                        <input class="btn btn-primary col-6" type="submit" value="確認する">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection