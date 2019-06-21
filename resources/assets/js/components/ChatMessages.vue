<template>
    <ul id="messages">
        <li v-for="message in messages" v-bind:class="[message.is_me ? 'me' : 'bot']">
            {{ message.message }}
        </li>
    </ul>
</template>

<script>
    export default {
        props: ['messages'],
    };
</script>