@extends('layouts.admin_app',['authgroup'=>'admin'])
@extends('footer.admin_footer')
@section('content')


<!-- 外枠 -->
<div class="container m-6 ">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">予約日程投稿フォーム</div>
                <div class="card-body">
                    <form method="post" action="{{ route('reservation.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">場所</label>
                            <input type="text" name="prefecture_name" class="form-control" placeholder='都道府県を入力してください' required>
                        </div>
                        <!-- 県名 -->
                        <div class="form-group">
                            <label class="form-label">ジャンル</label>
                            <input type="text" name="genle_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">人数</label>
                            <input type="text" name="reservation_number_of_people" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">日付</label>
                            <input type="date" name="reservation_date" class="form-control">
                        </div>
                        画像<br />

                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="image_path" aria-label="Upload">
                            </div>
                            <input type="submit" value="投稿する" class="btn btn-primary">
                    
                    </form>　
                </div>
            </div>
        </div>
    </div>
</div>

@endsection