
@extends('layouts.app')
@extends('footer.users_footer')
@section('content')
<div class="container m-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">マイページ登録内容</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">
                            ユーザー名
                        </label>
                        <div>
                            <input class="form-control" value="{{ $user->name }}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">
                            メールアドレス
                        </label>
                        <div>
                            <input class="form-control" value="{{ $user->email }}" readonly><br/>
                        </div>
                    </div>
                    <a href="{{ action([App\Http\Controllers\UserController::class,'edit']) }}"><button class="btn btn-info">マイページ登録内容の編集</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection