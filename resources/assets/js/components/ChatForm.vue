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
            <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage" :disabled="submitted">
                Send
            </button>
        </span>
        <input id="checkbox"
               type="checkbox"
               name="checkbox"
               class="form-control
               input-sm"
               v-model="submittted">
    </div>

</template>

<script>
    export default {

        data() {
            return {
                newMessage: '',
                submitted: false
            }
        },

        methods: {
            sendMessage() {
                this.submitted = true
                console.log(this.submitted)
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