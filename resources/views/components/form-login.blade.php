<div>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form__group">
            <label for="email" class="form__label">Email</label>
            <div class="form__wrap @error('email') border--danger @enderror ">
                <input type="text" id="email" name="email" value="{{ old('email') }}" class="form__item">
            </div>
            @error('email')
                <small class="text--danger">✖  {{ $message }}</small>
            @enderror
        </div>
        <div class="form__group">
            <label for="password" class="form__label">Password</label>
            <div class="form__wrap @error('password') border--danger @enderror ">
                <input type="password" id="password" name="password" value="{{ old('password') }}" class="form__item">
            </div>
            @error('password')
                <small class="text--danger">✖  {{ $message }}</small>
            @enderror
        </div>
        <button class="btn btn--primary">LOGIN</button>
        <div class="divider my-5"></div>
        <div class="flex flex--align-center my-5 justify--between">
            <a href="{{ route('password.request') }}">Forgot my password</a>
            <a href="{{ route('register') }}">I don't have a account</a>
        </div>
    </form>
</div>
