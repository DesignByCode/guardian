<x-guardian-layout type="dashboard" title="Profile">
    <div class="wrapper--fluid">
        <div class="row">
            <div class="md-col-12">
                <h1 class="m-0">Profile</h1>
                <x-guardian-avatar  :user="auth()->user()" size="100"></x-guardian-avatar>
            </div>
        </div>
        @if( config('guardian.features.enable-profile-update'))
            <div class="row">
                <div class="lg-col-6">
                    <h2>Update User Information</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores commodi consequatur.
                    </p>
                </div>
                <div class="lg-col-6">
                    <div class="panel">
                        <div class="p-5">
                            <x-guardian-form-update-user></x-guardian-form-update-user>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider my-6"></div>
        @endif
        @if( config('guardian.features.enable-profile-update'))
            <div class="row">
                <div class="lg-col-6">
                    <h2>Upload Avatar</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores commodi consequatur.
                    </p>
                </div>
                <div class="lg-col-6">
                    <div class="panel">
                        <div class="p-5">
                            <x-guardian-form-avatar-upload></x-guardian-form-avatar-upload>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider my-6"></div>
        @endif
        @if( config('guardian.features.enable-password-update'))
            <div class="row">
                <div class="lg-col-6">
                    <h2>Update Password</h2>
                    <ul>
                        <li>At least 8 characters—the more characters, the better</li>
                        <li>A mixture of both uppercase and lowercase letters</li>
                        <li>A mixture of letters and numbers</li>
                        <li>Inclusion of at least one special character, e.g., ! @ # ? ]</li>
                    </ul>
                    <div class="bg--default-light p-4 border--default r-5">
                        <strong>Note:</strong> do not use < or > in your password, as both can cause problems in Web browsers
                    </div>

                </div>
                <div class="lg-col-6">
                    <div class="panel">
                        <div class="p-5">
                            <x-guardian-form-update-password></x-guardian-form-update-password>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider my-6"></div>
        @endif
        @if( config('guardian.features.enable-two-factor-authentication'))
            <div class="row">
                <div class="lg-col-6">
                    <h2>Two Factor Authentication</h2>
                    <p>
                        Two-factor authentication is an electronic authentication method in which a device user is granted access to a website or application
                        only after successfully presenting two or more pieces of evidence (or factors) to an authentication mechanism.
                    </p>
                </div>
                <div class="lg-col-6">
                    <div class="panel">
                        <div class="p-5">
                            <x-guardian-form-two-factor></x-guardian-form-two-factor>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider my-6"></div>
        @endif

        @if( config('guardian.features.enable-delete-own-account'))
            <div class="row">
                <div class="lg-col-6">
                    <h2>Danger Zone</h2>
                </div>
                <div class="lg-col-6">
                    <x-guardian-form-delete-account></x-guardian-form-delete-account>
                </div>
            </div>
        @endif
    </div>

</x-guardian-layout>


