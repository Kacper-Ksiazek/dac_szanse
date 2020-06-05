<template>
    <section class="ds-about-management">
        <h1>Zarząd- z potrzeby <span class="pink">SERCA</span></h1>
        <!--  -->
        <div class="people-list-wrapper">
            <div class="people-list-item" v-for="item in list" :key="item.id" :class="activeId == item.id ? 'active' : ''">
                <!--  -->
                <div class="header">
                    <h2 @click="activeId = activeId == item.id ? null : item.id">
                        <span v-text="item.header"></span>
                    </h2>
                </div>
                <!--  -->
                <div class="peoples">
                    <div class="person" v-for="person in item.list" :key="person.id">
                        <span v-text="person.name" class="name"></span>
                        <span v-text="person.position" class="position"></span>
                    </div>
                </div>
            </div>
            <span id="historia"></span>
        </div>
    </section>
</template>
<script>
export default {
    data() {
        return {
            activeId: null,
            list: [
                {
                    id: 0,
                    header: "Zarząd",
                    list: [
                        { id: 0, position: "Prezes Zarządu", name: "Bogumiła Jończyk" },
                        { id: 1, position: "Wiceprezes Zarządu", name: "Joanna Szymańska" },
                        { id: 2, position: "Członek Zarządu", name: "Jolanta Dziergas" },
                        { id: 3, position: "Członek Zarządu", name: "Andrzej Palkij" },
                        { id: 4, position: "Członek Zarządu", name: "Robert Susfał" },
                        { id: 5, position: "Członek Zarządu", name: "Jarosław Jakubiec" },
                        { id: 6, position: "Członek Zarządu", name: "Mirosław Śmiech" }
                    ]
                },
                //
                {
                    id: 1,
                    header: "Komisja Rewizyjna",
                    list: [
                        { id: 0, position: "Przewodnicząca Komisji Rewizyjnej", name: "Katarzyna Wolanin" },
                        { id: 1, position: "Członek Komisji Rewizyjnej", name: "Mirosława Drabik" },
                        { id: 2, position: "Członek Komisji Rewizyjnej", name: "Jadwiga Łojewska" }
                    ]
                },
                //
                {
                    id: 2,
                    header: "Sąd  Koleżeński",
                    list: [
                        { id: 0, position: "Przewodnicząca Sądu Koleżeńskiego", name: "Elżbieta Kosik" },
                        { id: 1, position: "Sekretarz Sądu Koleżeńskiego", name: "Katarzyna Wykręt" },
                        { id: 2, position: "Członek Sądu Koleżeńskiego", name: "Tomasz Pasternak" }
                    ]
                }
            ]
        };
    }
};
</script>
