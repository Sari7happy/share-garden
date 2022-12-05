@extends('layouts.app')
@extends('footer.users_footer')

@section('content')
<h1>詳細ページ</h1>
<div class="container">
    <div class="row justify-content-start">
    </div>

    <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px; background-color: lightgray; color: black;width:800px;">
        <div class="col-md-3">
            <img src="{{asset('storage/'.$register_data->image_path)}}" class="img-thumbnail" style=" border:1px solid #333333;width:100px;" />

            <div class="col-md-5">
                <label class="form-label">場所</label>
                <input type="text" value="{{ $register_data->prefecture_name  }}" name="prefecture_name" class="form-control" readonly>
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
        <div class="input-group mb-3">
            <a href="{{ route('booking.create', $register_data->id) }}" class="btn btn-info">予約へ進む</a>
</div>
@endsection