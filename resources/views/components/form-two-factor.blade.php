
<div>
        @if(auth()->user()->two_factor_secret)
            <h4 class="m-0 mb-5">
                <svg class="icon text--success" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                {{ __('guardian::profile.two-factor-enabled') }}
            </h4>
        @else
            <h4 class="m-0 mb-5">
                <svg class="icon text--danger" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                {{ __('guardian::profile.two-factor-not-enabled') }}
            </h4>
            <p>
                {{__('guardian.profile.two-factor-authentication-is-enabled')}}
            </p>
        @endif

    @if (session('status') === 'two-factor-authentication-enabled')
        <div class="row mb-4">
            <div class="sm-col-12">
                <h4 class="m-0">{{ __('guardian::profile.qrcode') }}</h4>
                <p>{{ __('guardian::profile.two-factor-enabled-message') }}</p>
            </div>
            <div class="sm-col-12 qr-code">
                {!! auth()->user()->twoFactorQrCodeSvg() !!}
            </div>
        </div>
        <div class="row mb-4">
            <div class="sm-col-12 qr-code">
                <h4 class="m-0">{{ __('guardian::profile.recovery-codes') }}</h4>
                <p>
                    {{ __('guardian::profile.recovery-codes-message') }}
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
                            <em>{{ __('guardain::profile.disable-two-factor-question') }}</em>
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
