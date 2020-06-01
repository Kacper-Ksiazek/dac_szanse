<template>
    <div class="ds-welcome-activites">
        <h1 class="header">Działalność</h1>
        <!--  -->
        <div class="buttons-wrapper">
            <button :class="currentSection === 'tasks' ? 'active' : ''" @click="currentSection = 'tasks'">Zajęcia</button>
            <button :class="currentSection === 'projects' ? 'active' : ''" @click="currentSection = 'projects'">Projekty</button>
        </div>
        <!--  -->
        <div class="activity-view">
            <div class="text" :class="currentSection === 'projects' ? 'active' : ''">
                <!--  -->
                <div class="tasks">
                    <!--  -->
                    <div class="d-flex justify-content-center mt-0 mb-3">
                        <h1 class="header m-0">Zajęcia</h1>
                    </div>
                    <!--  -->
                    <h3><strong>Głównym celem Stowarzyszenia jest działalność rzecz osób poszkodowanych i wykluczonych</strong></h3>
                    <!--  -->
                    <p>
                        a w szczególności dzieci niepełnosprawnych w zakresie wychowania, edukacji, pomocy społecznej, ochrony i promocji zdrowia, poszkodowanym w wypadkach i
                        wymagającym rehabilitacji. Swoje cele Stowarzyszenie stara się realizować poprzez....
                    </p>
                    <!--  -->
                    <div class="d-flex justify-content-center">
                        <a href="/dzialalnosc/zajecia"> Zobacz więcej zajęć</a>
                    </div>
                </div>
                <!--  -->
                <div class="projects">
                    <!--  -->
                    <!--  -->
                    <div class="d-flex justify-content-center mt-0 mb-3">
                        <h1 class="header m-0">Projekty</h1>
                    </div>
                    <!--  -->
                    <project v-for="item in projectsToUse" :key="item.id" :data="item"></project>
                    <!--  -->
                    <div class="d-flex justify-content-center">
                        <a href="/dzialalnosc/projekty">Zobacz więcej projektów</a>
                    </div>
                    <!--  -->
                </div>
            </div>
            <div class="image" :class="currentSection === 'projects' ? 'active' : ''">
                <div class="tasks"></div>
                <!--  -->
                <div class="projects"></div>
            </div>
        </div>
    </div>
</template>
<script>
import Project from "../activities/projects/index/Project.vue";
export default {
    props: ["projects"],
    components: {
        project: Project
    },
    data() {
        return {
            currentSection: "tasks",
            projectsToUse: JSON.parse(this.projects)
        };
    }
};
</script>
