<template>
    <div class="ds-news-logo"><h1 v-text="content ? content : 'Aktualności'"></h1></div>
</template>
<script>
export default {
    props: ["content"]
};
</script>
