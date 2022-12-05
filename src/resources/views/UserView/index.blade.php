@extends('layouts.app')
@extends('footer.users_footer')
@section('content')
<h1>レジャー一覧</h1>

<div class="card-wrapper" style="display:flex;justify-content:center;">
    <div class="card-container" style="display:flex;gap:40px;width:1000px;flex-wrap:wrap;">

        @foreach ($register_data as $post_data)
        <div class="card" style="width: 200px;display:flex;align-items: center;">
            <img src="{{ Storage::url($post_data->image_path) }}" style="width:100px;" />
            <div class="card-body">
                <div class="">場所:{{ $post_data->prefecture_name}}</div>
                <div class="">ジャンル:{{$post_data->genle_name }}</div>
                <br />

                <a href="{{ route('booking.show', $post_data->id) }}" class="btn btn-primary" style="display:block;width:100px;">詳細</a>


            </div>

        </div>

        @endforeach
    </div>
</div>


@endsection
