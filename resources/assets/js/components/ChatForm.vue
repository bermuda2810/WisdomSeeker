<template>
    <form>
        <input id="m"
               type="text"
               name="message"
               v-model="newMessage"
               @keydown.enter.prevent="sendMessage"
               :disabled="submitted">
            <button id="btn-chat" @click.prevent="sendMessage" :disabled="submitted">
                Send
            </button>
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