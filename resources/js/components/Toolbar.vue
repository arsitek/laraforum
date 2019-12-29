<template>
    <div>
        <v-toolbar>
            <v-toolbar-title>Helpdesk</v-toolbar-title>

            <v-spacer></v-spacer>

            <div>
                <v-btn text>Forum</v-btn>
                <v-btn text>Ask Question</v-btn>
                <v-btn text>Category</v-btn>
                <router-link to="/login">
                    <v-btn text>login</v-btn>
                </router-link>
                

            </div>

            <template v-if="$vuetify.breakpoint.smAndUp">
                <v-btn icon>
                    <v-icon>mdi-export-variant</v-icon>
                </v-btn>
                <v-btn icon>
                    <v-icon>mdi-delete-circle</v-icon>
                </v-btn>
                <v-btn icon>
                    <v-icon>mdi-plus-circle</v-icon>
                </v-btn>
            </template>
        </v-toolbar>
    </div>
</template>
