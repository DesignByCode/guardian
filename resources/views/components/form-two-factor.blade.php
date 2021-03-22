
<div>
        @if(auth()->user()->two_factor_secret)
            <h4 class="m-0 mb-5">
                <svg class="icon text--success" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Two Factor Authentication is enabled.</h4>
        @else
            <h4 class="m-0 mb-5">
                <svg class="icon text--danger" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Two Factor Authentication is not enabled.</h4>
            <p>
                When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may
                retrieve this token from your phone's
                <a target="_blank" rel="nofollow"  href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2">Google Authenticator</a> application.
            </p>
        @endif

    @if (session('status') === 'two-factor-authentication-enabled')
        <div class="row mb-4">
            <div class="sm-col-12">
                <h4 class="m-0">QRCode</h4>
                <p>Two factor authentication is now enabled. Scan the following QR code using your phone's authenticator application.</p>
            </div>
            <div class="sm-col-12 qr-code">
                {!! auth()->user()->twoFactorQrCodeSvg() !!}
            </div>
        </div>
        <div class="row mb-4">
            <div class="sm-col-12 qr-code">
                <h4 class="m-0">Recovery Codes</h4>
                <p>
                    Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.
                </p>
            </div>
            <div class="sm-col-12">
                <ul class="list">
                    @foreach(auth()->user()->recoveryCodes() as $code)
                        <li>{{ $code }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

    @endif

        @if(auth()->user()->two_factor_secret)

            <form action="/user/two-factor-authentication" method="post">
                @csrf
                @method('DELETE')
                <div x-data="{open: false}">

                    <button x-show="!open" @click.prevent="open = true" class="btn btn--primary" type="button">Disable</button>

                    <div x-show="open" >
                        <div class="p-4 r-4 mb-5 border--warning text--warning bg--warning-light">
                            <em>Are you sure you want to disable two factor authentication?</em>
                        </div>
                        <div class="btn__group r-4">
                            <button type="submit"  class="btn btn--primary">Yes</button>
                            <button @click.prevent="open = false"  type="button" class="btn btn--primary-outline text--dark">No</button>
                        </div>
                    </div>
                </div>
            </form>
        @else
            <form action="/user/two-factor-authentication" method="post">
                @csrf
                <button class="btn  btn--primary">Enable</button>
            </form>
        @endif


</div>
