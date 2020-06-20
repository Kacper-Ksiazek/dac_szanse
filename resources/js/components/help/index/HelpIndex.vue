<template>
    <section class="ds-help-wrapper">
        <logo></logo>
        <h1 class="intro">Wspomóż Stowarzyszenie Daj Szansę</h1>
        <!--  -->
        <!--  -->
        <div class="ds-help-content">
            <p>
                Działalność Stowarzyszenia Rodziców i Opiekunów Dzieci Niepełnosprawnych „Dać Szansę” w Wadowicach w dużym stopniu możliwa jest dzięki darowiznom od firm i
                prywatnych osób. Każda kwota przekazana na nasze konto bankowe przeznaczana jest na działalność statutową Stowarzyszenia, czyli pomoc osobom niepełnosprawnym.
                Wpłacając darowiznę na nasze konto mają Państwo możliwość odliczenia od kwoty do opodatkowania 6% dochodu (w przypadku osób fizycznych), bądź też 10% (w przypadku
                osób prawnych). Dodatkowo zachęcamy również do przekazywania darowizn rzeczowych w formie artykułów: papierniczych, plastycznych, biurowych oraz innych pomocy
                dydaktycznych. Rzeczy otrzymane od Darczyńców przekazywane są na zajęcia i wykorzystywane przez specjalistów w pracy z dzieckiem.
            </p>
            <h3>
                Wszystkich, którzy mogą nas wesprzeć finansowo prosimy o wpłaty na konto bankowe: BIC ALBPPLPW
            </h3>
        </div>
        <!--  -->
        <!--  -->
        <div class="ds-help-accounts-wrapper">
            <div class="ds-help-account-wrapper">
                <div class="ds-help-bank-account">
                    <strong>Alior Bank</strong>
                    <span>
                        56 2490 0005 0000 4600 8902 9219
                    </span>
                </div>
                <div class="ds-help-bank-account">
                    <strong>Alior Bank - konto walutowe dla wpłat zagranicznych EUR</strong>
                    <span>
                        PL 40 2490 0005 0000 4600 1882 3817
                    </span>
                </div>
            </div>
        </div>
        <!--  -->
        <!--  -->
        <div class="ds-help-forms">
            <help-form v-for="help in helpForms" :key="help.header" :data="help"></help-form>
        </div>
    </section>
</template>
<script>
import HelpForm from "./HelpForm.vue";
import Logo from "../Logo";
export default {
    components: { "help-form": HelpForm, logo: Logo },
    data() {
        return {
            helpForms: [
                { header: "Ambasadorzy", href: "/ambasadorzy" },
                { header: "Darczyńcy", href: "/darczyncy" },
                { header: "Współpraca", href: "/wspolpraca" },
                { header: "Nowożeńcy Dają szanse", href: "/nowozency" },
                { header: "Przekaż 1% podatku", href: "/przekaz-1%-podatku" },
                { header: "Allegro charytatywni", href: "/allegro-charytatywni" },
                { header: "Pomóż nam zaoszczędzić", href: "/pomoz-nam-zaoszczedzic" },
                { header: "Siepomaga", href: "/siepomaga" },
                { header: "Zrzutka.pl", href: "/zrzutka" }
            ]
        };
    }
};
</script>
