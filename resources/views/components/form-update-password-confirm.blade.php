<div>
    <form action="{{ route('password.confirm') }}" method="post">
        @csrf
        <div class="form__group">
            <label for="password" class="form__label">Password</label>
            <div class="form__wrap @error('password') border--danger @enderror ">
                <input type="password" id="password" name="password"  class="form__item">
            </div>
            @error('password')
                <small class="text--danger">✖  {{ $message }}</small>
            @enderror
        </div>

        <div class="flex flex--align-center justify--between">
            <button class="btn btn--primary">CONTINUE</button>
        </div>
    </form>
</div>
