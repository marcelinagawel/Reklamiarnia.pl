<head>
    @include('partials.head')
</head>
<body>
@include('partials.nav')
<div class="detail-baner">
    <div class="detail-baner-content">
        <h1 class="detail-baner-title">
            Nasze realizacje
        </h1>
        <p class="detail-baner-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
        </p>
    </div>
</div>

<div class="spacer2"></div>


<div class="our-projects-container">
    <div class="our-projects-block1 column">
        <a href="{{ route('index.projects',['litery-blokowe']) }}">
        <figure>
            <img class="about-us-img" src="{{asset('img/litery_blokowe/IMG_0879.jpg')}}" alt="about-us-1">
        </figure>
        </a>
    </div>
    <div class="our-projects-block2">
        <div class="block-content">
            <h1 class="about-us-title">
                Litery blokowe
            </h1>
            <p class="about-us-text">
                Litery blokowe podświetlane to nowoczesne i skuteczne rozwiązanie reklamowe, które przyciąga uwagę klientów dzięki trójwymiarowemu kształtowi oraz podświetleniu LED.             </p>
          <p class="about-us-text">
              Ich głównym zadaniem jest nadanie wnętrzom nowoczesnego charakteru i pozwolenie na skuteczną promocję marki i produktów.             </p>
        </div>
        <a href="{{ route('index.projects',['litery-blokowe']) }}" class="our-projects-button">
            <div class="our-projects-button-container">
                Czytaj dalej
            </div>

        </a>
    </div>
</div>


<div class="our-projects-container">
    <div class="our-projects-block1 column">
        <a href="{{ route('index.projects',['kasetony']) }}">
            <figure>
                <img class="about-us-img" src="{{asset('img/kaseton/10_GCS.jpg')}}" alt="about-us-1">
            </figure>
        </a>
    </div>
    <div class="our-projects-block2">
        <div class="block-content">
            <h1 class="about-us-title">
                Kasetony reklamowe
            </h1>
            <p class="about-us-text">
                Kasetony reklamowe to jedna z najskuteczniejszych form reklamy zewnętrznej. Ich trójwymiarowy kształt i podświetlenie wyróżniają się na tle innych form reklamowych i przyciągają uwagę potencjalnych klientów, dzięki czemu są idealnym narzędziem do prezentowania logotypów, nazw firm, produktów i usług. Są one bardzo widoczne, łatwe do odczytania i pozwalają wyróżnić się na tle konkurencji.
            </p>
        </div>
        <a href="{{ route('index.projects',['kasetony']) }}" class="our-projects-button">
            <div class="our-projects-button-container">
                Czytaj dalej
            </div>

        </a>
    </div>
</div>


<div class="our-projects-container">
    <div class="our-projects-block1 column">
        <a href="{{ route('index.projects',['szyldy']) }}">
            <figure>
                <img class="about-us-img" src="{{asset('img/szyldy/20220916_110304.jpg')}}" alt="about-us-1">
            </figure>
        </a>
    </div>
    <div class="our-projects-block2">
        <div class="block-content">
            <h1 class="about-us-title">
                Szyldy
            </h1>
            <p class="about-us-text">
                Szyldy to kluczowy element identyfikacji wizualnej firmy, który pozwala potencjalnym klientom na zidentyfikowanie Twojej firmy na tle innych. Mogą być wykonane z różnych materiałów i podświetlane dla lepszej widoczności. Szyldy stanowią skuteczne narzędzie marketingowe, które pozwala na zwiększenie świadomości marki i dotarcie do większej liczby potencjalnych klientów.
            </p>
        </div>
        <a href="{{ route('index.projects',['szyldy']) }}" class="our-projects-button">
            <div class="our-projects-button-container">
                Czytaj dalej
            </div>

        </a>
    </div>
</div>


<div class="our-projects-container">
    <div class="our-projects-block1 column">
        <a href="{{ route('index.projects',['logotypy_3d']) }}">
            <figure>
                <img class="about-us-img" src="{{asset('img/FOTO_Oferta/Logo_3D.jpeg')}}" alt="about-us-1">
            </figure>
        </a>
    </div>
    <div class="our-projects-block2">
        <div class="block-content">
            <h1 class="about-us-title">
                Logotypy 3D - NIE MA ZDJEC
            </h1>
            <p class="about-us-text">
                Logotypy 3D są nowoczesnym i atrakcyjnym rozwiązaniem, wyróżniającym się na tle jednowymiarowych logo. Dzięki technologii trójwymiarowej, logo nabiera głębi i wrażenia przestrzenności, co przyciąga uwagę klientów. Nasza firma oferuje najwyższą jakość produktów, korzystając z najnowszych technologii i narzędzi.
            </p>
        </div>
        <a href="{{ route('index.projects',['logotypy_3d']) }}" class="our-projects-button">
            <div class="our-projects-button-container">
                Czytaj dalej
            </div>

        </a>
    </div>
</div>


<div class="our-projects-container">
    <div class="our-projects-block1 column">
        <a href="{{ route('index.projects',['neon_led']) }}">
            <figure>
                <img class="about-us-img" src="{{asset('img/')}}" alt="about-us-1">
            </figure>
        </a>
    </div>
    <div class="our-projects-block2">
        <div class="block-content">
            <h1 class="about-us-title">
                Neon LED - NIE MA ZDJEC
            </h1>
            <p class="about-us-text">
                Neony LED to nowoczesna technologia pozwalająca na uzyskanie efektu świetlnego przypominającego tradycyjne neonowe reklamy, ale zdecydowanie bardziej energooszczędnie i trwale. W naszej firmie produkujemy neony LED w różnorodnych kształtach i kolorach, dostosowanych do potrzeb klientów, idealne do budowania rozpoznawalności marki.
            </p>
        </div>
        <a href="{{ route('index.projects',['neon_led']) }}" class="our-projects-button">
            <div class="our-projects-button-container">
                Czytaj dalej
            </div>

        </a>
    </div>
</div>


<div class="our-projects-container">
    <div class="our-projects-block1 column">
        <a href="{{ route('index.projects',['pylon_reklamowy']) }}">
            <figure>
                <img class="about-us-img" src="{{asset('img/')}}" alt="about-us-1">
            </figure>
        </a>
    </div>
    <div class="our-projects-block2">
        <div class="block-content">
            <h1 class="about-us-title">
                Pylon reklamowy - NIE MA ZDJEC
            </h1>
            <p class="about-us-text">
                Pylon reklamowy to wolnostojący słup z reklamą lub informacją, który przyciąga uwagę klientów. Może mieć różne rozmiary i kształty oraz być wykonany z różnych materiałów, takich jak aluminium, stal nierdzewna, drewno czy beton.
            </p>
        </div>
        <a href="{{ route('index.projects',['pylon_reklamowy']) }}" class="our-projects-button">
            <div class="our-projects-button-container">
                Czytaj dalej
            </div>

        </a>
    </div>
</div>


<div class="our-projects-container">
    <div class="our-projects-block1 column">
        <a href="{{ route('index.projects',['foliowanie_przeszklen']) }}">
            <figure>
                <img class="about-us-img" src="{{asset('img/zdobienie_przeszklen/IMG_6691.jpeg')}}" alt="about-us-1">
            </figure>
        </a>
    </div>
    <div class="our-projects-block2">
        <div class="block-content">
            <h1 class="about-us-title">
                Foliowanie przeszkleń i witryn
            </h1>
            <p class="about-us-text">
                Foliowanie przeszkleń i witryn to skuteczna forma reklamy, która pozwala wyróżnić markę i przyciągnąć uwagę klientów. Folia dekoracyjna, elastyczny materiał, może być łatwo dopasowany do kształtu powierzchni, co umożliwia jej wykorzystanie w różnych celach.
            </p>
        </div>
        <a href="{{ route('index.projects',['foliowanie_przeszklen']) }}" class="our-projects-button">
            <div class="our-projects-button-container">
                Czytaj dalej
            </div>

        </a>
    </div>
</div>



<div class="our-projects-container">
    <div class="our-projects-block1 column">
        <a href="{{ route('index.projects',['foliowanie_architektura']) }}">
            <figure>
                <img class="about-us-img" src="{{asset('img/')}}" alt="about-us-1">
            </figure>
        </a>
    </div>
    <div class="our-projects-block2">
        <div class="block-content">
            <h1 class="about-us-title">
                Foliowanie przeszkleń w architekturze - NIE MA ZDJEC
            </h1>
            <p class="about-us-text">
                Foliowanie przeszkleń to popularna technika dekoracyjna w architekturze, która zapewnia prywatność, ochronę przed promieniowaniem UV oraz oryginalny styl pomieszczeń. Folia jest dostępna w różnych kolorach, fakturach i strukturach, co pozwala na dopasowanie do każdego wnętrza.
            </p>
        </div>
        <a href="{{ route('index.projects',['foliowanie_architektura']) }}" class="our-projects-button">
            <div class="our-projects-button-container">
                Czytaj dalej
            </div>

        </a>
    </div>
</div>



<div class="our-projects-container">
    <div class="our-projects-block1 column">
        <a href="{{ route('index.projects',['system_komunikacji_kierunkowej']) }}">
            <figure>
                <img class="about-us-img" src="{{asset('img/system_komunikacji_kierunkowej/IMG_2581.jpg')}}" alt="about-us-1">
            </figure>
        </a>
    </div>
    <div class="our-projects-block2">
        <div class="block-content">
            <h1 class="about-us-title">
                System komunikacji kierunkowej
            </h1>
            <p class="about-us-text">
                System komunikacji kierunkowej to zbiór elementów, takich jak tablice informacyjne, znaki kierunkowe, oznaczenia pięter czy numeracje pomieszczeń, które ułatwiają poruszanie się osobom w obiekcie i umożliwiają im szybkie znalezienie potrzebnego miejsca.
            </p>
        </div>
        <a href="{{ route('index.projects',['system_komunikacji_kierunkowej']) }}" class="our-projects-button">
            <div class="our-projects-button-container">
                Czytaj dalej
            </div>

        </a>
    </div>
</div>




<div class="our-projects-container">
    <div class="our-projects-block1 column">
        <a href="{{ route('index.projects',['znakowanie_odziezy']) }}">
            <figure>
                <img class="about-us-img" src="{{asset('img/znakowanie_odziezy/IMG_6091.jpeg')}}" alt="about-us-1">
            </figure>
        </a>
    </div>
    <div class="our-projects-block2">
        <div class="block-content">
            <h1 class="about-us-title">
                Znakowanie odzieży
            </h1>
            <p class="about-us-text">
                Znakowanie odzieży reklamowej polega na nanoszeniu na ubrania logotypów, nazw firmy lub innych informacji, które pomogą zidentyfikować markę. Metody takie jak haft, sitodruk, transfer termiczny lub druk cyfrowy mogą być wykorzystane do tego celu.
            </p>
        </div>
        <a href="{{ route('index.projects',['znakowanie_odziezy']) }}" class="our-projects-button">
            <div class="our-projects-button-container">
                Czytaj dalej
            </div>

        </a>
    </div>
</div>

<div class="spacer2"></div>
</body>
<footer>
    @include('partials.footer')
</footer>


