<template>
    <form action="" class="form-inline justify-content-center" method="post">
        <div class="input-group mb-2 mr-sm-2">
            <input name="username" type="text" class="form-control" :placeholder="username_text" v-model="user">
        </div>
        <div class="input-group mb-2 mr-sm-2">
            <input name="useremail" type="email" class="form-control" :placeholder="useremail_text" v-model="email">
        </div>
        <button type="submit" class="btn btn-primary mb-2">{{ button_name_text }}</button>
    </form>
</template>

<script>
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
            }
        },
        created(){
            this.username_text = this.username_pl;
            this.useremail_text = this.useremail_pl;
            this.button_name_text = this.button_name;
        },
        methods:{
            sendAjax(){
                let params = new URLSearchParams();
                params.append('action', ajax_data.grow);
                params.append('name', this.user);
                params.append('email', this.email);

                axios.post(ajax_data.call_url,params)
                    .then((response) => {
                    console.log(response.data)
                })
            }
        }
    }
</script>

<style scoped>

</style>