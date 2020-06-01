<template>
    <div class="ds-welcome-news">
        <div class="d-flex justify-content-center align-items-center">
            <h1 class="header">Aktualności</h1>
        </div>
        <!--  -->
        <!--  -->
        <!--  -->
        <div class="news-content">
            <news-on-list
                v-for="item in newsToUse"
                :key="item.id"
                type="view"
                :date="item.date"
                :title="item.title"
                :logo="item.logo"
                :content="item.content"
                :directory="item.directory"
            ></news-on-list>
            <!--  -->
            <div class="dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            <a href="/aktualnosci" class="more">Sprawdź więcej aktualności</a>
        </div>
    </div>
</template>
<script>
export default {
    //
    props: ["news"],
    data() {
        return {
            newsToUse: JSON.parse(this.news)
        };
    }
};
</script>
