<template>
    <div class="ds-path-bar">
        <div class="ds-path-bar-item scroll" @click="handleMenu">
            <a>Nawigacja</a>
        </div>
        <div class="ds-path-bar-item">
            <a href="/">STRONA GŁÓWNA</a>
            <i class="fa fa-chevron-right"></i>
        </div>
        <div class="ds-path-bar-item" v-for="(task, index) in tasks" :key="task.href" :class="tasks.length - 1 == index ? 'last' : ''">
            <a :href="task.href" v-text="task.header.toUpperCase()"></a>
            <i class="fa fa-chevron-right"></i>
        </div>
    </div>
</template>
<script>
export default {
    props: ["path"],
    data() {
        return {
            tasks: JSON.parse(this.path)
        };
    },
    methods: {
        handleMenu() {
            document.querySelector("div.ds-path-bar").classList.toggle("active");
        }
    }
};
</script>
