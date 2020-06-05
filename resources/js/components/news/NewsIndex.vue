<template>
    <section class="ds-news-list-wrapper">
        <!--  -->
        <!--  -->
        <news-on-list
            v-for="item in data.data"
            :key="item.id"
            type="view"
            :date="item.date"
            :title="item.title"
            :logo="item.logo"
            :content="item.content"
            :directory="item.directory"
        ></news-on-list>
        <!--  -->
        <!--  -->
        <div class="pagination-links">
            <a :href="`${data.path}?page=${item}`" v-for="item in data.last_page" :key="item" v-text="item" :class="{ current: item == data.current_page }"></a>
        </div>
    </section>
</template>
<script>
export default {
    //
    props: ["data"]

    //
};
</script>
