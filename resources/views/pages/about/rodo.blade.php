@extends('layouts.app') @section('title')
<title>Dać Szansę | O nas</title>
@endsection @section('content')
<div class="w-100">
    <path-bar path='[{"header":"O nas","href":"/o-nas"},  {"header":"Polityka RODO","href":"#"}]'></path-bar>
    <about-logo></about-logo>
    <section class="ds-about-wrapper">
        <div class="text align-items-start">
            <h1 class="align-self-center mb-5">Polityka RODO</h1>
            {{--  --}}
            <div class="item">
                <h2><strong>Szanowna Pani/Szanowny Panie,</strong></h2>
                <br />
                <p>
                    Przetwarzamy Twoje dane osobowe, które nam przekazałeś. Dlatego, zgodnie z przepisami prawa mamy obowiązek poinformować Cię o najważniejszych kwestiach
                    dotyczących tego, dlaczego potrzebujemy Twoich danych osobowych, co z nimi robimy i jakie są Twoje uprawnienia.
                </p>
            </div>
            {{--  --}}
            <div class="item">
                <h2><strong>1. Administrator.</strong></h2>
                <p>
                    Administratorem Twoich danych osobowych jest Stowarzyszenie Rodziców i Opiekunów Dzieci Niepełnosprawnych „Dać Szansę” w Wadowicach, os. XX – lecia 1, 34-100
                    Wadowice, e-mail: stowarzyszenie@dacszanse.pl, strona www.dacszanse.pl, tel: 33 873 18 87
                </p>
            </div>
            {{--  --}}
            {{--  --}}
            <div class="item">
                <h2><strong>2. Cel przetwarzania i kategoria odbiorców.</strong></h2>
                <p>
                    Przetwarzamy Twoje dane osobowe zawarte w deklaracji członkowskiej, w celu funkcjonowania Stowarzyszenia, obliczania wysokości składek członkowskich,
                    organizacji Walnych Zebrań Członków Stowarzyszenia, innych wydarzeń organizowanych przez stowarzyszenie zgodnie z działaniami statutowymi.
                </p>
                <p>
                    Przetwarzamy Twoje dane osobowe zawarte w formularzach zgłoszeniowych do projektu w celu realizacji umów dotacyjnych w zakresie realizacji zajęć dla dzieci
                    niepełnosprawnych/podopiecznych stowarzyszenia „Dać Szansę”. W związku z przetwarzaniem Twoich danych w ramach powyższego celu możemy przekazywać Twoje dane
                    osobowe do podmiotów, które udzielają nam wsparcia w postaci grantów.
                </p>
            </div>
            {{--  --}}
            {{--  --}}
            <div class="item">
                <h2><strong>3. Podstawa przetwarzania i skutki niepodania danych.</strong></h2>
                <p>
                    Podstawą przetwarzania danych osobowych, które nam podałeś, jest zgoda na przetwarzanie danych osobowych. Zgodę tę możesz w każdej chwili cofnąć, przesyłając
                    swoje pisemne oświadczenie na adres podany wyżej. Cofniecie przez Ciebie zgody nie będzie miało jednak wpływu na zgodność z prawem przetwarzania przez nas
                    Twoich danych do tego momentu.
                </p>
            </div>
            {{--  --}}
            {{--  --}}
            <div class="item">
                <h2><strong>4. Okres przetwarzania.</strong></h2>
                <p>
                    Zamierzamy przetwarzać Twoje dane dopóki pozostajesz Członkiem naszego Stowarzyszenia. Okres przetwarzania danych osobowych dotyczy również rozliczeń dotacji
                    wynikających z postanowień umów zawartych ze Stowarzyszeniem „Dać Szansę”.
                </p>
            </div>
            {{--  --}}
            {{--  --}}
            <div class="item">
                <h2><strong>5. Twoje uprawnienia.</strong></h2>
                <p>Masz prawo do żądania dostępu do Twoich danych osobowych, które nam przekazałeś, do żądania ich sprostowania, usunięcia lub ograniczenia przetwarzania.</p>
                <p>
                    Jeżeli Twoim zdaniem nieprawidłowo przetwarzamy Twoje dane osobowe możesz wnieść skargę do Prezesa Urzędu Ochrony Danych Osobowych lub dochodzić swoich praw
                    przed sądem.
                </p>
                <strong
                    >Jeżeli masz dodatkowe pytania dotyczące tego w jaki sposób przetwarzamy Twoje dane i tego, jak je chronimy, możesz nas zawsze o to zapytać (dane kontaktowe
                    wskazaliśmy wyżej).</strong
                >
            </div>
        </div>
    </section>
</div>
@endsection
