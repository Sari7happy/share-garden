@extends('layouts.admin_app',['authgroup'=>'admin'])
@extends('footer.admin_footer')

@section('content')
<h1>予約日程詳細</h1>
<h2>詳細確認フォーム</h2>

<!-- 外枠 -->
<div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px; background-color: lightgray; color: black;">

    <div class="col-md-3">
        <form method="post" action="{{ route('reservation.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="col-md-3">
                <label class="form-label">場所</label>
                <input type="text" value="{{ $register_data->prefecture_name  }}" name="prefecture_name" class="form-control"readonly>
            </div>
    </div>
    <br />
    <div class="col-md-3">
        <label class="form-label">ジャンル</label>
        <input type="text" value="{{ $register_data->genle_name  }}" name="genle_name" class="form-control" readonly>
    </div>
    <br />
    <div class="col-md-3">
        <label class="form-label">人数</label>
        <input type="text" value="{{ $register_data->reservation_number_of_people }}" name="reservation_number_of_people" class="form-control" readonly>
    </div>
    <br />
    <div class="col-md-3">
        <label class="form-label">日付</label>
        <input type="text" value="{{ $register_data->reservation_date}}" name="reservation_date" class="form-control" readonly>
    </div>

    <br />
    画像<br />
    <img src="{{asset('storage/'.$register_data->image_path)}}"  style="width:100px;" />
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