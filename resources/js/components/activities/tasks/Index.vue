<template>
    <section class="ds-a-tasks-wrapper">
        <activites-logo content="Zajęcia" selected="zajecia"></activites-logo>
        <!--  -->
        <task-nav :data="taskList"></task-nav>
        <!--  -->
        <div class="ds-a-tasks-tasks-wrapper">
            <task v-for="item in taskList" :key="item.header" :data="item"></task>
        </div>
        <!--  -->
    </section>
</template>
<script>
import Task from "./Task";
import TaskNav from "./TaskNav";
export default {
    components: {
        task: Task,
        "task-nav": TaskNav
    },
    data() {
        return {
            hydroData: { header: "Hydroterapia", href: "/dzialalnosc/zajecia/hydroterapia" },
            taskList: [
                {
                    header: "Zajecia rehabilitacyjne",
                    description: "Kinezyterapia, fizykoterapia i masaż.",
                    href: "/dzialalnosc/zajecia/zajecia-rehabilitacyjne",
                    img: "rehabilitacja.jpg"
                },
                { header: "Zajęcia integracji sensorycznej", description: "", href: "/dzialalnosc/zajecia/sala-ingegracji-sensorycznej", img: "sensory.jpg" },
                {
                    header: "Zajęcia psychologiczno - pedagogiczno - logopedyczne",
                    description: "Zajęcia prowadzone są w salach przy ul. Kochanowskiego w Wadowicach.",
                    href: "/dzialalnosc/zajecia/psychologiczno-pedaogiczno-logopedyczne",
                    img: "logopeda.jpg"
                },
                {
                    header: "Sala doświadczania świata",
                    description: "Terapia w Sali Doświadczania Świata wpływa na wszechstronny rozwój stymulując bodźce.",
                    href: "/dzialalnosc/zajecia/sala-doswiadczania-swiata",
                    img: "swiatlo.jpg"
                },
                {
                    header: "Hydroterapia",
                    description: "Rehabilitacja prowadzona w basenie pozwala wykorzystać właściwości fizyko - chemiczne wody do zwiększenia efektywności terapii.",
                    href: "/dzialalnosc/zajecia/hydroterapia",
                    img: "hydro.jpg"
                },
                {
                    header: "Terapia Biofeedback",
                    description:
                        "EEG-Biofeedback to rodzaj terapii, dzięki której pacjent w sposób świadomy uczy się zmieniać wzorzec wytwarzanych fal w mózgu, tak aby mózg pracował wydajniej i szybciej.",
                    href: "/dzialalnosc/zajecia/biofeedback",
                    img: "bio.jpg"
                },
                {
                    header: "Hipoterapia",
                    description: "Przywracanie zdrowia i usprawnianie przy pomocy koni i jazdy konnej.",
                    href: "/dzialalnosc/zajecia/hipoterapia",
                    img: "hipoterapia.jpg"
                },
                {
                    header: "Dogoterapia",
                    description: "Dogoterapia to – najprościej rzecz ujmując – terapia z udziałem psa.",
                    href: "/dzialalnosc/zajecia/dogoterapia",
                    img: "dogoterapia.jpg"
                },
                {
                    header: "Muzykoterapia",
                    description: "System umuzykalniający polegający na wyrażaniu muzyki ruchem.",
                    href: "/dzialalnosc/zajecia/muzykoterapia",
                    img: "muzyka.jpg"
                },
                {
                    header: "Arteterapia",
                    description: `Arteterapia to – w najbardziej podstawowym wymiarze – "terapia przez sztukę".`,
                    href: "/dzialalnosc/zajecia/arteterapia",
                    img: "arteterapia.jpg"
                }
            ]
        };
    }
};
</script>
