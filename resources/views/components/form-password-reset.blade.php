<form action="{{ route('password.update') }}" method="post">
    @csrf

    <input name="email" type="hidden" value="{{ request()->email }}">
    <input name="token" type="hidden" value="{{ request()->token }}">

    <div class="form__group">
        <label for="password" class="form__label">Password</label>
        <div class="form__wrap @error('password') border--danger @enderror">
            <input id="password" name="password" type="password" value="{{ old('password') }}" class="form__item">
        </div>
        @error('password')
            <small class="text--danger">✖  {{ $message }}</small>
        @enderror
    </div>

    <div class="form__group">
        <label for="password_confirmation" class="form__label">Password Confirm</label>
        <div class="form__wrap">
            <input id="password_confirmation" name="password_confirmation" type="password"  class="form__item">
        </div>
    </div>
    <button type="submit" class="btn btn--block btn--primary">Change password</button>
</form>

