<template>

    <form class="row contact-form question-about-pricing" @submit.prevent="submitQuestionAboutPricing">
        <input type="text" class="input_name" name="user" v-model="input_name">
        <div class="col-md-4 my-2">
            <input type="text" class="form-control" :placeholder="first_name_pl" name="first_name"
                   v-validate="{ required: true, min: 3 }" :class="{'error_input': isFNameInValid}" v-model="first_name">
        </div>
        <div class="col-md-4 my-2">
            <input type="text" class="form-control" :placeholder="last_name_pl" name="last_name"
                   v-validate="{ required: true, min: 3 }" :class="{'error_input': isLNameInValid}" v-model="last_name">
        </div>
        <div class="col-md-4 my-2">
            <input type="text" class="form-control" :placeholder="business_name_pl" name="business_name"
                   v-validate="{ required: true, min: 3 }" :class="{'error_input': isBNameInValid}" v-model="business_name">
        </div>
        <div class="col-md-4 my-2">
            <input type="email" class="form-control" :placeholder="business_email_pl" name="business_email"
                   v-validate="{ required: true, email: true }" :class="{'error_input': isBEmailInValid}" v-model="business_email">
        </div>
        <div class="col-md-4 my-2">
            <input type="text" class="form-control" :placeholder="business_phone_pl" name="business_phone"
                   v-validate="{ required: true, min: 8}" :class="{'error_input': isBPhoneInValid}" v-model="business_phone">
        </div>
        <div class="col-md-4 my-2">
            <button class="btn btn-primary btn-block">{{ button_name_text }}</button>
        </div>
    </form>

</template>

<script>
    export default {
        name: "QuestionAboutPricing",
        props: [
            'first_name_pl', 'last_name_pl', 'business_name_pl', 'business_email_pl', 'business_phone_pl', 'button_name_text'
        ],
        data(){
          return {
              input_name: '',

              first_name: '',
              last_name: '',
              business_name: '',
              business_email: '',
              business_phone: '',

              isFNameInValid: false,
              isLNameInValid: false,
              isBNameInValid: false,
              isBEmailInValid: false,
              isBPhoneInValid: false,
          }
        },
        methods:{
            submitQuestionAboutPricing(){
                console.log('submitQuestionAboutPricing', this.isValidFields());
                if(this.isValidFields()){
                    this.sendAjax();
                }
            },
            sendAjax(){
                console.log('sendAjax');

                const name = 'First name:' + this.first_name + ' Last name:' + this.last_name + ' Business name:' + this.business_name;
                const contact = 'Email:' + this.business_email + 'Phone:' + this.business_phone;

                let params = new URLSearchParams();
                params.append('action', ajax_data.questionAboutPricing);
                params.append('name',name );
                params.append('email', contact);
                params.append('nonce', ajax_data.nonce);

                axios.post(ajax_data.call_url,params)
                    .then((response) => {
                        console.log(response.data);
                        this.cleanFields();
                    })
            },
            isValidFields(){
                this.isFNameInValid = this.fields.first_name.invalid;
                this.isLNameInValid = this.fields.last_name.invalid;
                this.isBNameInValid = this.fields.business_name.invalid;
                this.isBEmailInValid = this.fields.business_email.invalid;
                this.isBPhoneInValid = this.fields.business_phone.invalid;

                return this.fields.first_name.valid
                    && this.fields.last_name.valid
                    && this.fields.business_name.valid
                    && this.fields.business_email.valid
                    && this.fields.business_phone.valid
                    && !this.input_name;
            },
            cleanFields(){
                this.first_name = '';
                this.last_name = '';
                this.business_name = '';
                this.business_email = '';
                this.business_phone = '';
            }
        }
    }
</script>

<style scoped>

</style>