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
export default {
    mounted() {
        this.scrollY = scrollY;

        this.translateElements("MOVE");
        //Touch images swappin'
        const handleImageSwap = e => {
            const { modalActiveImageIndex, all_images, swapXOnStart } = this;
            //
            let x;
            try {
                //Tougch event case
                x = e.changedTouches[0].clientX;
            } catch (error) {
                //Mouse event case
                x = e.x;
            }
            //
            if (x < swapXOnStart) {
                if (modalActiveImageIndex < all_images.length - 1) this.modalActiveImageIndex++;
            } else if (x > swapXOnStart) {
                if (modalActiveImageIndex > 0) this.modalActiveImageIndex--;
            }
        };
        //
        this.$refs.img.addEventListener("touchstart", e => (this.swapXOnStart = e.changedTouches[0].clientX));
        this.$refs.img.addEventListener("mousedown", e => (this.swapXOnStart = e.x));
        ["touchend", "mouseup"].forEach(event => this.$refs.img.addEventListener(event, handleImageSwap));
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
