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
            <label class="form-label">場所</label>
            <input type="text" name="prefecture_name" class="form-control" placeholder='都道府県を入力してください' required>
        </div>
        <!-- 県名 -->
        <br />
        <br />
        <div class="col-md-7">
            <label class="form-label">ジャンル</label>
            <input type="text" name="genle_name" class="form-control" required>
        </div>
        <br />

        <div class="col-md-7">
            <label class="form-label">人数</label>
            <input type="text" name="reservation_number_of_people" class="form-control">
        </div>
        <br />
        <div class="col-md-7">
            <label class="form-label">日付</label>
            <input type="date" name="reservation_date" class="form-control">
        </div>
        <br />
        画像<br />

        <div class="input-group mb-3">
            <input type="file" class="form-control" name="image_path" aria-label="Upload">
            <button type="submit" class="btn btn-primary btn-sm">投稿する</button>
        </div>
    </form>　
    　　　　<h1>詳細一覧</h1>　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
    <table class="table table-striped">
        <thead>
            <tr>
                <th>場所</th>
                <th>ジャンル</th>
                <th>人数</th>
                <th>日付</th>
                <th>詳細</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($register_data as $post_data)
            <tr>
                <td>{{ $post_data->prefecture_name}}</td>
                <td>{{$post_data->genle_name }}</td>
                <td>{{ $post_data->reservation_number_of_people }}</td>
                <td>{{ $post_data->reservation_date }}</td>


                <td><a href="{{ route('reservation.show', $post_data->id) }}">詳細</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('reservation.index') }}"><strong> &lt予約日程投稿へ</strong></a>

    @endsection