<x-guardian-layout title="Verify Email">

    <h1 class="mt-0">Verify Email</h1>
    <div class="bg--default-light border--default r-5 p-4 mb-5 ">
        And email was sent to your email address. Confirm the email or resend the email
    </div>
    <x-guardian-form-verify-email></x-guardian-form-verify-email>

    <x-slot name="content">
        <img width="100%" src="{{ asset('img/email-send.svg') }}" alt="Email Send">
    </x-slot>

</x-guardian-layout>


