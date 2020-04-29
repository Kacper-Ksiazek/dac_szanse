<template>
    <div class="ds-s-gallery-modal" v-if="index >= 0" ref="modal">
        <span class="ds-s-gallery-modal-exit" @click="closeModal">
            <i class="fa fa-times"></i>
        </span>
        <div class="ds-s-gallery-modal-image" :style="setPathBody(all_images[modalActiveImageIndex])" ref="img"></div>
        <span class="next" @click="modalActiveImageIndex++" v-if="modalActiveImageIndex < all_images.length - 1"><i class="fa fa-chevron-right"></i></span>
        <span class="prev" @click="modalActiveImageIndex--" v-if="modalActiveImageIndex > 0"><i class="fa fa-chevron-left"></i></span>
        <!--  -->
        <span class="ds-s-gallery-order" v-text="orderNote()"></span>
        <!--  -->
    </div>
</template>
<script>
import { tougchSwapping } from "../../../scripts/tougchSwapping";
export default {
    mounted() {
        this.scrollY = scrollY;
        const rightCaseSwap = () => {
            const { modalActiveImageIndex, all_images } = this;
            if (modalActiveImageIndex < all_images.length - 1) this.modalActiveImageIndex++;
        };
        //
        const leftCaseSwap = () => {
            if (this.modalActiveImageIndex > 0) this.modalActiveImageIndex--;
        };
        //
        tougchSwapping({
            that: this,
            methodIfRight: rightCaseSwap,
            methodIfLeft: leftCaseSwap,
            initValue: "swapXOnStart",
            element: this.$refs.img
        });
        //This action is require to correct working of scroll block
        this.translateElements("MOVE");
        //
    },
    props: ["index", "all_images", "prefix", "extensions"],
    methods: {
        //
        translateElements(state) {
            if (state !== "MOVE" && state !== "REVERSE") return;
            const { scrollY } = this;
            //
            document.body.style.position = state === "MOVE" ? "fixed" : "static";
            document.body.style.transform = state === "MOVE" ? `translateY(-${scrollY}px)` : null;
            document.body.style.paddingRight = state === "MOVE" ? `17px` : null;
            document.getElementById("main-menu").style.transform = state === "MOVE" ? `translateY(${scrollY}px)` : null;
            this.$refs.modal.style.transform = state === "MOVE" ? `translateY(${scrollY}px)` : null;
        },
        //
        closeModal(e) {
            if (this.pendingClosing) return;
            this.$refs.modal.classList.add("exit");
            this.pendingClosing = true;
            //
            setTimeout(() => {
                this.$emit("close");
                this.$refs.modal.classList.remove("exit");
                this.pendingClosing = false;
                //
                this.translateElements("REVERSE");
                scrollTo(0, this.scrollY);
            }, 400);
        },
        //
        orderNote() {
            return `${this.modalActiveImageIndex + 1} z ${this.all_images.length}`;
        },
        //
        setPathBody(value) {
            if (this.prefix == "DONT_USE_FILE_EXTENSION") return `background-image: url(${value})`;
            else if (this.extensions !== false) return `background-image: url('${this.prefix}${value}.jpg')`;
            else return `background-image: url('${this.prefix}${value}')`;
        }
        //
    },
    data() {
        return {
            pendingClosing: false,
            modalActiveImageIndex: this.index,
            scrollY: null,
            swapXOnStart: null
        };
    }
};
</script>
