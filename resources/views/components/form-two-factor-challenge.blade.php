<div>
    <form action="/two-factor-challenge" method="post">
        @csrf
        <div x-data="{toggle: true}">
            <div class="row">
                <div class="md-col-12 flex flex--row justify--start">
                    <button :class="{'btn--secondary border--secondary': toggle === true}"
                            type="button" @click.prevent="toggle = true"
                            class="btn btn--sm btn--default">Google Authenticator</button>
                    <button :class="{'btn--secondary border--secondary': toggle !== true}"
                            type="button"
                            @click.prevent="toggle = false"
                            class="btn btn--sm btn--default">Recovery Code</button>
                </div>
            </div>
            <div x-show="toggle" class="form__group">
                <label for="code" class="form__label">Google Authenticator Two Factor Code</label>
                <div class="form__wrap @error('code') border--danger @enderror">
                    <input id="code" name="code" type="text"
                           class="form__item">
                </div>
                @error('code')
                <small class="text--danger">{{ $message }}</small>
                @enderror
            </div>
            <div x-show="!toggle" class="form__group">
                <label for="recovery_code" class="form__label">Recovery Code</label>
                <div class="form__wrap @error('recovery_code') border--danger @enderror">
                    <input id="recovery_code" name="recovery_code" type="text"
                           class="form__item">
                </div>
                @error('recovery_code')
                <small class="text--danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn--primary">Continue</button>
    </form>
</div>
