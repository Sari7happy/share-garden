@extends('layouts.admin_app',['authgroup'=>'admin'])
@extends('footer.admin_footer')

@section('content')

<div class="container m-6 ">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">詳細確認フォーム</div>
                <!-- 外枠 -->
                <br />
                <div class="form-group">
                    <form method="post" action="{{ route('reservation.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">場所</label>
                            <input type="text" value="{{ $register_data->prefecture_name  }}" name="prefecture_name" class="form-control" readonly>
                        </div>
                </div>
                <br />
                <div class="form-group">
                    <label for="name">ジャンル</label>
                    <input type="text" value="{{ $register_data->genle_name  }}" name="genle_name" class="form-control" readonly>
                </div>
                <br />
                <div class="form-group">
                    <label for="name">人数</label>
                    <input type="text" value="{{ $register_data->reservation_number_of_people }}" name="reservation_number_of_people" class="form-control" readonly>
                </div>
                <br />
                <div class="form-group">
                    <label for="name">日付</label>
                    <input type="text" value="{{ $register_data->reservation_date}}" name="reservation_date" class="form-control" readonly>
                </div>
                <br />
                画像<br />
                <img src="{{asset('storage/'.$register_data->image_path)}}" style="width:100px;" />
                <br />
                <div class="input-group mb-3">

                    <a href="{{ route('reservation.edit', $register_data->id) }}" class="btn btn-outline-info">編集する</a>

                </div>
                <br />
                </form>　　　
                <form action="{{ route('reservation.destroy', $register_data) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">削除</button>
                    <br />
                </form>　
            </div>　　　　　
        </div>　
    </div>　
</div>　
</div>　　　　　　　　　　　　　
@endsection