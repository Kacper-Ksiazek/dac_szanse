<template>
    <div class="control-wrapper">
        <span class="next" @click="$emit('next')" v-if="desktopRotation < limit"><i class="fa fa-chevron-right"></i></span>
        <span class="prev" @click="$emit('prev')" v-if="desktopRotation > 0"><i class="fa fa-chevron-left"></i></span>
    </div>
</template>
<script>
export default {
    props: ["desktopRotation", "limit"]
};
</script>
