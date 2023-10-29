@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <!-- profilesテーブルのデータ表示をここから -->
            <table class="table table-striped">
                <tr>
                    <th>ID</th><th>NAME</th><th>COMMENT</th>
                </tr>
                @foreach($datas as $row)
                <tr>
                    <td>{{$row->id}}</td><td>{{$row->name}}</td><td>{{$row->comment}}</td>
                </tr>
                @endforeach
            </table>
            <!-- profilesテーブルのデータ表示をここまで -->
        </div>
    </div>
    <form action="./index" method="POST">
        @csrf
        <input type="submit" name="submit" value="入力画面へ" />
    </form>
</div>
@endsection
