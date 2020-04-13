@extends('layouts.app')

@section('content')
<div class="container home-container">
                    <form action="{{ route('team.store') }}" method="POST">
                    @csrf
                        <input type="hidden" name="name" value="{{ $inputs['name'] }}">
                        <input type="hidden" name="ruby" value="{{ $inputs['ruby'] }}">
                        <input type="hidden" name="member" value="{{ $inputs['member'] }}">
                        <input type="hidden" name="email" value="{{ $inputs['email'] }}">
                        <input type="hidden" name="url" value="{{ $inputs['url'] }}">
                        <input type="hidden" name="message" value="{{ $inputs['message'] }}">

                        <table>
                            <tr>
                                <th>チーム名</th>
                                <td>{{ $inputs['name'] }}</td>
                            </tr>
                            <tr>
                                <th>ふりがな</th>
                                <td>{{ $inputs['ruby'] }}</td>
                            </tr>
                            <tr>
                                <th>メンバー数</th>
                                <td>{{ $inputs['member'] }}</td>
                            </tr>
                            <tr>
                                <th>ホームページ</th>
                                <td>{{ $inputs['email'] }}</td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td>{{ $inputs['url'] }}</td>
                            </tr>
                            <tr>
                                <th>PRメッセージ</th>
                                <td>{{ $inputs['message'] }}</td>
                            </tr>
                        </table>
                        <br>
                        <div class="confirm-btn">
                            <input class="btn btn-primary col-6" type="submit" value="作成する">
                        </div>
                    </form>
</div>
@endsection