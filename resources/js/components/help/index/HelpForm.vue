<template>
    <div class="ds-help-single-help-form">
        <span v-text="data.header"></span>
        <a :href="data.href">Szczegóły</a>
    </div>
</template>
<script>
export default {
    props: ["data"]
};
</script>
