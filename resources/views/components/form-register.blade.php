<div>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="form__group">
            <label for="name" class="form__label">Name</label>
            <div class="form__wrap @error('name') border--danger @enderror ">
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="form__item">
            </div>
            @error('name')
                <small class="text--danger">✖  {{ $message }}</small>
            @enderror
        </div>

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

        <div class="form__group">
            <label for="password_confirmation" class="form__label">Password Confirm</label>
            <div class="form__wrap @error('password_confirmation') border--danger @enderror ">
                <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form__item">
            </div>
            @error('password_confirmation')
                <small class="text--danger">✖  {{ $message }}</small>
            @enderror
        </div>

        <div class="flex flex--align-center justify--between">
            <button class="btn btn--primary">REGISTER</button>
            <a href="{{ route('login') }}">I already have a account</a>
        </div>

    </form>
</div>
