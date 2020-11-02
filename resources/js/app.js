/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



require('./bootstrap');
window.Vue = require('vue');


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('auto-complete', require('./components/AutoComplete.vue').default);
Vue.component('flight-searchform', require('./components/FlightSearchForm.vue').default);
Vue.component('flight-lists', require('./components/FlightList.vue').default);
Vue.component('flight-list-item', require('./components/FlightListItem.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

    created() {

        const formData = {
            "grant_type":"client_credentials",
            "client_id":"ZtX29lV6WZEtnTSv89PY2pOVEjISHJwY",
            "client_secret":"ou51ZAFY3zyT087Z"
        };

        const toUrlEncoded = obj => {
            return Object.keys(obj).map(k => encodeURIComponent(k) + '=' + encodeURIComponent(obj[k])).join('&')
        };

        const config = {
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        }

        axios.post("https://test.api.amadeus.com/v1/security/oauth2/token", toUrlEncoded(formData))
        .then(resp => {
            localStorage.setItem('accessToken', resp.data.access_token);
        })
        .catch(err => {
            console.log(err.response);
        });
    }
});
