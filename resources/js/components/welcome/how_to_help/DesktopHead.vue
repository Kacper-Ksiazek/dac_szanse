<template>
    <div class="header-desktop">
        <!--  -->
        <button
            class="header-item"
            v-for="item in howToHelpList"
            :key="item.id"
            v-text="item.title"
            @click="$emit('setCurrentSection', item.id)"
            :class="currentHelpSection === item.id ? 'active' : ''"
        ></button>
        <!--  -->
    </div>
</template>
<script>
export default {
    //
    props: ["howToHelpList", "currentHelpSection"],
};
</script>
