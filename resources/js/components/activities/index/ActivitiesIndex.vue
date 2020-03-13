<template>
    <section class="ds-a-wrapper">
        <activites-logo></activites-logo>
        <!--  -->
        <!-- TOGGLE BETWEEN TASKS AND PROJECTS -->
        <!--  -->
        <div class="ds-a-control">
            <span :class="currentActivity == 'tasks' ? 'active' : null" class="ds-a-control-header" @click="currentActivity = 'tasks'">Zajecia</span>
            <span :class="currentActivity == 'projects' ? 'active' : null" class="ds-a-control-header" @click="currentActivity = 'projects'">Projekty</span>
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
            <a class="left" href="/dzialalnosc/zajecia">Pokaz zajecia</a>
            <a class="right" href="/dzialalnosc/projekty">Pokaz projekty</a>
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
