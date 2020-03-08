<template>
    <section class="ds-a-wrapper">
        <logo></logo>
        <task-nav :data="taskList1.concat(taskList2)"></task-nav>
        <div class="ds-a-tasks-tasks-wrapper">
            <task v-for="item in taskList1" :key="item.header" :data="item"></task>
        </div>
        <hydrotherapy></hydrotherapy>
        <div class="ds-a-tasks-tasks-wrapper">
            <task v-for="item in taskList2" :key="item.header" :data="item"></task>
        </div>
    </section>
</template>
<script>
import ActivitiesLogo from "../ActivitesLogo";
import Task from "./Task";
import TaskNav from "./TaskNav";
import Hydro from "./Hydro";
export default {
    components: {
        logo: ActivitiesLogo,
        task: Task,
        "task-nav": TaskNav,
        hydrotherapy: Hydro
    },
    data() {
        return {
            taskList1: [
                { header: "Zajecia rehabilitacyjne", description: "Kinezyterapia, fizykoterapia i masaż.", href: "#", img: "image1.png" },
                { header: "Zajęcia integracji sensorycznej", description: "", href: "#", img: "image1.png" },
                {
                    header: "Zajęcia psychologiczno - pedagogiczno - logopedyczne",
                    description: "Zajęcia prowadzone są w salach przy ul. Kochanowskiego w Wadowicach.",
                    href: "/dzialalnosc/zajecia/psychologiczno-pedaogiczno-logopedyczne",
                    img: "image1.png"
                },
                {
                    header: "Sala doświadczania świata",
                    description: "Terapia w Sali Doświadczania Świata wpływa na wszechstronny rozwój stymulując bodźce.",
                    href: "#",
                    img: "image1.png"
                }
            ],
            taskList2: [
                {
                    header: "Terapia Biofeedback",
                    description:
                        "EEG-Biofeedback to rodzaj terapii, dzięki której pacjent w sposób świadomy uczy się zmieniać wzorzec wytwarzanych fal w mózgu, tak aby mózg pracował wydajniej i szybciej.",
                    href: "#",
                    img: "image1.png"
                },
                {
                    header: "Hipoterapia",
                    description: "Przywracanie zdrowia i usprawnianie przy pomocy koni i jazdy konnej.",
                    href: "#",
                    img: "image1.png"
                },
                {
                    header: "Dogoterapia",
                    description: "Dogoterapia to – najprościej rzecz ujmując – terapia z udziałem psa.",
                    href: "#",
                    img: "image1.png"
                },
                {
                    header: "Muzykoterapia",
                    description: "System umuzykalniający polegający na wyrażaniu muzyki ruchem.",
                    href: "#",
                    img: "image1.png"
                },
                {
                    header: "Arteterapia",
                    description: `Arteterapia to – w najbardziej podstawowym wymiarze – "terapia przez sztukę".`,
                    href: "#",
                    img: "image1.png"
                }
            ]
        };
    }
};
</script>
