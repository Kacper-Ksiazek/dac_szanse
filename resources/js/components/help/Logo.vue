<template>
    <div class="ds-help-logo logo"><h1 v-text="content ? content : 'Jak pomóc'"></h1></div>
</template>
<script>
export default {
    props: ["content"]
};
</script>
