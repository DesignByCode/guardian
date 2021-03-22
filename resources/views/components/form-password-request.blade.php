<form action="{{ route('password.request') }}" method="post">
    @csrf

    <div class="form__group">
        <label for="email" class="form__label">Email</label>
        <div class="form__wrap @error('email') border--danger @enderror">
            <input id="email" name="email" type="text" value="{{ old('email') }}" class="form__item">
        </div>
        @error('email')
            <small class="text--danger">✖  {{ $message }}</small>
        @enderror
    </div>

    <button type="submit" class="btn btn--primary">Login</button>
</form>
