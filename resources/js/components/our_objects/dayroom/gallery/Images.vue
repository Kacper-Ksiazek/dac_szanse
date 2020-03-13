<template>
    <div class="ds-s-gallery-all-images">
        <section>
            <div class="ds-s-gallery-image" v-for="(item, index) in all_images" :key="item" :style="item | setPathBody" @click="$emit('handleClick', index)"></div>
        </section>
        <footer>
            <div class="logo"></div>
            <h3>ŚWIETLICA TERAPEUTYCZNO-INTEGRACYJNA SZANSA</h3>
        </footer>
    </div>
</template>
<script>
export default {
    props: ["all_images"],
    filters: {
        setPathBody(value) {
            return `background-image: url('/images/ourObjects/dayroom/body/${value}')`;
        }
    }
};
</script>
