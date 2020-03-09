<template>
    <section class="ds-a-wrapper">
        <activites-logo></activites-logo>
        <!--  -->
        <!-- TOGGLE BETWEEN TASKS AND PROJECTS -->
        <!--  -->
        <div class="ds-a-control">
            <span @click="currentActivity = 'tasks'">Zajecia</span>
            <span @click="currentActivity = 'projects'">Projekty</span>
        </div>
        <!--  -->
        <!-- TASKS -->
        <!--  -->
        <tasks v-if="currentActivity === 'tasks'"></tasks>
        <!--  -->
        <!-- PROJECTS -->
        <!--  -->
        <projects v-if="currentActivity === 'projects'"></projects>
        <!--  -->
        <!-- NAVS -->
        <!--  -->
        <div class="ds-a-navs">
            <a href="/dzialalnosc/zajecia">Pokaz zajecia</a>
            <a href="/dzialalnosc/projekty">Pokaz projekty</a>
        </div>
    </section>
</template>
<script>
import Tasks from "./Tasks";
import Projects from "./Projects";
export default {
    components: { tasks: Tasks, projects: Projects },
    data() {
        return {
            currentActivity: "tasks"
        };
    }
};
</script>
