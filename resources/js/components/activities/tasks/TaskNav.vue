<template>
    <div class="ds-a-tasks-navs">
        <button class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Wszystkie zajęcia <i class="fa fa-bars"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a v-for="item in data" :key="item.header" class="dropdown-item" :href="item.href">
                <span v-text="item.header"></span>
            </a>
        </div>
    </div>
</template>
<script>
export default {
    props: ["data"]
};
</script>
