<template>
    <div>
        <!-- BIGGER TASK LIST -->
        <div class="ds-s-task-list-wrapper-big">
            <h1 class="ds-s-task-list-header">Rodzaje zajęć <i class="fa fa-info-circle"></i></h1>
            <section class="ds-s-tasks">
                <ul class="ds-s-tasks-list">
                    <li
                        v-for="(item, index) in tasks"
                        :key="item.task"
                        v-text="item.task"
                        @click="() => setActive(index)"
                        :class="activeTask.task == item.task ? 'active' : ''"
                    ></li>
                </ul>
                <ul class="ds-s-tasks-description">
                    <li v-for="item in activeTask.description" :key="item" v-text="item"></li>
                </ul>
            </section>
        </div>
        <!-- SMALLER TASK LIST -->
        <div class="ds-s-task-list-wrapper-mobile">
            <h1 class="ds-s-task-list-header">Rodzaje zajęć <i class="fa fa-info-circle"></i></h1>
            <section class="ds-s-mobile-task-list" :style="mobileRotate">
                <div class="mobile-task" v-for="item in tasks" :key="item.task">
                    <h3 v-text="item.task"></h3>
                    <ul>
                        <li v-for="task in item.description" :key="task" v-text="task"></li>
                    </ul>
                </div>
            </section>
            <div class="ds-s-mobile-buttons-wrapper">
                <button :disabled="mobileActiveTaskIndex == 0" @click="mobileActiveTaskIndex--"><i class="fa fa-chevron-left"></i></button>
                <button :disabled="mobileActiveTaskIndex == 6" @click="mobileActiveTaskIndex++"><i class="fa fa-chevron-right"></i></button>
            </div>
            <div class="ds-s-mobile-dots-wrapper">
                <div
                    class="ds-s-mobile-dot"
                    v-for="(item, index) in tasks"
                    :key="item.task"
                    :class="index == mobileActiveTaskIndex ? 'active' : ''"
                    @click="mobileActiveTaskIndex = index"
                ></div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    created() {
        if (!this.activeTask) this.activeTask = this.tasks[0];
    },
    methods: {
        setActive(key) {
            this.activeTask = this.tasks[key];
        }
    },
    watch: {
        mobileActiveTaskIndex(val) {
            this.mobileRotate = `transform: translateX(${((-1 * 100) / this.tasks.length) * val}%)`;
        }
    },
    data() {
        return {
            activeTask: null,
            mobileActiveTaskIndex: 0,
            mobileRotate: "",
            tasks: [
                {
                    task: "Zajęcia muzyczno-rytmiczne",
                    description: [
                        "Wyrabianie odpowiednich reakcji na różne elementy muzyki",
                        "Kształtowanie wrażliwości muzycznej",
                        "Wyrabianie płynności ruchów podczas zabaw z piosenką",
                        "Doskonalenie koordynacji słuchowo – ruchowej",
                        "Zachęcanie do swobodnych działań przy akompaniamencie instrumentu",
                        "Kształtowanie reakcji na bodźce muzyczne ( zmiana tempa, dynamika, wysokość dźwięku itd.)",
                        "Zabawy z tańcem, z instrumentami, nauka piosenek, kształtowanie poczucia rytmu"
                    ]
                },
                {
                    task: " Zajęcia polisensoryczne",
                    description: [
                        "Trening umiejętności społecznych (wyjścia w miejsca użytku publicznego",
                        "Nauka przestrzegania zasad akceptowanych społecznie)",
                        "Trening czystości (nauka korzystania z toalety, nauka mycia rąk)",
                        "Trening komunikacji (wprowadzanie i utrwalanie gestów MAKATON i symboli PCS)",
                        "stymulacja polisensoryczna",
                        "Poszerzanie repertuaru posiłków oraz spożywanych produktów",
                        "Trening relaksacji wg. Jacobsona",
                        "Zastosowanie metody Knillów"
                    ]
                },
                {
                    task: "Zajęcia z arteterapii",
                    description: [
                        "Rozwijanie zainteresowań i uzdolnień artystycznych",
                        "Poznanie różnego rodzaju materiałów do wykorzystania w procesie tworzenia",
                        "Rozwijanie sprawności manualnej",
                        "Wyposażenie w niezbędne umiejętności plastyczne oraz wiedzę z tego zakresu",
                        "Rozwijanie twórczego myślenia, wyobraźni i fantazji"
                    ]
                },
                {
                    task: "Zajęcia pedagogiczne",
                    description: [
                        `Uspołecznianie, pobudzanie metodą „ Porannego Kręgu”`,
                        "Poprawa komunikacji, kształtowanie umiejętności pracy w grupie",
                        "Motywowanie do podejmowania zadań o różnym stopniu trudności",
                        "spontaniczna zabawa",
                        "Wdrażanie do samodzielności",
                        "Usprawnianie percepcji wzrokowej i słuchowej",
                        "Kształtowanie orientacji w schemacie własnego ciała i przestrzeni",
                        "Zajęcia plastyczne, zabawy muzyczno-ruchowe, zajęcia manualne"
                    ]
                },
                {
                    task: " Zajęcia muzyczno teatralne",
                    description: [
                        "Doskonalenie koordynacji słuchowo – ruchowej",
                        "Zabawy z tańcem, z instrumentami, nauka piosenek, kształtowanie poczucia rytmu",
                        "Kształtowanie wrażliwości muzycznej",
                        "Stymulowanie rozwoju i inspirowanie twórczych działań dzieci",
                        "Bogacenie czynnego słownictwa dzieci",
                        "Uściślenie pojęć związanych z działalnością teatralną",
                        "Wyzwalanie aktywności ruchowej i pantomimicznej dzieci",
                        "Rozwijanie kreatywności i swobodnej ekspresji artystycznej"
                    ]
                },
                {
                    task: "Zajęcia ogólnorozwojowe",
                    description: [
                        "Wspomaganie rozwoju dziecka w zakresie sfery poznawczej, emocjonalnej, społecznej i ruchowej",
                        "Socjalizacja (uczenie zachowań właściwych dla danych sytuacji społecznych, przestrzeganie zasad panujących w miejscach publicznych, rozumienie norm, reguł i oczekiwań kulturowych)",
                        "Wyrabianie umiejętności społecznych (współdziałania, pomagania,naśladowania, czekania na swoją kolej podczas zabawy itd)",
                        "Rozwijanie twórczej aktywności uczestników",
                        "Rozwój poprzez zabawę",
                        "Zdobycie umiejętności aktywnego spędzenia wolnego czasu"
                    ]
                },
                {
                    task: "Zajęcia kulinarne",
                    description: [
                        "Zdobycie umiejętności samoobsługowych (ubieranie,korzystanie z toalety i pozostałych urządzeń sanitarnych, spożywanie posiłków)",
                        "Nabywanie umiejętności korzystania z przepisów kulinarnych",
                        "Utrwalenie przepisów BHP",
                        "Nabycie umiejętności w sporządzeniu potraw z różnych surowców",
                        "Kształtowanie umiejętności nakrywania do stołu i estetycznego podawania posiłku"
                    ]
                }
            ]
        };
    }
};
</script>
