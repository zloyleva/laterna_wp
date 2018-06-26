<template>
    <form action="" method="post" @submit.prevent="submitContactUs" class="contact_us">
        <input type="text" class="" name="user" class="input_name" v-model="input_name">
        <div class="form-group my-2">
            <input type="text" class="form-control" :placeholder="user_name_text" name="user_name"
                   v-validate="{ required: true, min: 3 }" v-model="user_name" :class="{'error_input': isNameInValid}">
        </div>
        <div class="form-group my-2">
            <input type="email" class="form-control" :placeholder="user_email_text" name="user_email"
                   v-validate="{ required: true, email: true }" v-model="user_email" :class="{'error_input': isEmailInValid}">
        </div>
        <div class="form-group my-2">
            <input type="text" class="form-control" :placeholder="user_msg_text" name="user_msg"
                   v-validate="{ required: true, min: 10 }" v-model="user_msg" :class="{'error_input': isMsgInValid}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">{{ button_name_text }}</button>
    </form>
</template>

<script>
    import VeeValidate from 'vee-validate';
    Vue.use(VeeValidate);

    export default {
        name: "ContactUsComponent",
        props: [
            'username_pl', 'useremail_pl', 'message_pl',  'button_name'
        ],
        data(){
            return {
                user_name_text: '',
                user_email_text: '',
                user_msg_text: '',
                button_name_text: '',
                input_name: '',
                user_name: '',
                user_email: '',
                user_msg: '',
                isEmailInValid: false,
                isNameInValid: false,
                isMsgInValid: false,
            }
        },
        created(){
            this.user_name_text = this.username_pl;
            this.user_email_text = this.useremail_pl;
            this.user_msg_text = this.message_pl;
            this.button_name_text = this.button_name;
        },
        methods:{
            submitContactUs(){
                console.log('submitGrowSubmit');
                if(this.isValidFields()){
                    this.sendAjax();
                }

                const array = [100, 3, 15, 70, 1, 205, 38, 11];

                let max = array[0];
                for(let i=0; i < array.length; i++){
                    if(max < array[i]){
                        max = array[i];
                    }
                }
                console.log(max);
            },
            sendAjax(){
                console.log('sendAjax');

                let params = new URLSearchParams();
                params.append('action', ajax_data.getInTouch);
                params.append('name', this.user_name);
                params.append('email', this.user_email);
                params.append('message', this.user_msg);
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
                this.isMsgInValid = this.fields.user_msg.invalid;
                return this.fields.user_email.valid && this.fields.user_name.valid && this.fields.user_msg.valid && !this.input_name;
            },
            cleanFields(){
                this.user_name = '';
                this.user_email = '';
                this.user_msg = '';
            }
        }
    }
</script>

<style scoped>

</style>