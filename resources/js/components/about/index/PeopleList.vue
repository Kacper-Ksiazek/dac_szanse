<template>
    <div class="people-list-wrapper">
        <div class="people-list-item" v-for="item in list" :key="item.id" :class="activeId == item.id ? 'active' : ''">
            <!--  -->
            <div class="header">
                <h2 v-text="item.header"></h2>
                <i class="fa fa-chevron-down" @click="activeId = activeId == item.id ? null : item.id"></i>
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
</template>
<script>
export default {
    props: ["list"],
    data() {
        return {
            activeId: null
        };
    }
};
</script>
