<link href="{{ asset('css/user/category.css') }}" rel="stylesheet">
<section class="frame">
    <h1　class="category-title">タイプから探す</h1>

    <div class='outframe'>
        @foreach($place_data as $prefecture)

        <div class='category'>

            <h3>場所：{{$prefecture['prefecture_name']}}</h3>
        
            <h3>{{$prefecture['count_register']}}件</h3>

        </div>
        @endforeach

    </div>
    <div class='inframe'>
        @foreach($genle_data as $genle)
        <div class='genle-category'>

            <h3>ジャンル:{{$genle['genle_name']}}</h3>
            <h3>{{$genle['count_registergenle']}}件</h3>
        </div>
        @endforeach

    </div>

</section>