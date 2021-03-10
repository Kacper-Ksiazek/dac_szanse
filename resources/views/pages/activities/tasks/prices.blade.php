@extends('layouts.app') @section('title')
<title>Cennik</title>
@endsection
@section('content')
<div class="w-100">
    <section class="ds-prices">
       <h1 class='about-intro'>Cennik</h1>
       <table>
           <thead>
               <th>Rodzaj usługi</th>
               <th class='small'>Czas</th>
               <th class='small'>Cena</th>
           </thead>
           {{--  --}}
           <tr class='seperator'>
               <td>
                   <strong>BADANIE GOTOWOŚCI SZKOLNEJ</strong>
                   <br>
                    Konsultacja z diagnozą i wydaniem opinii gotowości szkolnej.
               </td>
               <td class='small'>180 min</td>
               <td class='small'>350 zł</td>
            </tr>
            {{--  --}}
            <tr class='seperator'>
                <td><strong>USŁUGI LOGOPEDYCZNE</strong></td>
                <td class='small'>-</td>
                <td class='small'>-</td>
            </tr>
             {{--  --}}
             <tr>
                <td>Konsultacja logopedyczna</td>
                <td class='small'>60 min</td>
                <td class='small'>100 zł</td>
            </tr>
            {{--  --}}
            <tr>
                <td>Konsultacja logopedyczna z wydaniem opinii</td>
                <td class='small'>60 min</td>
                <td class='small'>150 zł</td>
            </tr>
             {{--  --}}
            <tr>
                <td>Diagnoza logopedyczna z wydaniem opinii (na podstawie narzędzia do badania rozwoju kompetencji językowej i komunikacyjnej).</td>
                <td class='small'>120 min</td>
                <td class='small'>250 zł</td>
            </tr>
             {{--  --}}
            <tr>
                <td>Badania rozwoju kompetencji językowej i komunikacyjnej przy użyciu takich narzędzi jak: Test Rozwoju Językowego TRJ, KOLD Karty Oceny Logopedycznej Dziecka, KORP Karty Oceny Rozwoju Psychoruchowego, KOSF Karty Oceny Słuchu Fonemowego, AFA-Skala (bez sporządzenia opinii).</td>
                <td class='small'>120 min</td>
                <td class='small'>200 zł</td>
            </tr>
             {{--  --}}
            <tr>
                <td>Terapia logopedyczna (indywidualna).</td>
                <td class='small'>60 min</td>
                <td class='small'>80 zł</td>
            </tr>
             {{--  --}}
            <tr class='seperator'>
                <td><strong>USŁUGI PSYCHOLOGICZNE</strong></td>
                <td class='small'>-</td>
                <td class='small'>-</td>
            </tr>
             {{--  --}}
            <tr>
                <td>Konsultacja psychologiczna (1 spotkanie).</td>
                <td class='small'>60 min</td>
                <td class='small'>100 zł</td>
            </tr>
             {{--  --}}
            <tr>
                <td>Konsultacja psychologiczna z wydaniem opinii.</td>
                <td class='small'>60 min</td>
                <td class='small'>150 zł</td>
            </tr>
             {{--  --}}
            <tr>
                <td>Badanie poziomu kompetencji poznawczych dzieci i młodzieży przy użyciu takich narzędzi jak: Skala Inteligencji Wechslera (WISC-R), Neutralny Kulturowo Test Inteligencji Cattella (CFT 1-R), Międzynarodowa Wykonaniowa Skala Leitera P-93, Skale Inteligencji i Rozwoju IDS z wydaniem opinii.</td>
                <td class='small'>do 120 min</td>
                <td class='small'>od 150-250 zł</td>
            </tr>
            <tr>
                <td>Badanie poziomu rozwoju psychomotorycznego dzieci w wieku od 2-go m.ż. do 3 lat przy użyciu Dziecięcej Skali Rozwojowej (DSR) z wydaniem opinii.</td>
                <td class='small'>do 120 min</td>
                <td class='small'>od 150-250 zł</td>
            </tr>
            <tr>
                <td>Terapia psychologiczna (indywidualna).</td>
                <td class='small'>60 min</td>
                <td class='small'>80 zł</td>
            </tr>
            <tr class='seperator'>
                <td><strong>USŁUGI PEDAGOGICZNE</strong></td>
                <td class='small'>-</td>
                <td class='small'>-</td>
            </tr>
            <tr>
                <td>Konsultacja pedagogiczna (1 spotkanie).</td>
                <td class='small'>60min</td>
                <td class='small'>100 zł</td>
            </tr>
            <tr>
                <td>Konsultacja pedagogiczna z wydaniem opinii.</td>
                <td class='small'>60 min</td>
                <td class='small'>150 zł</td>
            </tr>
            <tr>
                <td>Terapia pedagogiczna (indywidualna).</td>
                <td class='small'>60 min</td>
                <td class='small'>80 zł</td>
            </tr>
            <tr class='seperator'>
                <td><strong>TERAPIA RODZIN</strong></td>
                <td class='small'>-</td>
                <td class='small'>-</td>
            </tr>
             <tr>
                <td>Konsultacja psychologiczna (1 spotkanie).</td>
                <td class='small'>60 min</td>
                <td class='small'>100 zł</td>
            </tr>
             <tr>
                <td>Terapia rodzinna</td>
                <td class='small'>60 min</td>
                <td class='small'>80 zł</td>
            </tr>
             <tr>
                <td>Opinia psychologiczna, o której mowa w art. 191; 304 (5) Ustawy z dnia 26 czerwca 1974 r. Kodeks Pracy (Dz. U. z 2018 r,. poz 917 ze zmian.)</td>
                <td class='small'>60 min</td>
                <td class='small'>200 zł</td>
            </tr>
             <tr class='seperator'>
                <td>
                    <strong>DIAGNOZOWANIE DYSORTOGRAFII, DYSGRAFII, DYSLEKSJI, DYSKALKULII</strong>
                    <br>
                    Konsultacja z diagnozą i wydaniem opinii
                </td>
                <td class='small'>-</td>
                <td class='small'>300 zł</td>
            </tr>
             <tr class='seperator'>
                <td><strong>USŁUGI REHABILITACYJNE</strong></td>
                <td class='small'>-</td>
                <td class='small'>-</td>
            </tr>
             <tr>
                <td>Konsultacja rehabilitacyjna</td>
                <td class='small'>60 min</td>
                <td class='small'>100 zł</td>
            </tr>
             <tr>
                <td>Konsultacja rehabilitacyjna z wydaniem opinii.</td>
                <td class='small'>60 min</td>
                <td class='small'>150 zł</td>
            </tr>
            <tr>
                <td>Rehabilitacja ruchowa</td>
                <td class='small'>60 min</td>
                <td class='small'>80 zł</td>
            </tr>
            <tr>
                <td>Gimnastyka korekcyjna</td>
                <td class='small'>60 min</td>
                <td class='small'>80 min</td>
            </tr>
            <tr class='seperator'>
                <td><strong>Integracja sensoryczna</strong></td>
                <td class='small'>-</td>
                <td class='small'>-</td>
            </tr>
            <tr>
                <td>Integracja Sensoryczna- terapia</td>
                <td class='small'>60 min</td>
                <td class='small'>80 zł</td>
            </tr>
            <tr>
                <td>Konsultacja SI (1 spotkanie)</td>
                <td class='small'>60 min</td>
                <td class='small'>100 zł</td>
            </tr>
            <tr>
                <td>Konsultacja SI z wydaniem opinii.</td>
                <td class='small'>60 min</td>
                <td class='small'>150 zł</td>
            </tr>
            <tr>
                <td>Diagnoza integracji sensorycznej</td>
                <td class='small'>120 min</td>
                <td class='small'>250 zł</td>
            </tr>
            <tr class='seperator'>
                <td><strong>Zajęcia grupowe (grupa licząca min. 3 dzieci)</strong></td>
                <td class='small'>--</td>
                <td class='small'>--</td>
            </tr>
            <tr>
                <td>Zajęcia pedagogiczne</td>
                <td class='small'>60 min</td>
                <td class='small'>60 zł</td>
            </tr>
            <tr>
                <td>Zajęcia z psychologiem</td>
                <td class='small'>60 min</td>
                <td class='small'>60 zł</td>
            </tr>
            <tr>
                <td>Trening umiejętności społecznych</td>
                <td class='small'>60 min</td>
                <td class='small'>60 zł</td>
            </tr>
       </table>
    </section>
</div>
@endsection
