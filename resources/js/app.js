/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});
import Test1Component from './components/Test1Component.vue';
app.component('test1-component', Test1Component);

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

import KrugComponent from './components/KrugComponent.vue';
app.component('krug-test', KrugComponent);


import Test2Component from './components/Test2Component.vue';
app.component('test2-component', Test2Component);

import AjaxComponent from './components/AjaxComponent.vue';
app.component('ajax', AjaxComponent);

import CharlineComponent from './components/CharlineComponent.vue';
app.component('charsline', CharlineComponent);

import KrugcharComponent from './components/KrugcharComponent.vue';
app.component('krugChar', KrugcharComponent);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');