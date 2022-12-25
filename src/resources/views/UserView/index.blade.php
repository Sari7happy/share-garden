@extends('layouts.app')
@extends('footer.users_footer')
@section('content')
<link href="{{ asset('css/user/index.css') }}" rel="stylesheet">
<h1>レジャー一覧</h1>

<div class="card-wrapper">
    <div class="card-container">

        @foreach ($register_data as $post_data)
        <div class="card">
            <img src="{{ Storage::url($post_data->image_path) }}" style="width:100px;" />
            <div class="card-body">
                <div class="">場所:{{$post_data->prefecture_name}}</div>
                <div class="">ジャンル:{{$post_data->genle_name }}</div>
                <br />
                <a href="{{ route('booking.show', [$post_data->id]) }}" class="btn btn-outline-primary" style="display:block;width:100px;">詳細</a>

            </div>

        </div>

        @endforeach

        <div>
            {{ $register_data->appends(request()->input())->links() }}
        </div>
    </div>
</div>


@endsection