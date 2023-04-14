<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\WebsiteFeatures\GalleryCreator;


class OurProjectsController extends Controller
{
    public function index()
    {
        return view('our-projects');
    }

    public function readMore($projectName)
    {
        $gallery = new GalleryCreator();
        $projects = [
            'litery-blokowe' => [
                'title' => 'Litery blokowe',
                'description' => 'Litery blokowe podświetlane są wyjątkowo trwałe i odporne na uszkodzenia, co pozwala na długotrwałe użytkowanie. Litery te są odpowiednie dla różnych firm i branż, a zamówienie ich jest prostą i wygodną procedurą. Dostępne są w różnych rozmiarach, kolorach i kształtach, co umożliwia dopasowanie ich do indywidualnych potrzeb i preferencji klienta. ' ,
                'images' => $gallery->renderGallery('litery_blokowe')
            ],
            'kasetony' => [
                'title' => 'Kasetony',
                'description' => 'Kasetony reklamowe mogą być wykonane z różnych materiałów, takich jak plexi, aluminium, drewno czy tworzywa sztuczne, co pozwala na dopasowanie ich do indywidualnych potrzeb i preferencji klientów. Dzięki temu, kasetony reklamowe są idealnym rozwiązaniem dla firm z różnych branż i działalności. Dodatkowo, kasetony reklamowe można umieszczać na fasadach budynków, elewacjach, ścianach czy słupach, co pozwala na dotarcie do dużej ilości osób i zwiększenie zasięgu reklamy.' ,
                'images' => $gallery->renderGallery('kaseton')
            ],
            'szyldy' => [
                'title' => 'Szyldy',
                'description' => 'Szyldy można umieszczać na budynkach, słupach, w witrynach sklepowych czy na stoiskach targowych, co pozwala na dotarcie do dużej ilości osób i zwiększenie zasięgu reklamy. Dopasowanie szyldu do indywidualnych potrzeb i wymagań firmy pozwala na zwiększenie widoczności i rozpoznawalności marki, co przekłada się na większą liczbę potencjalnych klientów i zwiększenie szans na sprzedaż produktów lub usług.',
                'images' => $gallery->renderGallery('szyldy')
            ],
            'logotypy_3d' => [
                'title' => 'Logotypy 3D',
                'description' => 'Nasz zespół projektantów i specjalistów od reklamy wizualnej pracuje z klientami, aby stworzyć logo 3D, które idealnie pasuje do ich marki. Logotypy 3D są skutecznym narzędziem marketingowym, pomagającym firmom wyróżnić się na tle konkurencji i mogą być wykorzystywane na różnych nośnikach, od stron internetowych po ekrany reklamowe, co daje naszym klientom nieograniczone możliwości prezentacji swojej marki.',
//                'images' => $gallery->renderGallery('szyldy')
            ],
            'neon_led' => [
                'title' => 'Neon LED',
                'description' => 'Neony LED mogą być umieszczone na fasadach budynków, wystawach sklepowych, stoiskach targowych i reklamach ulicznych. Są one trwałe, odporne na uszkodzenia i mają niski pobór energii, co oznacza niższe koszty eksploatacji niż w przypadku tradycyjnych neonów. Skontaktuj się z nami, a nasi eksperci pomogą Ci w doborze odpowiedniego neonu LED i zaprojektowaniu go zgodnie z Twoimi potrzebami. ',
                'images' => $gallery->renderGallery('neony')
            ],
            'pylon_reklamowy' => [
                'title' => 'Pylon reklamowy',
                'description' => 'Pylony są często wyposażone w oświetlenie, co zwiększa ich widoczność w nocy. Są umieszczane w strategicznych miejscach, takich jak centra handlowe, parkingi czy drogi szybkiego ruchu i zawierają informacje takie jak nazwy firm, kierunkowskazy czy ceny produktów. W branży reklamowej są jednym z najskuteczniejszych sposobów na zwiększenie widoczności marki i przyciągnięcie uwagi klientów.',
//                'images' => $gallery->renderGallery('szyldy')
            ],
            'foliowanie_przeszklen' => [
                'title' => 'Foliowanie przeszkleń i witryny',
                'description' => 'Foliowanie przeszkleń i witryn jest popularne w branży reklamowej ze względu na skuteczność i niski koszt. Folia dekoracyjna pozwala na stworzenie oryginalnego wzoru lub napisu, który przyciąga uwagę klientów i zwiększa rozpoznawalność marki. Jest łatwa do zastosowania i usunięcia, co umożliwia szybkie i skuteczne zmiany wizualne. Jeśli chcesz wypromować swoją markę, skontaktuj się z nami, a chętnie pomożemy Ci w wyborze odpowiedniej folii dekoracyjnej i zaprojektujemy dla Ciebie oryginalny wzór lub napis.',
                'images' => $gallery->renderGallery('zdobienie_przeszklen')
            ],
            'foliowanie_architektura' => [
                'title' => 'Foliowanie przeszkleń w architekturze',
                'description' => 'Foliowanie przeszkleń może służyć do tworzenia ozdobnych wzorów, a także do zwiększenia prywatności bez zaciemniania pomieszczenia. Jest to również ekonomiczne rozwiązanie, które pozwala na osiągnięcie wymarzonej aranżacji bez przeprowadzania kosztownych remontów. Foliowanie przeszkleń to coraz popularniejsze rozwiązanie, stosowane zarówno w nowoczesnych, jak i klasycznych budynkach. Jeśli szukasz pomysłu na oryginalną dekorację, warto rozważyć foliowanie przeszkleń.',
                'images' => $gallery->renderGallery('szyldy')
            ],
            'system_komunikacji_kierunkowej' => [
                'title' => 'System komunikacji kierunkowej',
                'description' => 'Ważne jest, aby system komunikacji kierunkowej był czytelny, przejrzysty, spójny oraz uwzględniał różne grupy odbiorców, np. osoby z niepełnosprawnościami czy osoby nieznające języka, w którym są podane informacje. Współczesne rozwiązania, takie jak wyświetlacze cyfrowe czy systemy nawigacji, umożliwiają jeszcze łatwiejsze i bardziej intuicyjne poruszanie się po obiekcie. Przy projektowaniu systemu komunikacji kierunkowej należy również zwrócić uwagę na estetykę i wizerunek obiektu.',
                'images' => $gallery->renderGallery('system_komunikacji_kierunkowej')
            ],
            'znakowanie_odziezy' => [
                'title' => 'Znakowanie odzieży',
                'description' => 'Reklamowe znakowanie odzieży pozwala na wyróżnienie się na tle konkurencji, zwiększenie rozpoznawalności marki, zwiększenie lojalności klientów i budowanie wizerunku firmy. Ubrania z logo firmy stanowią nie tylko formę reklamy, ale również niepowtarzalny element stroju pracowników, szczególnie podczas eventów, konferencji, targów czy innych spotkań branżowych.',
                'images' => $gallery->renderGallery('znakowanie_odziezy')
            ],
        ];

        if (!isset($projects[$projectName])) {
           return redirect(route('index.project'));
        }

        return view('our-projects-detail', ['project' => $projects[$projectName]]);
    }

}
