<template>
    <div class="input-group">
        <input id="m"
               type="text"
               name="message"
               class="form-control
               input-sm"
               v-model="newMessage"
               @keyup.enter="sendMessage">
        <span class="input-group-btn">
            <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">
                Send
            </button>
        </span>
    </div>
</template>

<script>
    export default {

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