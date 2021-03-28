<x-guardian-layout title="Password Confirm">
    <h1 class="mt-0">Confirm Access</h1>
    <div class="bg--default-light p-4 border--default mb-4 r-5">
        <strong class="text--default ">Warning:</strong> confirm your with your password.
    </div>
    <x-guardian-form-update-password-confirm></x-guardian-form-update-password-confirm>

    <x-slot name="content">
        <img width="100%" src="{{ asset('img/confirm.svg') }}" alt="confirm">
    </x-slot>

</x-guardian-layout>


