@extends('layouts.app')

@extends('footer.users_footer')

@section('content')

<link href="{{ asset('css/user/show.css') }}" rel="stylesheet">

<div class="container m-6">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" >詳細確認ページ</div>

                <div class="card-body">
                    <div class="col-mb-9">
                        <img src="{{asset('storage/'.$register_data->image_path)}}" class="rounded"/>
                        <div class="form-group">
                            <label for="name">場所</label>
                            <div>
                                <input type="text" value="{{ $register_data->prefecture_name  }}" name="prefecture_name" class="form-control" readonly>
                                

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">ジャンル</label>
                        <div>
                            <input type="text" value="{{ $register_data->genle_name  }}" name="genle_name" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">人数</label>
                        <div>
                            <input type="text" value="{{ $register_data->reservation_number_of_people }}" name="reservation_number_of_people" class="form-control"  readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">日付</label>
                        <div>

                            <input type="text" value="{{ $register_data->reservation_date}}" name="reservation_date" class="form-control"  readonly>
                        </div>
                    </div>

                    <div class="input-group md-3">
                        <a href="{{ route('booking.create', $register_data->id) }}" class="btn btn-outline-info" style="padding:5px;margin:10px;">予約へ進む</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
