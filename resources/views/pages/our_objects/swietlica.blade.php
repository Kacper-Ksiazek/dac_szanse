@extends('layouts.app')
@section('title')
    <title>Świetlica Terapeutyczno-Integracyjna  "Szansa"</title>
@endsection
@section('content')
<div class="w-100">
    <oo-logo></oo-logo>

    {{-- TEXT --}}
    <section class="ds-s-content">
        <h1>Świetlica Terapeutyczno-Integracyjna  "Szansa"</h1> 
        <br>
        <span class="ds-s-small">
            SIEDZIBA ŚWIETLICY: os. XX - lecia 19/1, 34-100 Wadowice
        </span>
        <div class="ds-s-text-wrapper">
            <h3>
                Świetlica Terapeutyczno – Integracyjna „SZANSA” została powołana przez Zarząd Stowarzyszenia Rodziców i Opiekunów Dzieci Niepełnosprawnych „Dać Szansę” w Wadowicach Uchwałą z dnia 7 listopada 2011 roku.
            </h3>
            <br>
            <p>Głównym celem świetlicy jest wspieranie funkcji opiekuńczych rodziny i świadczenie dzieciom niepełnosprawnym  oraz  rodzeństwa opieki, a także pomoc rodzinom w wychowaniu dzieci.Niepubliczna placówka opiekuńczo – wychowawcza wsparcia dziennego prowadzi swoją działalność przy wykorzystaniu mienia Stowarzyszenia Rodziców i Opiekunów Dzieci Niepełnosprawnych „Dać Szansę” w Wadowicach.
            <br>
            Kierownik świetlicy: mgr Beata Kasperkiewicz
            </p>    
        </div>   
    </section>
    {{-- END TEXT --}}

    {{-- TASKS --}}
    <dayroom-tasks></dayroom-tasks>
    
    {{-- GALLERY --}}

    <dayroom-gallery></dayroom-gallery>

</div>
@endsection
