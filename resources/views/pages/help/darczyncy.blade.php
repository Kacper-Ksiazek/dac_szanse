@extends('layouts.app') @section('title')
<title>Darczyńcy</title>
@endsection @section('content')
<div class="w-100">
    <help-logo content="Darczyńcy" selected="darczyncy"></help-logo>
    <!--  -->
    <!--  -->
    <!--  -->
    <section class="ds-help-single-help-form hrefs">
        <!--  -->
        <href-gallery
            prefix="/images/help/darczyncy"
            :content="[
            {image:'1.png',description:'ABS Bank Spółdzielczy, który działa w Andrychowie, a jego historia sięga aż wieku XIX. Oferuje usługi zarówno klientom indywidualnym, jak i Firmom oraz Instytutom', link:'https://www.absbank.pl/bankowosc_elektroniczna,s85.html'},
            
            {image:'2.png',description:'Żywy portret papieża Polaka wykonany z drzew, krzewów i kwiatów, znajdujący się w pobliskim Inwałdzie. To park krajobrazowy połączony z kawiarnią i ogrodem.', link:'http://www.ogrodjp2.pl/'},

            {image:'3.png',description:'bielenda- Firma od ponad 20 lat produkuje najwyższej jakości naturalne kosmetyki do pielęgnacji twarzy i ciała. W ofercie Firmy znajduje się ponad 400 najwyższej jakości produktów.', link:'https://bielenda.pl/'},

            {image:'4.png',description:'Zakłady Przemysłu Cukierniczego SKAWA SA oferują Klientom wysokiej jakości wyroby cukiernicze, wytwarzane z najlepszych naturalnych, niemodyfikowanych genetycznie, surowców.', link:'www.skawa.com.pl/pl'},

            {image:'5.png',description:'Profesjonalne Centrum Sportu, łączące w jednym miejscu wiele atrakcji: siłownię, fitness, squash, saunę... Znajduje się w pobliskim Barwałdzie Górnym.', link:''},

            {image:'6.png',description:'Kompleks pięciu Parków tematycznych znajdujących się w pobliskim Inwałdzie. Pięć Parków Rozrywki to gwarancja dobrej zabawy na długi czas!', link:'http://www.inwaldpark.pl/'},

            {image:'7.png',description:'Kawiarnia i cukiernia mieszcząca się w samym centrum Wadowic. Zaprasza na pyszne śniadania, przekąski i słodycze.', link:'https://galicjanka.com/'},

            {image:'8.png',description:'Firma jest zdecydowanym liderem na rynku soków, nektarów i napojów. czołowym producentem na Węgrzech, w Rumunii, Bułgarii i na Litwie oraz wiodącym producentem produktów instant.', link:'https://maspex.com/'},

            {image:'9.png',description:'Producent naturalnej wody mineralnej', link:'https://muszynianka.pl/'},

            {image:'10.png',description:'ParkHotel Łysoń to nowoczesny 4-gwiazdkowy hotel położony w miejscowości Inwald, tuż przy głównej trasie Kraków - Wadowice - Bielsko-Biała', link:'https://www.parkhotellyson.pl/'},

            {image:'11.png',description:'Lokal serwujący kebab w centrum Wadowic.', link:''},
            
            {image:'12.png',description:'W Polsce grupę Bahlsen reprezentuje Firma Bahlsen Polska znajdująca się w Ska winie. Misja Firmy brzmi Osładzamy życie - to bowiem producent ciastek i ciasteczek.', link:'https://www.thebahlsenfamily.com/pl/'},

            {image:'13.png',description:'Naturalne piękno Beskidu dookoła luksusowego czterogwiazdkowego HOTELaSPA w górach. To idealne miejsce, jeśli poszukujesz sposobu na aktywny wypoczynek. Cały Kompleks usytuowany jest w malowniczej okolicy.', link:'https://www.czarnygron.pl/'},
            
            {image:'14.png',description:'Paese tworzy najlepsze produkty spełniające oczekiwania najbardziej wymagających konsumentek. Misją Firmy jest tworzenie i udoskonalanie wyjątkowych produktów oraz usług, dzięki którym kobiety mogą czuć się piękniejsze i z większą pewnością eksponować swoje wewnętrzne wartości.', link:'https://paese.pl/'},

            {image:'15.png',description:'Restauracja znajdująca się w Wadowicach, która specjalizuje się w daniach, których głównym składnikiem jest doskonała wołowina.', link:''},

            {image:'16.png',description: 'Firma ANDROIMPEX to producent domieszek do betonu i zapraw cementowych. Firma uhonorowana została przez czasopismo Puls Biznesu znakiem Gazeli Biznesu.', link:'https://androimpex.pl/'},

            {image:'17.png',description:'Firma ASTOR wspiera podnoszenie efektywności procesów w przemyśle, produkcji oraz infrastrukturze. Dostarcza nowoczesne technologie w obszarach automatyki przemysłowej i robotyki, systemów IT oraz wiedzę biznesową i techniczną w formie szkoleń oraz konsultacji.', link:'https://www.astor.com.pl/'},
            
            {image:'18.png',description:'Kwiaciarnia Bajka umiejscowiona w Brzeźnicy. Zaopatruje klientów w piękne dekoracje, świeże kwiaty i doskonałe kompozycje.', link:''},
            
            {image:'19.png',description:'Uczniowski Klub Sportowy działający w Andrychowie. Założycielem oraz Prezesem klubu jest Gerard Linder - zdobywca tytułu Mistrza świata w kick-boxingu.', link:'http://www.black-dragon.pl/'},
            
            {image:'20.png',description:'Hurtownia materiałów chemiczno-budowlanych znajdująca się w Wadowicach.', link:''},

            {image:'21.png',description:'Cukiernia Leń- Wadowicki sklep cukierniczy, który specjalizuje się przede wszystkim w wyrobie słynnych kremówek.', link:''},

            {image:'22.png',description:'Park Jurajski położony w pobliskim Inwałdzie gwarantuje świetną zabawę i naukę dla całej rodziny. To połączenie Parku Rozrywki z wiedzą zdobywaną poprzez zabawę. ', link:'http://www.dinolandia.pl/'},

            {image:'23.png',description:'Sieć sklepów oraz hurtowni farb i tynków. Firma posiada szeroki wybór farb o ścian i wnętrz, farb zewnętrznych, gipsów i wszelkich materiałów niezbędnych podczas prac remontowo-budowlanych. Firma zaopatruje klientów w najnowsze i najbardziej wydajne produkty z branży budowlanej i malarskiej.', link:'http://farby-wadowice.pl/'},

            {image:'24.png',description:'Zakład fotograficzny znajdujący się w Wadowicach. Świadczy profesjonalne usługi w zakresie fotografowania oraz videofilmowania. Firma wykonuje również różnorodne fotogadżety.', link:'http://www.fotowadowice.pl/Aktualnosci-2.html'},

            {image:'25.png',description:'WADOWICE Hotel znajdujący się przy głównej trasie prowadzącej do papieskiego miasta.', link:''},

            {image:'26.png',description:'Salon piękności prowadzony w Kleczy Dolnej przez Wiolettę Szczyptę. Dzięki ciepłej i dyskretnej atmosferze można w nim znaleźć odrobinę czasu na relaks i przyjemność dla siebie.', link:'https://www.facebook.com/IndywidualiSPA.fanpage/info'},

            {image:'27.png',description:'Ujęcia wód mineralnych znajdują się w gminie Krynica-Zdrój i Muszyna na terenie Popradzkiego Parku Krajobrazowego.', link:'https://inex.pl/'},

            {image:'28.png',description:'Kwiaciarnia Bogdana Grochala działająca w Wadowicach przy ulicy Legionów.', link:'http://www.mklik.pl/Home/Entry?Guid=f3957af5-7641-4565-a1bc-80eccd8e40ec'},

            {image:'29.png',description:'Firma Madix istnieje na rynku od 1989 roku. Jest ekspertem w wyposażaniu łazienek.', link:'https://madix.com.pl/'},
            
            {image:'30.png',description:'Początki Klubu KARATE sięgają 1995 roku. Jego założycielem jest sensei Sebastian Wacławski, wielokrotny Mistrz Polski w różnych stylach KARATE.', link:'https://www.mawashi.pl/'},

            {image:'31.png',description:'Miejsce zaciszne, gdzie natura wychodzi gościom naprzeciwko. Tutaj można odwiedzić wiele gatunków zwierząt - te bardziej i mniej egzotyczne, a nawet je nakarmić.', link:'http://www.agrokucyk.pl/'},

            {image:'32.png',description:'Restauracja jest jedną z atrakcji Ośrodka Rekreacyjno-Wypoczynkowego w Osieku obok Oświęcimia. Kuchnia specjalizuje się w potrawach tradycyjnych, w nowoczesnym wydaniu.', link:'https://czasnamolo.pl/'},
            
            {image:'33.png',description:'Pracownia Fryzjerska znajdująca się w Wadowicach. Oferuje profesjonalne usługi o szerokim zakresie.', link:''},

            {image:'34.png',description:'Restauracja znajdująca się w samym centrum Wadowic. Oferuje bogate menu, pyszne dania obiadowe, pizze i wiele, wiele innych.', link:'http://www.ogrodowa-wadowice.pl/Restauracja-Ogrodowa-Wadowice-2.html'},

            {image:'35.png',description:'Firma powstała w 1986 roku. Od tego czasu działa produkując i świadcząc usługi dla przemysłu meblarskiego.', link:'http://panelstyl.pl/'},

            {image:'36.png',description:'Centrum fitness prowadzące zajęcia w Wadowicach, Bysinie i Zawadce. Oferuje zajęcia ZUMBA fitness, ZUMBA kids oraz TANIEC.', link:'http://www.studiopasoa.pl/'},

            {image:'37.png',description:'Gabinet podologiczno-kosmetyczny znajdujący się w Wadowicach. To specjalistyczny gabinet świadczący najwyższej jakości usługi w dziedzinie podologii, kosmetyki pielęgnacyjnej oraz leczniczej.', link:'https://podo-estetik.pl/'},

            {image:'38.png',description:'Powszechna Spółdzielnia Spożywców działająca w Wadowicach od 1945 roku. Obsługuje sklepy detaliczne, magazyn hurtowy oraz restauracje.', link:'https://wadowice.spolem.org.pl/'},

            {image:'39.png',description:'Usytuowany w spokojnym otoczeniu wiejskiej przyrody kompleks hotelowy Radocza Park*** Active & Spa został przygotowany dla osób poszukujących noclegu lub miejsca na dłuższy wypoczynek w komfortowych warunkach.', link:'https://www.radoczapark.pl/'},
            
            {image:'40.png',description:'Evelyn Saferna- artystka-fotograf działająca w pobliskich Kętach. Profesjonalistka w każdym calu, idealnie potrafi uchwycić piękno danej chwili.', link:'https://www.facebook.com/Saferna.Photography/'},

            {image:'41.png',description:'Salon kosmetyczny działający w Wadowicach. Świadczy profesjonalne usługi w szerokim zakresie działalności.', link:'https://www.facebook.com/uslugiMira'},

            {image:'42.png',description:'Cukiernia tworząca dekoracje i upominki z piernika.', link:'http://slodyczamalowane.blogspot.com/'},

            {image:'43.png',description:'Firma działająca w pobliskich Kętach, wykonuje różnorodne opracowania graficzne, między innymi ulotki, plakaty, banery.', link:'https://oferia.pl/wykonawca/spektator/576819'},

            {image:'44.png',description:'Oferta Firmy skierowana jest przede wszystkim do osób uprawiających sporty wytrzymałościowe. Firma oferuje produkty uznanych marek oraz ciągle poszerza własny asortyment.', link:'https://www.sportfuel.pl/'},

            {image:'45.png',description:'Fryzjerstwo u Rudej to salon fryzjerski działający w Wadowicach. Dla właścicieli fryzjerstwo to forma nowoczesnej sztuki funkcjonalnej – połączenie profesjonalizmu, pasji, fantazji techniki.', link:'https://www.facebook.com/Fryzjerstwo-u-Rudej-893702577332928/'},
            {image:'46.png',description:'', link:''},
            {image:'47.png',description:'', link:'http://dorianfitnessclub.pl/'},
            {image:'48.png',description:'', link:'http://www.onlyyou-studio.pl/'},
            
            
        ]"
        ></href-gallery>
    </section>
</div>
@endsection
