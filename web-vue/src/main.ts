import { createApp } from "vue";
import { createPinia } from "pinia";

import { createI18n } from "vue-i18n";

import App from "./App.vue";
import router from "./router";

import "./assets/main.css";

import enUs from "./i18n/en-us";
import id from "./i18n/id";

const i18n = createI18n({
    locale: "id",
    fallbackLocale: "en-us",
    messages: {
        id: id,
        "en-us": enUs,
    },
});

const app = createApp(App);

app.use(createPinia());
app.use(i18n);
app.use(router);

app.mount("#app");
