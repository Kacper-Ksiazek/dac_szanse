<template>
    <div class="ds-welcome-about-us">
        <div class="d-flex justify-content-center align-items-center">
            <h1 class="header">O nas</h1>
        </div>
        <div class="about-us-content">
            <!--  -->
            <div class="about-us-item" v-for="item in aboutUsList" :key="item.id">
                <h3 v-text="item.content"></h3>
                <a :href="item.href">Zobacz</a>
            </div>
            <!--  -->
        </div>
    </div>
</template>
<script>
export default {
    //
    data() {
        return {
            aboutUsList: [
                {
                    id: 0,
                    content: "Zarząd",
                    href: "#"
                },
                {
                    id: 1,
                    content: "Historia",
                    href: "#"
                },
                {
                    id: 2,
                    content: "Nagrody i Wyróżnienia",
                    href: "#"
                },
                {
                    id: 3,
                    content: "Budowa CERT",
                    href: "/o-nas#cert"
                },
                {
                    id: 4,
                    content: "RODO",
                    href: "#"
                }
            ]
        };
    }
};
</script>
