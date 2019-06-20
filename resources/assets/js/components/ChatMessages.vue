<template>
    <ul class="chat">
        <li class="left clearfix" v-for="message in messages">
            <div>
                <div class="header">
                    <strong class="primary-font">
                        {{ message.user }}
                    </strong>
                </div>
                <p v-bind:class="[message.is_me ? 'me' : 'bot']">
                    {{ message.message }}
                </p>
            </div>
        </li>
    </ul>
</template>

<script>
    export default {
        props: ['messages'],
    };
</script>