require("./bootstrap");

import Vue from "vue";

import { InertiaApp } from "@inertiajs/inertia-vue";
import { InertiaForm } from "laravel-jetstream";
import PortalVue from "portal-vue";
import vuelidate from "vuelidate";

import VuePlaceAutocomplete from "vue-place-autocomplete";
import vmodal from "vue-js-modal";
// import VueGoogleAutocomplete from "vue-google-autocomplete";

// Vue.use(VueGoogleAutocomplete, {
//   apiKey: 'AIzaSyBd7ECRwhIHigok30hTbbVhdbi3hegDevs', // Can also be an object. E.g, for Google Maps Premium API, pass `{ client: <YOUR-CLIENT-ID> }`
//   version: '...', // Optional
//   language: '...', // Optional
// });

// Vue.component("vue-google-autocomplete", VueGoogleAutocomplete)

Vue.use(VuePlaceAutocomplete);

Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);
Vue.use(vuelidate);
Vue.use(vmodal);

const app = document.getElementById("app");

new Vue({
    render: h =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: name => require(`./Pages/${name}`).default
            }
        })
}).$mount(app);
