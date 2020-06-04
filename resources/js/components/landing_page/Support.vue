<template>
    <section class="ds-landing-support" ref="wrapper">
        <h1 class="header">wspierają nas</h1>
        <div class="content" :style="`width: ${sections.length}00vw; ${getTransform()}`">
            <div class="section" v-for="(section, sectionIndex) in sections" :class="{ active: currentSection === sectionIndex }" :key="sectionIndex">
                <div
                    class="single-supporter"
                    v-for="(img, imgIndex) in section.elements"
                    :key="`${sectionIndex}.${imgIndex}`"
                    :style="`background-image: url('/images/welcome/support/${img}')`"
                ></div>
            </div>
        </div>
        <div class="control">
            <span @click="currentSection === 0 ? null : currentSection--" class="left"><i class="fa fa-chevron-left"></i></span>
            <span class="dot" v-for="(_, index) in sections" :key="index" @click="currentSection = index" :class="{ active: index === currentSection }"></span>
            <span @click="currentSection === sections.length - 1 ? null : currentSection++" class="right"><i class="fa fa-chevron-right"></i></span>
        </div>
        <a href="/jak-pomoc/darczyncy"><span>Zobacz więcej</span></a>
    </section>
</template>
<script>
export default {
    data() {
        return {
            list: [
                "1.png",
                "2.png",
                "3.png",
                "4.png",
                "5.png",
                "6.png",
                "7.png",
                "8.png",
                "9.png",
                "10.png",
                "11.png",
                "12.png",
                "13.png",
                "14.png",
                "15.png",
                "16.png",
                "17.png",
                "18.png"
            ],
            currentSection: 0
        };
    },
    mounted() {
        const a = this.$refs.wrapper;
        window.addEventListener("scroll", () => {
            if (scrollY > a.offsetTop - a.offsetHeight - 500) a.classList.add("active");
        });
        //
    },
    computed: {
        sections() {
            const list = JSON.parse(JSON.stringify(this.list));
            //
            let sections = [],
                loop = true,
                a;
            while (loop) {
                a = list.splice(0, 6);
                sections.push({ elements: a });
                if (a.length !== 6 || !list.length) loop = false;
            }
            //
            return sections;
        }
    },
    watch: {
        currentSection(val) {
            const { sections, list } = this;
            const len = sections.length;
            if (val >= len) return;
            let v,
                a = list.length % 6;
            if (val === len - 1 && a !== 0) v = a;
            else v = 6;
            this.imagesCountInCurrentSection = v;
        }
    },
    methods: {
        getTransform() {
            const { sections, currentSection } = this;
            return `transform: translateX(-${(100 / sections.length) * currentSection}%)`;
        }
    }
};
</script>
