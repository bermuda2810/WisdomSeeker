<template>
    <ul class="chat">
        <li class="left clearfix" v-for="message in messages">
                <p v-bind:class="[message.is_me ? 'me' : 'bot']">
                    {{ message.user }} : {{ message.message }}
                </p>
        </li>
    </ul>
</template>

<script>
    export default {
        props: ['messages'],
    };
</script>