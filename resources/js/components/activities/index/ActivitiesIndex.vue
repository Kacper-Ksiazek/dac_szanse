<template>
    <section class="ds-a-wrapper">
        <activites-logo></activites-logo>
        <!--  -->
        <div class="ds-a-navs">
            <div class="wrapper">
                <a href="/dzialalnosc/zajecia">Pokaż zajęcia</a>
                <a href="/dzialalnosc/projekty">Pokaż projekty</a>
            </div>
        </div>
        <!--  -->
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
