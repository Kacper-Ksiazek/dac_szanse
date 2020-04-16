<template>
    <div class="ds-a-tasks-task-item" ref="item">
        <img :src="data.img | setImgPath" />
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
            return `/images/activities/tasks/${val}`;
        }
    },
    mounted() {
        const prevNode = this.$refs.item.previousSibling;
        let prevElement = prevNode ? prevNode : this.$refs.item.parentNode.previousElementSibling;
        window.addEventListener("scroll", () => {
            if (scrollY >= prevElement.offsetTop - 200) this.$refs.item.classList.add("active");
        });
    }
};
</script>
