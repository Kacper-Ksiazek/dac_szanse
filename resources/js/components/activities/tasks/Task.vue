<template>
    <div class="ds-a-tasks-task-item" ref="item">
        <div class="img-wrapper" :style="data.img | setImgPath"></div>
        <div class="ds-a-task-item-content">
            <h1 v-text="data.header"></h1>
            <h4 v-text="data.description"></h4>
            <a :href="data.href" type="button" class="ds-show-more-green">Zobacz wiecej <i class="fa fa-info-circle"></i></a>
        </div>
    </div>
</template>
<script>
export default {
    props: ["data"],
    filters: {
        setImgPath(val) {
            return `background-image: url('/images/activities/tasks/${val}')`;
        }
    },
    mounted() {
        const prevNode = this.$refs.item.previousSibling;
        const addClass = () => this.$refs.item.classList.add("active");

        if (!prevNode) return addClass();

        window.addEventListener("scroll", () => {
            if (scrollY >= prevNode.offsetTop + 100) addClass();
        });
    }
};
</script>
