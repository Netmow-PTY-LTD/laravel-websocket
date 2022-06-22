<template>
    <div class="row">
        <div class="col-8">
            <div class="card card-default">
                <div class="card-header">Messages</div>
                <div class="card-body p-0">
                    <ul class="list-unstyled" style="height:300px;overflow-y: scroll;">
                        <li class="p-2" v-for="(message, index) in messages" :key="index">
                            <strong>{{message.user.name}}</strong>
                            {{ message.message }}
                        </li>
                    </ul>
                </div>

                <input type="text" class="form-control" name="message" placeholder="Enter your message...">

            </div>
            <span class="text-muted">user is typing...</span>
        </div>

        <div class="col-4">
            <div class="card card-default">
                <div class="card-heaer">
                    <div class="card-body">
                        <ul>
                            <li class="py-2">Maksud</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                messages: ''
            }
        },

        created(){
            this.fetchMessages();
        },
        methods:{
            fetchMessages(){
                axios.get('/messages').then(response => {
                    this.messages = response.data;
                })
            }
        }
    }
</script>
