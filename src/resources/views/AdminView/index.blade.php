@extends('layouts.admin_app',['authgroup'=>'admin'])
@extends('footer.admin_footer')
@section('content')
<h1>予約日程投稿</h1>
<h2>投稿フォーム</h2>

<!-- 外枠 -->
<div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px; background-color: lightgray; color: black;">

    <h1>詳細一覧</h1>　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
    <table class="table table-striped">
        <thead>
            <tr>
                <th>場所</th>
                <th>ジャンル</th>
                <th>人数</th>
                <th>日付</th>
                <th>詳細</th>
                <th>編集</th>
                <th>削除</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($register_data as $post_data)
            <tr>
                <td>{{ $post_data->prefecture_name}}</td>
                <td>{{$post_data->genle_name }}</td>
                <td>{{ $post_data->reservation_number_of_people }}</td>
                <td>{{ $post_data->reservation_date }}</td>


                <td><a href="{{ route('reservation.show', $post_data->id) }}" class="btn btn-warning">詳細</a></td>
                <td><a href="{{route('reservation.edit',$post_data->id)}}" 　class="btn btn-info">編集する</a></td>
                　
                <td>
                    <form action="{{ route('reservation.destroy', $post_data) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">削除</button>
                    </form>　
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>



    @endsection