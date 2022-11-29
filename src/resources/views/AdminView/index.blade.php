@extends('layouts.admin_app',['authgroup'=>'admin'])
@extends('footer.admin_footer')
@section('content')
<h1>予約日程投稿</h1>
<h2>投稿フォーム</h2>


<!-- 外枠 -->
<div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px; background-color: gray; color: #ffffff;">

    <form method="post" action="{{ route('reservation.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-7">
            <label class="form-label">人数</label>
            <input type="text" name="reservation_number_of_people" class="form-control">
        </div>
        <div class="col-md-7">
            <label class="form-label">日付</label>
            <input type="date" name="reservation_date" class="form-control">
        </div>


        <div class="input-group mb-3">
            <input type="file" class="form-control" name="image_path" aria-label="Upload">
            <button type="submit" class="btn btn-primary btn-sm">投稿する</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
        </div>
    </form>　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　

    @endsection