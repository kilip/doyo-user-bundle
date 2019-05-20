import Vue from "vue";
import VueRouter from "vue-router";
import router from "./router";

import App from "./App.vue";
import BootstrapVue from "bootstrap-vue";

Vue.use(VueRouter);
Vue.use(BootstrapVue);

new Vue({
  el: "#vue",
  router,
  template: "<App/>",
  components: { App }
});
