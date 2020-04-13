@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">お問い合わせ内容確認</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                        <input type="hidden" name="name" value="{{ $inputs['name'] }}">
                        <input type="hidden" name="email" value="{{ $inputs['email'] }}">
                        <input type="hidden" name="message" value="{{ $inputs['message'] }}">

                        <table>
                            <tr>
                                <th>お名前</th>
                                <td>{{ $inputs['name'] }}</td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td>{{ $inputs['email'] }}</td>
                            </tr>
                            <tr>
                                <th>お問い合わせ内容</th>
                                <td>{{ $inputs['message'] }}</td>
                            </tr>
                        </table>
                        <br>
                        <input class="btn btn-primary col-4" type="submit" value="送信">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection