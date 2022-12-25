<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ asset('css/user/slide.css') }}" rel="stylesheet">
</head>

<body>
    <h1 class="main_title">SHARE GARDENいつもと違う贅沢を。</h1>
    <div class="container">

        <div class="carousel slide" id="sample" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#sample" data-slide-to="0" class="active"></li>
                <li data-target="#sample" data-slide-to="1"></li>
                <li data-target="#sample" data-slide-to="2"></li>
                <li data-target="#sample" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner carousel-fade">
                <div class="carousel-item active">
                    <a href="#">
                        <img src="{{ \Storage::url('img/bbq8.jpg') }}" class="d-block w-100 h-50">
                        <div class="carousel-caption d-none d-sm-block">
                            <h4>人気レジャーNo.1 BBQ！</h4>
                            <p class="sub-paragraph">今注目のレジャー</p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <img src="{{ \Storage::url('img/camp2.jpg') }}" class="d-block w-100　h-50">
                    <div class="carousel-caption d-none d-sm-block">
                        <h4>ちょっと変わった１日を過ごそう</h4>
                        <p class="sub-paragraph">大人もこどもにも大人気！</p>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="{{ \Storage::url('img/pool2.jpg') }}" class="d-block w-100　h-50">
                    <div class="carousel-caption d-none d-sm-block">
                        <h4>子どもの夏休みにぴったり！</h4>
                        <p class="sub-paragraph">夏を思いっきり楽しもう！</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="#">
                    <img src="{{ \Storage::url('img/DIY2.jpg') }}" class="d-block w-100　h-50">
                        <div class="carousel-caption d-none d-sm-block">
                            <h4>おうちでやってみよう</h4>
                            <p class="sub-paragraph">DIYを紹介します</p>
                        </div>
                    </a>
                </div>
            </div>
            <a href="#sample" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">前の画像へ</span>
            </a>
            <a href="#sample" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">次の画像へ</span>
            </a>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
　　　