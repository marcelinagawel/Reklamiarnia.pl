<nav class="menu navbar navbar-expand-lg fill navbar navbar-light bg-dark nav-color">
    <a class="navbar-brand" href="/">
        <a class="logo nav-link @if (Request::path() == '/') active @endif" aria-current="page" href="/">
            <img src="{{asset('img/logo.png')}}" alt="logo" id="logo">
        </a>
    </a>
    <br>
    <div class="container-fluid container-fluid-navbar">
            <button class="ml-auto navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse open-navbar" id="navbarTogglerDemo03">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if (Request::path() == '/') active @endif" aria-current="page" href="/">O nas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Request::path() == '/oferta') active @endif" href="/oferta">Oferta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Request::path() == '/nasze-realizacje') active @endif" href="/nasze-realizacje">Nasze realizacje</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Request::path() == '/zaufali-nam') active @endif" href="/zaufali-nam">Zaufali nam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Request::path() == '/kontakt') active @endif" href="/kontakt">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="lolo"></div>

<div class="spacer2"></div>
