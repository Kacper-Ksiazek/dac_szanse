/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component("menu-navs", require("./components/menu/MenuNavs.vue").default);
Vue.component("all-objects", require("./components/our_objects/AllObjects.vue").default);
Vue.component("path-bar", require("./components/PathBar").default);
Vue.component("oo-logo", require("./components/our_objects/OOLogo.vue").default);
Vue.component("dayroom-tasks", require("./components/our_objects/DayroomTasks.vue").default);
Vue.component("dayroom-gallery", require("./components/our_objects/DayroomGallery.vue").default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app"
});
