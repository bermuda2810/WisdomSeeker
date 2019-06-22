<template>
    <form class="input-group">
        <input id="m"
               type="text"
               name="message"
               class="form-control
               input-sm"
               v-model="newMessage"
               @keydown.enter.prevent="sendMessage"
               :disabled="submitted">
        <span class="input-group-btn">
            <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage" :disabled="submitted">
                Send
            </button>
        </span>
    </form>

</template>

<script>
    export default {

        props: ['submitted'],

        data() {
            return {
                newMessage: ''
            }
        },

        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    user: this.user,
                    message: this.newMessage,
                    is_me : true
                });
                this.newMessage = ''
            }
        }
    }
</script>