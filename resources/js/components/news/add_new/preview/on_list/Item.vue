<template>
    <div class="item-on-list">
        <div class="body" v-if="showErrorContition()">
            <img :src="logo" alt="" />
            <div class="content">
                <h3 v-text="title"></h3>
                <span v-text="`Data: ${date}`"></span>
                <p v-text="getText()"></p>
            </div>
        </div>
        <button v-if="showErrorContition()">Zobacz wiecej</button>
        <div class="error" v-else>
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
    props: ["date", "title", "logo", "content", "type"],
    methods: {
        getText() {
            const { content } = this;
            let text;
            content.forEach(item => {
                if (text) return;
                else if (item.type == "textarea") text = item.content;
            });
            return text;
        },
        showErrorContition() {
            const { date, title, logo, getText } = this;
            return !!date && !!title && !!logo && !!getText();
        }
    }
};
</script>
