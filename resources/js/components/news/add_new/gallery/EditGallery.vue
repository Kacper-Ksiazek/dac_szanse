<template>
    <div class="ds-news-edit-content-wrapper">
        <!--  -->
        <!-- LEFT SIDE -->
        <!--  -->
        <div class="ds-news-gallery-wrapper">
            <h1>Dodawanie nowej aktualności</h1>
            <button @click="$refs.image.click()" class="grey-btn">Dodaj element do galeri</button>
            <input @change="addItemToGallery" ref="image" class="d-none" type="file" accept="image/*" />

            <hr />
            <!--  -->
            <!--  -->
            <div class="gallery-items-wrapper">
                <!-- <div class="gallery-item" v-for="item in galleryHrefs" :key="item.id" :style="`background-image: url(${item.href})`"></div> -->
                <div class="gallery-item" v-for="(item, index) in galleryHrefs" :key="item.id">
                    <button @click="deleteItemFromGallery(index)" class="delete"><i class="fa fa-trash-o"></i></button>
                    <img class="gallery-item" :src="item.href" />
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</template>
<script>
export default {
    props: ["gallery", "galleryHrefs"],
    methods: {
        addItemToGallery(e) {
            if (!e.target.files[0]) return;
            const file = e.target.files[0];
            const reader = new FileReader();
            reader.readAsDataURL(file);

            reader.onload = e => {
                const { galleryHrefs, gallery } = this;
                let id = galleryHrefs.length ? galleryHrefs[0].id + 1 : 0;
                //
                galleryHrefs.unshift({
                    id,
                    href: e.target.result
                });
                gallery.unshift(file);
            };
        },
        //
        //
        //
        deleteItemFromGallery(index) {
            const { galleryHrefs, gallery } = this;
            [galleryHrefs, gallery].forEach(item => item.splice(index, 1));
        }
    }
};
</script>
