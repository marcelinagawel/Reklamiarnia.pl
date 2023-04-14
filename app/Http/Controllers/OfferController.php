<?php

namespace App\Http\Controllers;
use App\WebsiteFeatures\GalleryCreator;
use Illuminate\Http\Request;
class OfferController extends Controller
{
    public function index()
    {
        return view('offer');
    }

    public function readMore($offerName)
    {
        $gallery = new GalleryCreator();
        $offers = [
            'litery-blokowe' => [
                'title' => 'Litery blokowe',
                'description' => 'Litery blokowe podświetlane to nowoczesne i skuteczne rozwiązanie reklamowe, które przyciąga uwagę klientów dzięki trójwymiarowemu kształtowi oraz podświetleniu LED. ' ,
                'images' => $gallery->renderGallery('litery_blokowe')
            ],
            'kasetony' => [
                'title' => 'Kasetony',
                'description' => 'Kasetony reklamowe to jedna z najskuteczniejszych form reklamy zewnętrznej. Ich trójwymiarowy kształt i podświetlenie wyróżniają się na tle innych form reklamowych i przyciągają uwagę potencjalnych klientów, dzięki czemu są idealnym narzędziem do prezentowania logotypów, nazw firm, produktów i usług.' ,
                'images' => $gallery->renderGallery('kaseton')
            ],
            'szyldy' => [
                'title' => 'Szyldy',
                'description' => 'Szyldy to kluczowy element identyfikacji wizualnej firmy, który pozwala potencjalnym klientom na zidentyfikowanie Twojej firmy na tle innych. Mogą być wykonane z różnych materiałów i podświetlane dla lepszej widoczności. Szyldy stanowią skuteczne narzędzie marketingowe, które pozwala na zwiększenie świadomości marki i dotarcie do większej liczby potencjalnych klientów. ' ,
                'images' => $gallery->renderGallery('szyldy')
            ],
            'logo-3d' => [
                'title' => 'Logo 3D',
                'description' => 'test test test' ,
//                'images' => $gallery->renderGallery('kaseton')
            ],
            'neony' => [
                'title' => 'Neony',
                'description' => 'Neony LED to nowoczesna technologia pozwalająca na uzyskanie efektu świetlnego przypominającego tradycyjne neonowe reklamy, ale zdecydowanie bardziej energooszczędnie i trwale. W naszej firmie produkujemy neony LED w różnorodnych kształtach i kolorach, dostosowanych do potrzeb klientów, idealne do budowania rozpoznawalności marki. ' ,
                'images' => $gallery->renderGallery('neony')
            ],
            'system-komunikacji-kierunkowej' => [
                'title' => 'System komunikacji kierunkowej',
                'description' => 'System komunikacji kierunkowej to zbiór elementów, takich jak tablice informacyjne, znaki kierunkowe, oznaczenia pięter czy numeracje pomieszczeń, które ułatwiają poruszanie się osobom w obiekcie i umożliwiają im szybkie znalezienie potrzebnego miejsca. ' ,
                'images' => $gallery->renderGallery('system_komunikacji_kierunkowej')
            ],
            'znakowanie-odziezy' => [
                'title' => 'Znakowanie odzieży',
                'description' => 'Znakowanie odzieży reklamowej polega na nanoszeniu na ubrania logotypów, nazw firmy lub innych informacji, które pomogą zidentyfikować markę. Metody takie jak haft, sitodruk, transfer termiczny lub druk cyfrowy mogą być wykorzystane do tego celu. ' ,
                'images' => $gallery->renderGallery('znakowanie_odziezy')
            ],
            'przeszklenia-witryny' => [
                'title' => 'Przeszklenia/witryny',
                'description' => 'Foliowanie przeszkleń i witryn to skuteczna forma reklamy, która pozwala wyróżnić markę i przyciągnąć uwagę klientów. Folia dekoracyjna, elastyczny materiał, może być łatwo dopasowany do kształtu powierzchni, co umożliwia jej wykorzystanie w różnych celach. ' ,
                'images' => $gallery->renderGallery('zdobienie_przeszklen')
            ],
        ];

        if (!isset($offers[$offerName])) {
            return redirect(route('index.project'));
        }

        return view('offer-detail', ['project' => $offers[$offerName]]);
    }
}
