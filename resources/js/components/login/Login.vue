<template>
    <div>
        <template>
            <v-form @submit.prevent="login">
                <v-container>
                    <v-row>
                        <v-col cols="12" md="4">
                            <v-text-field
                                v-model="form.email"
                                label="E-mail"
                                type="email"
                                required
                            ></v-text-field>
                        </v-col>

                        <v-col cols="12" md="4">
                            <v-text-field
                                v-model="form.password"
                                label="Password"
                                type="password"
                                required
                            ></v-text-field>
                        </v-col>
                    </v-row>

                    
                        <div class="text-left">
                            <v-btn rounded color="primary" dark type="submit"
                                >Login</v-btn
                            >
                        </div>
                    
                </v-container>
            </v-form>
        </template>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                email: null,
                password: null
            }
        }
    },
    methods: {
        login(){
            axios.post('/api/auth/login', this.form)
            .then(res => console.log(res.data))
            .catch(error => console.log(error.response.data))
            
        }
    },
};
</script>

<style></style>
