require("./bootstrap");

import { createVuetify } from "vuetify";

import "vuetify/styles";
import { loadFonts } from "../../src/plugins/webfontloader";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";
import { createApp } from "vue";
import HelloWorld from "./components/Welcome.vue";

loadFonts();
const app = createApp({});
const vuetify = createVuetify({
    components,
    directives,
});
app.component("hello-world", HelloWorld);
app.use(vuetify);
app.mount("#app");
