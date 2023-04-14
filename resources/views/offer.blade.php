<head>
    @include('partials.head')
</head>
<body>
@include('partials.nav')
<div class="offer-container">
    <div class="offer-block">
        <a href="{{route('index.offers',['litery-blokowe'])}}">
            <img src="{{asset('img/FOTO_Oferta/LiteryBlokowe.jpeg')}}" alt="offer" class="offer-img">
            <p class="offer-text">Litery Blokowe</p>
{{--            <p class="offer-text-bottom">description of the offer</p>--}}
        </a>
    </div>
    <div class="offer-block">
        <a href="{{route('index.offers',['kasetony'])}}">
            <img src="{{asset('img/FOTO_Oferta/kaseton.jpeg')}}" alt="offer" class="offer-img">
            <p class="offer-text">kasetony</p>
{{--            <p class="offer-text-bottom">description of the offer</p>--}}
        </a>
    </div>
    <div class="offer-block">
        <a href="{{route('index.offers',['szyldy'])}}">
            <img src="{{asset('img/FOTO_Oferta/szyld.jpg')}}" alt="offer" class="offer-img">
            <p class="offer-text">szyldy</p>
{{--            <p class="offer-text-bottom">description of the offer</p>--}}
        </a>
    </div>
    <div class="offer-block">
        <a href="{{route('index.offers',['logo-3d'])}}">
            <img src="{{asset('img/FOTO_Oferta/logo_3d.jpeg')}}" alt="offer" class="offer-img">
            <p class="offer-text">logo 3d</p>
{{--            <p class="offer-text-bottom">description of the offer</p>--}}
        </a>
    </div>
    <div class="offer-block">
        <a href="{{route('index.offers',['neony'])}}">
            <img src="{{asset('img/FOTO_Oferta/neon.jpeg')}}" alt="offer" class="offer-img">
            <p class="offer-text">neony</p>
{{--            <p class="offer-text-bottom">description of the offer</p>--}}
        </a>
    </div>
    <div class="offer-block">
        <a href="{{route('index.offers',['przeszklenia-witryny'])}}">
            <img src="{{asset('img/FOTO_Oferta/przeszklenia.jpeg')}}" alt="offer" class="offer-img">
            <p class="offer-text">przeszklenia / witryny</p>
{{--            <p class="offer-text-bottom">description of the offer</p>--}}
        </a>
    </div>
    <div class="offer-block">
        <a href="{{route('index.offers',['system-komunikacji-kierunkowej'])}}">
            <img src="{{asset('img/FOTO_Oferta/system_komunikacji_wizualnej.jpeg')}}" alt="offer" class="offer-img">
            <p class="offer-text">system komunikacji kierunkowej</p>
{{--            <p class="offer-text-bottom">description of the offer</p>--}}
        </a>
    </div>
    <div class="offer-block">
        <a href="{{route('index.offers',['znakowanie-odziezy'])}}">
            <img src="{{asset('img/FOTO_Oferta/znakowanie_odziezy.jpg')}}" alt="offer" class="offer-img">
            <p class="offer-text">znakowanie odzieży</p>
{{--            <p class="offer-text-bottom">description of the offer</p>--}}
        </a>
    </div>

</div>


</body>
<footer>
    @include('partials.footer')
</footer>


