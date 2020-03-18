<template>
    <div class="ds-a-add-project-loading" :class="classes">
        <div class="body">
            <div class="loading">
                <span class="loading">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <i class="fa fa-check"></i>
            </div>
            <h1 v-text="classes ? 'Dodano pomyślnie' : 'Dodawanie projektu'"></h1>
            <div class="buttons">
                <a href="/"><button>Strona główna</button></a>
                <a :href="setProjectPath()"><button class="green">Zobacz projekt</button></a>
                <a @click="$emit('clear')"><button>Dodaj kolejny</button></a>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ["title"],
    mounted() {
        setTimeout(() => {
            this.classes = "stoped";
        }, 3000);
    },
    data() {
        return {
            classes: ""
        };
    },
    methods: {
        setProjectPath() {
            return `/dzialalnosc/projekty/${this.title}`;
        }
    }
};
</script>
