<template>
    <v-app>
        <v-app-bar height="22" color="grey-darken-3" elevation="0"></v-app-bar>
        <v-navigation-drawer width="72" color="grey-darken-2" permanent>
            <h1>{{ title }}</h1>
        </v-navigation-drawer>
        <v-navigation-drawer width="150" color="grey-darken-1" permanent
            >Let's see if it apears
        </v-navigation-drawer>
        <v-app-bar height="48" color="grey" elevation="0"></v-app-bar>
        <v-navigation-drawer
            position="right"
            width="150"
            color="grey-lighten-1"
            permanent
        ></v-navigation-drawer>
        <v-app-bar
            position="bottom"
            height="48"
            color="grey-lighten-2"
            elevation="0"
        ></v-app-bar>
        <v-main>
            <v-card elevation="0" height="400px"></v-card>
        </v-main>
    </v-app>

    <!-- <div class="container-fluid"> -->
    <div class="d-flex w-15 flex-column bg-secondary bd-highlight">
        <div class="p-2 bd-highlight text-gray-200">Product</div>
        <div class="p-2 bd-highlight">Categories</div>
        <div class="p-2 bd-highlight">Flex item 3</div>
    </div>
    <!-- </div> -->
</template>

<script>
export default {
    setup() {
        return {
            title: "Laravel + Vue + Pinia + Vuetify",
        };
    },
};
</script>
