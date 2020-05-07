<template>
    <div class="item-on-list">
        <div class="body" v-if="showPreviw()">
            <img :src="getLogo()" alt="" />
            <div class="content">
                <h3 v-text="title"></h3>
                <span v-text="`Data: ${date}`"></span>
                <p v-text="getText()"></p>
            </div>
        </div>
        <a v-if="showPreviw() && type === 'preview'">Zobacz wiecej</a>
        <a v-if="showPreviw() && type === 'view'" :href="getHref()">Zobacz wiecej</a>
        <div class="error" v-if="!showPreviw()">
            <i class="fa fa-bullhorn"></i>
            <h2>Problem mamy!</h2>
            <p>Żeby wyświetlić ten podgląd musisz podać:</p>
            <ul>
                <li v-if="!title">Tytuł</li>
                <li v-if="!date">Date</li>
                <li v-if="!logo">Logo</li>
                <li v-if="!getText()">Jakieś pole tekstowe</li>
            </ul>
        </div>
    </div>
</template>
<script>
export default {
    props: ["date", "title", "logo", "content", "type", "directory"],
    methods: {
        getText() {
            const { content, type } = this;
            let text;
            if (type === "view")
                JSON.parse(content).forEach(item => {
                    if (text) return;
                    else if (item.type == "textarea") text = item.content;
                });
            else {
                content.forEach(item => {
                    if (text) return;
                    else if (item.type == "textarea") text = item.content;
                });
            }
            return text;
        },
        showPreviw() {
            const { date, title, logo, getText } = this;
            return !!date && !!title && !!logo && !!getText();
        },
        getLogo() {
            const { type, logo, directory } = this;
            if (type === "preview") return logo;
            return `/storage/news/${directory}/${logo}`;
        },
        getHref() {
            return `/aktualnosci/${this.title}`;
        }
    }
};
</script>
