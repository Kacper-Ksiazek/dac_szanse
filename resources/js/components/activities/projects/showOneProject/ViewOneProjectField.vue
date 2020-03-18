<template>
    <div class="ds-a-add-project-view-item">
        <!--  -->
        <!-- HEADER CASE -->
        <!--  -->
        <div v-if="data.type == 'header'" class="header">
            <h1 v-text="data.content"></h1>
        </div>
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!-- TEXTAREA CASE -->
        <!--  -->
        <div v-if="data.type == 'textarea'" class="textarea">
            <p v-text="data.content"></p>
        </div>
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!-- LIST CASE -->
        <!--  -->
        <div v-if="data.type == 'list'" class="list">
            <ul>
                <li v-for="item in data.content" :key="item.id" v-text="item.content"></li>
            </ul>
        </div>
        <!--  -->
        <!--  -->
        <!--  -->
    </div>
</template>
<script>
export default {
    //
    props: ["data"]
};
</script>
