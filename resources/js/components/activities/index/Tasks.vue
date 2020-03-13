<template>
    <div class="ds-a-content">
        <h1>Głównym celem Stowarzyszenia jest działalność rzecz osób poszkodowanych i wykluczonych</h1>
        <p>
            A w szczególności dzieci niepełnosprawnych w zakresie wychowania, edukacji, pomocy społecznej, ochrony i promocji zdrowia, poszkodowanym w wypadkach i wymagającym
            rehabilitacji. <strong>Swoje cele Stowarzyszenie stara się realizować poprzez:</strong>
        </p>
        <div class="ds-a-task" v-for="task in tasksAPI" :key="task.header">
            <p v-text="task.header"></p>
            <ul v-if="task.items">
                <li v-for="item in task.items" :key="item" v-text="item"></li>
            </ul>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            tasksAPI: [
                { header: "prowadzenie działalności edukacyjnej oraz wychowawczej, a w głównej mierze pedagogicznej, psychologicznej, logopedycznej indywidualnej i grupowej" },
                { header: "organizowanie i prowadzenie terapii zajęciowej indywidualnej i grupowej" },
                { header: "organizowanie i prowadzenie zajęć rehabilitacyjnych" },
                {
                    header:
                        "zapewnienie rodzicom oraz opiekunom osób niepełnosprawnych pomocy psychologicznej, prawnej oraz w innych formach jakie wynikają z założeń statutu Stowarzyszenia"
                },
                {
                    header:
                        "organizowanie form zbiorowego wypoczynku dla rodziców i dzieci niepełnosprawnych, jak: wycieczki, imprezy integracyjne, kolonie i półkolonie, turnusy rehabilitacyjne, spektakle, koncerty, spotkania informacyjne"
                },
                {
                    header:
                        "promowanie wśród młodzieży idei wolontariatu, współpraca tym zakresie z placówkami oświatowymi, instytucjami kościelnymi, organizacjami młodzieżowymi oraz młodzieżą nie zrzeszoną"
                },
                {
                    header:
                        "edukowanie rodziców w kierunku zapobiegania patologiom społecznym, propagowanie zdrowego trybu życia, wskazanie na alternatywne, społecznie akceptowane formy spędzania wolnego czasu oraz jego organizacji"
                },
                {
                    header: "ukazywanie piękna naszego regionu, pielęgnowanie jego kultury i tradycji poprzez:",
                    items: ["organizowanie wycieczek, spotkań integracyjnych, konkursów, zabaw, wystaw, koncertów", "działalność artystyczną"]
                },
                {
                    header:
                        "wydawanie publikacji, poradników, informatorów, ulotek, czasopism itd. dotyczących działalności Stowarzyszenia oraz innych organizacji pozarządowych prowadzących działalność pożytku publicznego"
                },
                {
                    header:
                        "prowadzenie działalności statutowej odpłatnej w zakresie rehabilitacjo oraz edukacji dla dzieci nie będącymi osobami niepełnosprawnymi oraz nie należącymi  do Stowarzyszenia"
                },
                {
                    header:
                        "organizowanie szkoleń oraz udzielanie porad dla osób rozpoczynających działalność gospodarczą i bezrobotną, ze szczególnym uwzględnieniem osób niepełnosprawnych"
                }
            ]
        };
    }
};
</script>
