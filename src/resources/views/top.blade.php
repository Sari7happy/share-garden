@extends('layouts.app')
@extends('footer.users_footer')

<link href="{{ asset('css/user/top.css') }}" rel="stylesheet">
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>share garden</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="antialiased">

    @section('content')
    @include('userView.slide')
    <div class="contents">
        <h1 class='subcontents'>Service</h1>　　
    </div>
    <section>
        <h1 class="top_title">SHARE GARDENってなに？</h1>
        <p class="explain">おうち時間が増えている中でストレスを感じている方や<br />
            仕事や育児を頑張っている方へ向けた<br />
            <b>"明日もまた頑張ろう"</b>と思える<br />
            特別な体験を提供するシェアサービスとなっています。
        </p>
    </section>
    <div class="contents">
    <h1 class='subcontents'>Sence</h1>　
    </div>
    @include('UserView.category')
    <section>
        <h1 class="sub_title">こんなお悩みSHARE GARDENなら解決できます！<br />是非ご予約を！</h1>
        <div class="account-container">
            <div class="user">
                <div class="user-frame">
                    <div class="card border-light mb-" style="max-width:300px">
                        <div class="card-header"><b>ユーザー新規会員登録</b></div>
                        <div class="card-body">
                            <h5 class="card-title">初めての方はこちらから</h5>
                            @if (Route::has('register'))

                            <a href="{{ route('register') }}" class="btn btn-primary btn-lg" style="margin:20px;">新規会員登録</a>
                            @endif
                            <h5 class="card-title">登録済みの方はこちらから</h5>
                            @if (Route::has('login'))

                            <a href="{{ route('login') }}" class="btn btn-secondary btn-lg" style="margin:20px;">ユーザーログイン</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="admin">
                <div class="admin-frame">
                    <div class="card border-light mb-" style="max-width:300px">
                        <div class="card-header"><b>管理者新規登録</b></div>
                        <div class="card-body">
                            <h5 class="card-title">初めての方はこちらから</h5>
                            @if (Route::has('admin-register'))

                            <a href="{{ route('admin-register') }}" class="btn btn-warning btn-lg" style="margin:20px;">管理者新規登録</a>
                            @endif
                            <h5 class="card-title">登録済みの方はこちらから</h5>
                            @if (Route::has('admin-login'))

                            <a href="{{ route('admin-login') }}" class="btn btn-secondary btn-lg" style="margin:20px;">管理者ログイン</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    　　@endsection
</body>

</html>