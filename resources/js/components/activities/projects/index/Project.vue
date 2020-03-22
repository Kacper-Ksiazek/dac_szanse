<template>
    <div class="ds-a-projects-single-project">
        <div class="content">
            <h1 v-text="data.title"></h1>
            <span v-text="setDurationTime()"></span>
        </div>
        <a :href="data.title | setHref">Zobacz wiecej</a>
    </div>
</template>
<script>
export default {
    props: ["data"],
    filters: {
        setHref(val) {
            return `/dzialalnosc/projekty/${val}`;
        }
    },
    methods: {
        setDurationTime() {
            const getTranslatedDate = date => {
                const months = ["styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień"];
                let day, month, year;
                day = date.getDate();
                month = months[date.getMonth()];
                year = date.getFullYear();
                return `${day} ${month} ${year}`;
            };
            //
            const from = getTranslatedDate(new Date(this.data.since));
            const since = getTranslatedDate(new Date(this.data.till));
            return `Okres realizacji: ${from} do ${since}`;
        }
    }
};
</script>
