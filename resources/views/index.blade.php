<head>
    @include('partials.head')
</head>
<body>
@include('partials.background')
@include('partials.nav')

<div class="lolo">
<div class="about-us-container">
    <div class="block1">
        <div class="block-content">
            <h1 class="about-us-title">
                O nas
            </h1>
            <p class="about-us-text">
                Oferujemy kompleksową obsługę w zakresie reklamy nieprzerwanie od 1998 roku. Działając z pasją jesteśmy twórcami niepowtarzalnych, wyjątkowych i skutecznych rozwiązań w dziedzinie kreowania pozytywnego wizerunku.             </p>
        </div>
    </div>
    <div class="block2 column">
                <figure>
                    <img class="about-us-img" src="{{asset('img/FOTO_startowa/IMG_1692.jpg')}}" alt="about-us-1">
                </figure>
    </div>
</div>
<div class="about-us-container">
    <div class="block3 column">
        <figure>
            <img class="about-us-img" src="{{asset('img/FOTO_startowa/IMG_6576.jpg')}}" alt="about-us-1">
        </figure>
    </div>
    <div class="block4">
    <p class="about-us-text">
        Nie boimy się nowych wyzwań i nie ogranicza nas forma, kształt, materiał czy zastosowanie. Współpracujemy zarówno z małymi firmami, jak i dużymi korporacjami, a do każdego zlecenia podchodzimy z zaangażowaniem, otwartą głową i kreatywnością.    </p>
    </div>
</div>
</div>

<p class="info-collapse-text">
    W trosce o jakość druku oraz czas wykonania usługi, prosimy o zapoznania się z poniższymi zasadami:
</p>
<div class="info-collapse">
    <p>
        <button class="btn btn-primary info-collapse-button" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
            Zawartość zapytania ofertowego
        </button>
    </p>
    <div class="collapse" id="collapseExample1">
        <div class="card card-body">
            <ul>
                <li>Opis przedmiotu zamówienia ( litery, baner, kaseton itd.) </li>
                <li>Projekt graficzny lub materiały do jego przygotowania</li>
                <li>Zdjęcie miejsca, w którym ma się pojawić reklama, w celu oszacowani kosztów montażu oraz przygotowania wizualizacji</li>
                <li>Adres oraz nr telefonu do osoby odpowiedzialnej za zlecenie</li>
            </ul>
        </div>
    </div>

    <p>
        <button class="btn btn-primary info-collapse-button" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
            Pomiary
        </button>
    </p>
    <div class="collapse" id="collapseExample2">
        <div class="card card-body">
            <ul>
                <li>Dokonanie pomiaru przez naszego pracownika jest płatne 100 zł za godzinę pracy + koszt dojazdu. Jeżeli zdecydują się Państwo na realizację zlecenie nie będą Państwo obciążani kosztami pomiaru. </li>
            </ul>
        </div>
    </div>

    <p>
        <button class="btn btn-primary info-collapse-button" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
            Projekt
        </button>
    </p>
    <div class="collapse" id="collapseExample3">
        <div class="card card-body">
            <ul>
                <li>Koszt wykonania projektu – 100,00 zł netto /godzinę pracy grafika </li>
                <li>Proste projekty graficzne (realizowane do 30 minut) są wykonywane bezpłatnie</li>
            </ul>
        </div>
    </div>
    <p>
        <button class="btn btn-primary info-collapse-button" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
            Zlecenie
        </button>
    </p>
    <div class="collapse" id="collapseExample4">
        <div class="card card-body">
            <ul>
                <li>Przed przystąpieniem do realizacji wymagana jest zaliczka w wysokości 50% zamówienia </li>
                <li>Termin realizacji jest ustalany indywidualnie i jest zależny od przedmiotu zlecenia</li>
            </ul>
        </div>
    </div>

    <p>
        <button class="btn btn-primary info-collapse-button" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample5">
            WYTYCZNE ODNOŚNIE PRZYGOTOWANIA PLIKÓW
        </button>
    </p>
    <div class="collapse" id="collapseExample5">
        <div class="card card-body">
            <ul>
                <li>Prosimy o wysyłanie plików w formacie pdf w krzywych </li>
                <li>Pliki otwarte w psd lub cdr prosimy wysyłać wraz z plikiem poglądowym w jpg lub png</li>
                <li>Pliki do druku poligrafiki prosimy przygotować zgodnie z obowiązującymi standardami:</li>
                <ul>
                    <li>Pliki powinny zawierać spad (minimum 2mm)</li>
                    <li>Teksty zmienione na krzywe</li>
                    <li>Osadzone zdjęcie powinny mieć rozdzielczość 300 pdi w skali 1:1</li>
                    <li>Prosimy nie używać funkcji nadrukowania / overprint ( oferujemy jedynie druk cyfrowy)</li>
                </ul>
            </ul>
        </div>
    </div>
</div>

</body>
<footer>
    @include('partials.footer')
</footer>


