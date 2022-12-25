@extends('layouts.admin_app',['authgroup'=>'admin'])
@extends('footer.admin_footer')
@section('content')
<div class="container m-6">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- フラッシュメッセージ -->
            @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">マイページ登録内容</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">
                            ユーザー名
                        </label>
                        <div>
                            <input class="form-control" value="{{$user->name }}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">
                            メールアドレス
                        </label>
                        <div>
                            <input class="form-control" value="{{ $user->email }}" readonly><br />
                        </div>
                    </div>
                    <a href="{{ action([App\Http\Controllers\AdminController::class,'edit']) }}"><button class="btn btn-outline-info">マイページ登録内容の編集</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection