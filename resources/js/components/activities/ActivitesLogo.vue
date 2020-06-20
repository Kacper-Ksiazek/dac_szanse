<template>
    <div class="ds-section-logo">
        <h1 v-text="content ? content : 'Działalność'"></h1>
        <!--  -->
        <nav class="ds-about-elements">
            <a :class="{ active: selected === 'zajecia' }" href="/dzialalnosc/zajecia">Zajęcia</a>
            <a :class="{ active: selected === 'projekty' }" href="/dzialalnosc/projekty">Projekty</a>
        </nav>
    </div>
</template>
<script>
export default {
    props: ["content", "selected"]
};
</script>
