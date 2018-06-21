<template>
    <form action="" class="form-inline justify-content-center ready_to_grow" method="post" @submit.prevent="submitGrowSubmit">
        <input type="text" class="" name="user" class="input_name" v-model="input_name">
        <div class="input-group mb-2 mr-sm-2">
            <input v-validate="{ required: true, min: 3 }" name="user_name" type="text" class="form-control"
                   :placeholder="username_text" v-model="user" :class="{'error_input': isNameInValid}">
        </div>
        <div class="input-group mb-2 mr-sm-2">
            <input v-validate="{ required: true, email: true }" name="user_email" type="email" class="form-control"
                   :placeholder="useremail_text" v-model="email" :class="{'error_input': isEmailInValid}">
        </div>
        <button type="submit" class="btn btn-primary mb-2">{{ button_name_text }}</button>
    </form>
</template>

<script>

    import VeeValidate from 'vee-validate';
    Vue.use(VeeValidate);

    export default {
        name: "ReadyToGrowSendComponent",
        props:[
            'username_pl', 'useremail_pl', 'button_name'
        ],
        data(){
            return {
                username_text: '',
                useremail_text: '',
                button_name_text: '',
                user: '',
                email: '',
                isEmailInValid: false,
                isNameInValid: false,
                input_name: ''
            }
        },
        created(){
            this.username_text = this.username_pl;
            this.useremail_text = this.useremail_pl;
            this.button_name_text = this.button_name;
        },
        computed:{

        },
        methods:{
            submitGrowSubmit(){
              console.log('submitGrowSubmit');
                if(this.isValidFields()){
                    this.sendAjax();
                }

            },
            sendAjax(){

                let params = new URLSearchParams();
                params.append('action', ajax_data.grow);
                params.append('name', this.user);
                params.append('email', this.email);
                params.append('nonce', ajax_data.nonce);

                axios.post(ajax_data.call_url,params)
                    .then((response) => {
                        console.log(response.data);
                        this.cleanFields();
                    })

            },
            isValidFields(){
                this.isEmailInValid = this.fields.user_email.invalid;
                this.isNameInValid = this.fields.user_name.invalid;
                return this.fields.user_email.valid && this.fields.user_name.valid && !this.input_name;
            },
            cleanFields(){
                this.user = '';
                this.email = '';
            }
        }
    }
</script>

<style scoped>

</style>