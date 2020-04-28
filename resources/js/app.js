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
Vue.component("dayroom-gallery", require("./components/our_objects/dayroom/gallery/Index.vue").default);
Vue.component("path-bar", require("./components/PathBar").default);
Vue.component("scroll-btn", require("./components/ScrollBTN.vue").default);
//Nasze placówki-index
Vue.component("all-objects", require("./components/our_objects/AllObjects.vue").default);
//Nasze pracowki-logo
Vue.component("oo-logo", require("./components/our_objects/OOLogo.vue").default);
//Świetlica-zajęcia
Vue.component("dayroom-tasks", require("./components/our_objects/dayroom/TaskList.vue").default);
//Zajęcia-index
Vue.component("our-tasks", require("./components/activities/tasks/Index.vue").default);
//Zajęcia-logo
Vue.component("tasks-logo", require("./components/activities/tasks/TasksLogo.vue").default);
//Galeria do pojedynczego zajęcia, ta na dole
Vue.component("gallery", require("./components/activities/tasks/SingleTaskGallery.vue").default);
//Dzialalność-logo
Vue.component("activites-logo", require("./components/activities/index/ActivitesLogo.vue").default);
//Dzialalnosc index
Vue.component("our-activities", require("./components/activities/index/ActivitiesIndex.vue").default);
//Jak pomoc logo
Vue.component("help-index", require("./components/help/index/HelpIndex.vue").default);
//Projekty Index
Vue.component("projects-index", require("./components/activities/projects/index/Index.vue").default);
//Projekty Logo
Vue.component("projects-logo", require("./components/activities/projects/ProjectsLogo.vue").default);
//Podglad jednego projektu
Vue.component("single-project", require("./components/activities/projects/showOneProject/Index.vue").default);
//Dodaj nowy projekt
Vue.component("add-project", require("./components/activities/projects/add_project/AddProject.vue").default);
//Jak pomoc logo
Vue.component("help-logo", require("./components/help/Logo.vue").default);
//Galeria ze zdjeciami, co robia za a hrefy
Vue.component("href-gallery", require("./components/GalleryWithHrefImg.vue").default);
//Dodaniwenie nowej aktualności
Vue.component("add-news", require("./components/news/add_new/AddNewMain.vue").default);
//Jeden element na liscie aktualnosci w indexie
Vue.component("news-on-list", require("./components/news/add_new/preview/on_list/Item.vue").default);
//Aktywności logo
Vue.component("news-logo", require("./components/news/Logo.vue").default);
//Wyswietlanie pojedyczej aktualnosci
Vue.component("single-news", require("./components/news/add_new/preview/view/ViewMain.vue").default);
//Aktualności wyswietlanie wszystkich aktualnosci
Vue.component("news-index", require("./components/news/NewsIndex.vue").default);
//O nas logo
Vue.component("about-logo", require("./components/about/Logo.vue").default);
//Index
Vue.component("about-index", require("./components/about/index/IndexMain.vue").default);
//WITAMY
Vue.component("welcome", require("./components/welcome/WelcomeWrapper.vue").default);
//STOPKA
Vue.component("ds-footer", require("./components/Footer.vue").default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app"
});
