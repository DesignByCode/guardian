<x-guardian-layout type="dashboard" title="Profile">
    <div class="wrapper--fluid">
        <div class="row">
            <div class="md-col-12">
                <h1 class="m-0">Profile</h1>
                <x-guardian-avatar uniqueId="profile-page" :user="auth()->user()" size="200" delete></x-guardian-avatar>
            </div>
        </div>
        @if( config('guardian.features.enable-profile-update'))
            <div class="row">
                <div class="lg-col-6">
                    <h2>{{ __('guardian::profile.update-user') }}</h2>
                    <p>
                        {{ __('guardian::profile.update-user-description') }}
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
                    <h2>{{ __('guardian::profile.upload-avatar-title') }}</h2>
                    <p>
                        {{ __('guardian::profile.upload-avatar-description') }}
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
                    <h2>{{__('guardian::profile.update-password-title')}}</h2>
                    <ul>
                        <li>{{ __('guardian::profile.password-8-characters') }}</li>
                        <li>{{ __('guardian::profile.password-uppercase-lowercase-letters') }}</li>
                        <li>{{ __('guardian::profile.password-mixture-letters-numbers') }}</li>
                        <li>{{ __('guardian::profile.password-one-special-character') }}</li>
                    </ul>
                    <div class="bg--default-light p-4 border--default r-5">
                        {{ __('guardian::profile.password-update-password-note') }}
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
                    <h2>{{__('guardian::profile.two-factor-authentication')}}</h2>
                    <p>
                        {{ __('guardian::profile.two-factor-description') }}
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
                    <h2>{{__('guardian::profile.danger-zone')}}</h2>
                </div>
                <div class="lg-col-6">
                    <x-guardian-form-delete-account></x-guardian-form-delete-account>
                </div>
            </div>
        @endif
    </div>

</x-guardian-layout>


