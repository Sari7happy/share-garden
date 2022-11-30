@extends('layouts.admin_app',['authgroup'=>'admin'])
@extends('footer.admin_footer')

@section('content')
<h1>予約日程編集</h1>
<h2>編集フォーム</h2>

<!-- 外枠 -->
<div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px; background-color: gray; color: #ffffff;">

    <form method="post" action="{{ route('reservation.update',$register_data) }}" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="col-md-7">
            <label class="form-label">場所</label>
            <input type="text" value="{{ $register_data->prefecture_name  }}" name="prefecture_name" class="form-control">
        </div>
        <br />
        <div class="col-md-7">
            <label class="form-label">ジャンル</label>
            <input type="text" value="{{ $register_data->genle_name  }}" name="genle_name" class="form-control">
        </div>
        <br />
        <div class="col-md-7">
            <label class="form-label">人数</label>
            <input type="text" value="{{ $register_data->reservation_number_of_people }}" name="reservation_number_of_people" class="form-control">
        </div>
        <br />
        <div class="col-md-7">
            <label class="form-label">日付</label>
            <input type="text" value="{{ $register_data->reservation_date}}" name="reservation_date" class="form-control">
        </div>

        <br />
        画像<br />
        <div class="input-group mb-3">
            <img src="{{ Storage::url($register_data->image_path) }}" style="width:100px;" />
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" name="image_path" aria-label="Upload">
        </div>
        <input type="submit" value="更新する" class="btn btn-success">
    </form>　
    　<br/>　
    <a href="{{ route('reservation.index') }}" class="btn btn-bark"> &lt予約一覧へ戻る</a>　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
    @endsection