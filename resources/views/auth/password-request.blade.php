<x-guardian-layout title="Password Forgot">
    <h1 class="mt-0">Forgot Password</h1>
    <x-guardian-form-password-request></x-guardian-form-password-request>
    <x-slot name="content">
        <img width="100%" src="{{ asset('img/forgot.svg') }}" alt="forgot image">
    </x-slot>
</x-guardian-layout>
