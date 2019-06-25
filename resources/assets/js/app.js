
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

Vue.component('chat-messages', require('./components/ChatMessages.vue'));
Vue.component('chat-form', require('./components/ChatForm.vue'));

const app = new Vue({
    el: '#app',
    data: {
        messages: [],
        submitted: false
    },

    methods: {
        addMessage(message) {
            if (this.isBlank(message.message)) {
                return
            }
//            this.submitted = true
            message.user = 'me'
            message.is_me = 'true'
            this.addMessageToUI(message)
            fakeResponse = {
                message: 'xin chào',
                user: 'bot',
                is_me: false

            }
            this.addMessageToUI(fakeResponse)
//            axios.post('/messages', message).then(response => {
//                this.submitted = false
//                this.addMessageToUI(response.data)
//            });
        },

        addMessageToUI(message) {
            this.messages.push({
                message: message.message,
                user: message.user,
                is_me : message.is_me
            });
        },

        isBlank(str) {
            return (!str || /^\s*$/.test(str));
        }
    }
});