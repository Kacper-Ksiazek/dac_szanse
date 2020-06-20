<template>
    <section class="ds-a-projects">
        <!--  -->
        <!--LOGO  -->
        <!--  -->
        <activites-logo content="Projekty" selected="projekty"></activites-logo>

        <!--  -->
        <!--ARCHIWUM  -->
        <!--  -->
        <span v-if="archives" class="ds-a-help-archives-control" @click="showArchives = !showArchives" :class="showArchives ? 'active' : ''">
            <span class="control-header">Archiwum <i class="fa fa-bars"></i></span>
            <div class="ds-a-help-archives">
                <a :href="item | setArchivesHref" class="ds-a-help-archives-element" v-for="item in archives" :key="item" v-text="item"></a>
            </div>
        </span>
        <span v-else class="ds-a-help-archives-control">
            <a class="control-header" href="/dzialalnosc/projekty">Wszystkie projekty</a>
        </span>
        <!--  -->
        <!--PROJEKTY  -->
        <!--  -->
        <project v-for="item in projectsToShow" :key="item.id" :data="item"></project>
        <!--  -->
        <!-- PAGINACJA -->
        <!--  -->
        <div class="pagination-links">
            <a :href="`${projects.path}?page=${item}`" v-for="item in projects.last_page" :key="item" v-text="item" :class="{ current: item == projects.current_page }"></a>
        </div>
    </section>
</template>
<script>
import project from "./Project.vue";
export default {
    components: { project },
    props: ["projects", "archives", "logo_message"],
    data() {
        return {
            showArchives: false
        };
    },
    filters: {
        setArchivesHref(val) {
            return `/dzialalnosc/projekty/archiwum/${val}`;
        }
    },
    computed: {
        projectsToShow() {
            if (this.projects.hasOwnProperty("current_page")) {
                return this.projects.data;
            } else return this.projects.reverse();
        }
    }
};
</script>
