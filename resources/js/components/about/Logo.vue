<template>
    <div class="ds-section-logo">
        <h1 v-text="content ? content : 'O nas'"></h1>
        <!--  -->
        <nav class="ds-about-elements">
            <a :class="{ active: selected === 'zarzad' }" href="/o-nas/zarzad">Zarząd</a>
            <a :class="{ active: selected === 'historia' }" href="/o-nas/historia">Histora</a>
            <a :class="{ active: selected === 'nagrody' }" href="/o-nas/nagrody-i-wyroznienia">Nagrody i Wyróżnienia</a>
            <a :class="{ active: selected === 'cert' }" href="/o-nas/cert">CERT</a>
            <a :class="{ active: selected === 'rodo' }" href="/o-nas/polityka-rodo">Polityka RODO</a>
        </nav>
    </div>
</template>
<script>
export default {
    props: ["content", "selected"]
};
</script>
