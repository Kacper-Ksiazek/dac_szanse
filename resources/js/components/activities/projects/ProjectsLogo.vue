<template>
    <div class="ds-a-help-logo logo">
        <h1 v-text="message ? message : 'Projekty'"></h1>
    </div>
</template>
<script>
export default {
    props: ["message"]
};
</script>
