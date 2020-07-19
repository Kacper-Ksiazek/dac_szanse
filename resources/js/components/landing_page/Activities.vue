<template>
    <section class="ds-landing-activities" ref="wrapper">
        <!--  -->
        <h1 class="header">
            Działalność
        </h1>
        <!--  -->
        <div class="content">
            <!--  -->
            <div class="tasks">
                <h1 class="header">Zajęcia</h1>
                <span class="underline">Głównym celem Stowarzyszenia jest działalność na rzecz osób poszkodowanych i wykluczonych</span>
                <span class="info">
                    szególnie dzieci niepełnosprawnych w zakresie wychowania, edukacji, pomocy społecznej, ochrony i promocji zdrowia, poszkodowanym w wypadkach i wymagających
                    rehabilitacji.
                </span>
                <a href="/dzialalnosc/zajecia"><span>Dowiedz się wiecęj</span></a>
            </div>
            <!--  -->
            <div class="projects">
                <a class="header" href="./dzialalnosc/projekty"><span>Projekty</span></a>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    mounted() {
        const a = this.$refs.wrapper;
        window.addEventListener("scroll", () => {
            if (scrollY > a.offsetTop - a.offsetHeight) a.classList.add("active");
        });
    }
};
</script>
