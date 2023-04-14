<head>
    @include('partials.head')
</head>
<body>
@include('partials.nav')
<div class="detail-baner">
    <div class="detail-baner-content">
        <h1 class="detail-baner-title">
            {{$project['title']}}
        </h1>
        <p class="detail-baner-text">
            {{$project['description']}}
        </p>
    </div>
</div>


<div class="detail-container">
    @foreach($project['images'] as $image)
        <div class="detail-block">
            <a href="{{asset($image)}}" data-lightbox="image-1" >
                <img src="{{asset($image)}}" alt="offer" class="offer-img" >
            </a>
        </div>
    @endforeach
</div>




</body>
<footer>
    @include('partials.footer')
</footer>


