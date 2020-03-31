<template>
    <div class="ds-about-logo logo"><h1 v-text="content ? content : 'O nas'"></h1></div>
</template>
<script>
export default {
    props: ["content"]
};
</script>
