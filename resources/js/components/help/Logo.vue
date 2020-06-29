<template>
    <div class="ds-section-logo help">
        <h1 v-text="content ? content : 'Jak pomóc'"></h1>
        <nav class="ds-about-elements">
            <a :class="{ active: selected === 'ambasadorzy' }" href="/jak-pomoc/ambasadorzy">Ambasadorzy</a>
            <a :class="{ active: selected === 'darczyncy' }" href="/jak-pomoc/darczyncy">Darczyńcy</a>
            <a :class="{ active: selected === 'wspolpraca' }" href="/jak-pomoc/wspolpraca">Współpraca</a>
            <a :class="{ active: selected === 'nowozency' }" href="/jak-pomoc/nowozency">Nowożeńcy dają szansę</a>
            <a :class="{ active: selected === 'allegro-charytatywni' }" href="/jak-pomoc/allegro-charytatywni">Allegro charytatywni</a>
            <a :class="{ active: selected === 'pomoz-nam-zaoszczedzic' }" href="/jak-pomoc/pomoz-nam-zaoszczedzic">Pomóż nam zaoszczędzić</a>
            <a :class="{ active: selected === 'przekaz-1%-podatku' }" href="/jak-pomoc/podatek">Przekaż 1% podatku</a>
            <a :class="{ active: selected === 'siepomaga' }" href="/jak-pomoc/siepomaga">Siepomaga</a>
            <a :class="{ active: selected === 'zrzutka' }" href="/jak-pomoc/zrzutka">Zrzutka.pl</a>
        </nav>
    </div>
</template>
<script>
export default {
    props: ["content", "selected"]
};
</script>
