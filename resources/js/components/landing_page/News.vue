<template>
    <section class="ds-landing-news" ref="wrapper">
        <h1 class="header">Aktualności</h1>
        <!--  -->
        <div class="content">
            <div class="single-news" v-for="item in newsList" :key="item.id">
                <div class="img" :data-bg="getNewsImg(item)" ref="image"></div>
                <h1 class="title" v-text="item.title"></h1>
                <p v-text="getNewsContent(item.content)"></p>
                <a :href="`/aktualnosci/${item.title}`" class="read-more"><span>Przeczytaj</span></a>
            </div>
        </div>
        <a href="/aktualnosci" class="show-all"><span>Zobacz wszystkie</span></a>
    </section>
</template>

<script>
export default {
    props: ["newsList"],
    methods: {
        getNewsContent(content) {
            content = JSON.parse(content);
            let firstHeader = null;
            content.forEach(item => {
                if (!firstHeader && item.type == "textarea") firstHeader = item;
            });
            const text = `${firstHeader.content
                .split(" ")
                .slice(0, 20)
                .join(" ")}...`;
            return text;
        },
        getNewsImg(item) {
            const logo = `/storage/news/${item.directory}/${item.logo}`;
            return `background-image: url('${logo}')`;
        }
    },
    mounted() {
        const a = this.$refs.wrapper;
        window.addEventListener("scroll", () => {
            if (scrollY > a.offsetTop - a.offsetHeight) a.classList.add("active");
        });
        //
        setTimeout(() => {
            this.$refs.image.forEach(item => {
                item.style = item.dataset.bg;
                delete item.dataset.bg;
            });
        }, 200);
    }
};
</script>
