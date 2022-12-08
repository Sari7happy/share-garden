@extends('layouts.app')
@extends('footer.users_footer')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">マイページ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- ようこそ画面 -->
                    <p>ようこそ、{{Auth::user()->name}}さん！</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
