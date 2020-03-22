<template>
    <section class="ds-a-projects">
        <!--  -->
        <!--LOGO  -->
        <!--  -->
        <help-logo :message="logo_message"></help-logo>
        <!--  -->
        <!--LOGOWANIE  -->
        <!--  -->
        <a v-if="!auth" href="/login">Login</a>
        <a v-if="auth" href="/logout">Logout</a>
        <a v-if="auth" href="/admin/dodaj-projekt">Dodaj nowy</a>
        <!--  -->
        <!--PROJEKTY  -->
        <!--  -->
        <project v-for="item in projectsToShow" :key="item.id" :data="item"></project>
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
    </section>
</template>
<script>
import Project from "./Project.vue";
import HelpLogo from "../ProjectsLogo.vue";
export default {
    components: { project: Project, "help-logo": HelpLogo },
    props: ["projects", "archives", "auth", "logo_message"],
    data() {
        return {
            showArchives: false,
            projectsToShow: this.projects.reverse()
        };
    },
    filters: {
        setArchivesHref(val) {
            return `/dzialalnosc/projekty/archiwum/${val}`;
        }
    }
};
</script>
