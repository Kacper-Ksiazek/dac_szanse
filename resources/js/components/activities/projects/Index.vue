<template>
    <section class="ds-a-projects">
        <!--  -->
        <!--  -->
        <!--  -->
        <help-logo></help-logo>
        <!--  -->
        <!--  -->
        <!--  -->
        <project v-for="item in projects" :key="item.id" :data="item"></project>
        <!--  -->
        <!--  -->
        <!--  -->
        <span class="ds-a-help-archives-control" @click="showArchives = !showArchives" :class="showArchives ? 'active' : ''">
            <span class="control-header">Archiwum <i class="fa fa-bars"></i></span>
            <div class="ds-a-help-archives">
                <a :href="item | setArchivesHref" class="ds-a-help-archives-element" v-for="item in archives" :key="item" v-text="item"></a>
            </div>
        </span>
    </section>
</template>
<script>
import Project from "./Project.vue";
import HelpLogo from "./HelpLogo.vue";
export default {
    components: { project: Project, "help-logo": HelpLogo },
    props: ["projects", "archives"],
    data() {
        return {
            showArchives: false
        };
    },
    filters: {
        setArchivesHref(val) {
            return `/dzialalnosc/projekty/archiwum/${val}`;
        }
    }
};
</script>
