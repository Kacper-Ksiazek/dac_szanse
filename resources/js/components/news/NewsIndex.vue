<template>
    <section class="ds-news-list-wrapper">
        <div class="search">
            <input type="text" v-model="search" placeholder="Wyszukaj..." />
            <i class="fa fa-search"></i>
        </div>
        <!--  -->
        <!--  -->
        <news-on-list
            v-for="item in searchedContent()"
            :key="item.id"
            type="view"
            :date="item.date"
            :title="item.title"
            :logo="item.logo"
            :content="item.content"
            :directory="item.directory"
        ></news-on-list>
    </section>
</template>
<script>
export default {
    //
    props: ["data"],
    //
    data() {
        return {
            search: null
        };
    },
    //
    methods: {
        searchedContent() {
            const { search, data } = this;
            if (!search) return data;
            else {
                const result = [];
                data.forEach(item => {
                    if (item.content.includes(search) || item.title.includes(search)) result.push(item);
                });
                return result;
            }
        }
    }
};
</script>
