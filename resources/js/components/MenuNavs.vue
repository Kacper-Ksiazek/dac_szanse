<template>
    <div>
        <ul class="navbar-nav ml-auto">
            <li class="ds-menu-item" v-for="nav in navs" :key="nav.header">
                <span class="ds-menu-header">
                    <span class="content" v-text="nav.header"></span>
                </span>
                <div class="ds-menu-dropdown px-3 mt-1">
                    <div v-for="task in nav.body" :key="task" v-text="task"></div>
                </div>
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    data() {
        return {
            navs: [
                {
                    header: "O nas",
                    body: ["Zarząd", "Historia", "Nagrody i Wyróżnienia", "Budowa CERT", "RODO"]
                },
                {
                    header: "Aktualności",
                    body: ["Bieżące", "Archiwum- 2019", "Archiwum- 2018"]
                },
                {
                    header: "Co robimy",
                    body: ["Zajęcia", "Projekty"]
                },
                {
                    header: "Nasze placówki",
                    body: [
                        "Niepubliczna Specjalistyczna Poradnia Psychologiczno-Pedagogiczna",
                        "Niepubliczny Ośrodek Rewalidacyjno-Wychowawczy",
                        'Niepubliczny Punkt Przedszkolny "Dać Szansę',
                        'Świetlica Terapeutyczno-Integracyjna  "Szansa',
                        'Spółdzielnia Socjalna "AMICUS'
                    ]
                },
                {
                    header: "Jak pomóc",
                    body: ["Zajęcia", "Projekty"]
                },
                {
                    header: "Kontakt"
                }
            ]
        };
    }
};
</script>
