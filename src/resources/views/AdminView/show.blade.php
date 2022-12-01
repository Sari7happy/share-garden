@extends('layouts.admin_app',['authgroup'=>'admin'])
@extends('footer.admin_footer')

@section('content')
<h1>予約日程詳細</h1>
<h2>詳細確認フォーム</h2>

<!-- 外枠 -->
<div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px; background-color: lightgray; color: black;">

    <div class="col-md-7">
        <form method="post" action="{{ route('reservation.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="col-md-7">
                <label class="form-label">場所</label>
                <p class="text" value>{{ $register_data->prefecture_name  }}</p>
            </div>
    </div>
    <br />
    <div class="col-md-7">
        <label class="form-label">ジャンル</label>
        <p class="text" value>{{ $register_data->genle_name  }}</p>
    </div>
    <br />
    <div class="col-md-7">
        <label class="form-label">人数</label>
        <p class="text" value>{{ $register_data->reservation_number_of_people }}</p>
    </div>
    <br />
    <div class="col-md-7">
        <label class="form-label">日付</label>
        <p class="text" value>{{ $register_data->reservation_date}}</p>
    </div>

    <br />
    画像<br />
    <img src="{{asset('storage/'.$register_data->image_path)}}" alt="">
    <div class="input-group mb-3">
        <a href="{{ route('reservation.edit', $register_data->id) }}" class="btn btn-info">編集する</a>
        <div class="col-8">
            
        </div>

        </form>　　　
        <form action="{{ route('reservation.destroy', $register_data) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">削除</button>
        </form>　
    　　　　　　　　　　　　　　　　　　　　　　　
        @endsection