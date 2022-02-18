<template>
    <v-layout>
        <v-app>
            <v-app-bar height="122" color="grey-darken-3" elevation="0">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
                iure eligendi placeat ducimus, mollitia deleniti facere eveniet
                cum pariatur? Animi voluptates sapiente expedita! Eaque sit
                quaerat repudiandae sunt non consequatur.
                <h1>{{ title }}</h1>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque
                similique id nemo delectus, iure corrupti maxime iste totam
                cupiditate voluptatum illum molestias voluptatem quas nostrum
                excepturi tenetur eos accusamus laudantium!

                {{ title }}

                First Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Cupiditate voluptate necessitatibus quam officiis explicabo,
                ducimus adipisci delectus cum aliquam pariatur? Ipsum culpa
                laboriosam minima rerum dolorem magni excepturi ipsam sint? For
                real
            </v-app-bar>
            <v-navigation-drawer width="150" color="grey-darken-2" permanent>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                sapiente labore velit dolorum adipisci animi saepe veritatis
                optio veniam neque odit sint in, voluptate natus enim corporis
                praesentium. Ipsa, vel? One
            </v-navigation-drawer>
            <v-navigation-drawer width="150" color="grey-darken-1" permanent
                >Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Mollitia laborum aperiam assumenda ipsam ex corrupti impedit
                harum quod, consequatur eum animi nihil beatae. Explicabo unde,
                atque tempore earum iste sunt. Two
            </v-navigation-drawer>
            <v-responsive
                >Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Laborum, asperiores? Alias error exercitationem quidem ut esse
                fuga aliquam magni, hic nemo natus non, repellat nihil, tenetur
                explicabo ab obcaecati laborum?</v-responsive
            >
            <v-app-bar height="48" color="grey" elevation="0">Three</v-app-bar>
            <v-navigation-drawer
                position="right"
                width="150"
                color="grey-lighten-1"
                permanent
                >Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Dolorum tenetur asperiores rerum autem optio facere quos tempora
                dolore laboriosam! Neque sunt quaerat voluptatibus earum, vel
                esse rerum nobis distinctio provident? Four</v-navigation-drawer
            >
            <v-app-bar
                position="bottom"
                height="48"
                color="grey-lighten-2"
                elevation="0"
                >Five</v-app-bar
            >
            <v-main>
                <v-card-actions>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aliquid impedit at ducimus necessitatibus corporis enim
                    labore recusandae porro voluptas ipsam tempora suscipit,
                    nisi natus blanditiis dolorem debitis esse inventore?
                    Ratione! Is there anything? {{ title }}

                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Blanditiis odit provident hic quia quos eius maxime beatae
                    ut inventore vel, recusandae vitae illum atque quaerat
                    laborum incidunt sequi? Velit, nesciunt. Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Reprehenderit
                    aperiam iure ratione laudantium, recusandae veniam quia
                    saepe harum quis eos doloremque incidunt voluptate
                    praesentium ut modi. Cumque at ipsam minus. Lorem ipsum
                    dolor, sit amet consectetur adipisicing elit. Quas, expedita
                    rerum nam harum et itaque obcaecati provident aliquid dicta
                    atque ipsa corrupti error omnis quidem ad porro. Eos, nemo
                    quae. Lorem ipsum, dolor sit amet consectetur adipisicing
                    elit. Quos dignissimos qui doloremque quis aliquam
                    voluptatem numquam iure, nesciunt provident ipsum dicta
                    optio nam? Sunt optio, odit praesentium quam iste maiores.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Earum, repudiandae fugit quidem deserunt magni incidunt eos
                    adipisci velit nobis distinctio dicta et, obcaecati maiores
                    odit cupiditate quas aliquid! Ex, explicabo? Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Perspiciatis,
                    optio amet nihil, fugit odit libero corrupti eos recusandae
                    fugiat dolorum quod! Ab nostrum assumenda dolor veniam
                    maiores, dolores ipsa! Dolore! Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Nulla laudantium obcaecati
                    voluptatum natus, labore numquam qui placeat vitae odio
                    expedita nesciunt nostrum, in blanditiis rerum suscipit,
                    officiis culpa inventore. Recusandae!
                </v-card-actions>

                <!-- <v-card elevation="0" height="100px"
                    >And this is the content</v-card
                > -->
            </v-main>
        </v-app>
    </v-layout>
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
