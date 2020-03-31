<template>
    <div class="ds-s-gallery-modal" v-if="index >= 0" ref="modal">
        <span class="ds-s-gallery-modal-exit" @click="closeModal">
            <i class="fa fa-times"></i>
        </span>
        <div class="ds-s-gallery-modal-image" :style="setPathBody(all_images[modalActiveImageIndex])"></div>
        <span class="next" @click="modalActiveImageIndex++" v-if="modalActiveImageIndex < all_images.length - 1"><i class="fa fa-chevron-right"></i></span>
        <span class="prev" @click="modalActiveImageIndex--" v-if="modalActiveImageIndex > 0"><i class="fa fa-chevron-left"></i></span>
        <!--  -->
        <span class="ds-s-gallery-order" v-text="orderNote()"></span>
        <!--  -->
    </div>
</template>
<script>
export default {
    props: ["index", "all_images", "prefix", "extensions"],
    methods: {
        closeModal(e) {
            if (this.pendingClosing) return;
            this.$refs.modal.classList.add("exit");
            this.pendingClosing = true;
            setTimeout(() => {
                this.$emit("close");
                this.$refs.modal.classList.remove("exit");
                this.pendingClosing = false;
            }, 400);
        },
        orderNote() {
            return `${this.modalActiveImageIndex + 1} z ${this.all_images.length}`;
        },
        setPathBody(value) {
            if (this.prefix == "DONT_USE_FILE_EXTENSION") return `background-image: url(${value})`;
            else if (this.extensions !== false) return `background-image: url('${this.prefix}${value}.jpg')`;
            else return `background-image: url('${this.prefix}${value}')`;
        }
    },
    data() {
        return {
            pendingClosing: false,
            modalActiveImageIndex: this.index
        };
    }
};
</script>
