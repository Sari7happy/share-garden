@extends('layouts.app')
@extends('footer.users_footer')
@section('content')

<div class="container m-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">マイページ登録内容の変更</div>
                <div class="card-body">
                    <form method="POST" action="{{ action([App\Http\Controllers\UserController::class,'update'])}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">
                                ユーザー名
                            </label>
                            <div>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                メールアドレス
                            </label>
                            <div>
                                <input type="text" name="email" class="form-control" value="{{ $user->email }}" required>
                            </div>
                            <br />
                            <button type="submit" class="btn btn-info">変更</button>
                            {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@endsection

