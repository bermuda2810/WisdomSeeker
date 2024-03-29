@extends('layouts.app')

@section('content')
        <chat-messages :messages="messages"></chat-messages>
        <chat-form
                v-on:messagesent="addMessage" :submitted="submitted"
        ></chat-form>
@endsection