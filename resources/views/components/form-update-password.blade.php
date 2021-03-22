<div>
    <form action="{{ route('user-password.update') }}" method="post">
        @csrf
        @method('PUT')
        <div class="form__group">
            <label for="current_password" class="form__label">Current Password</label>
            <div class="form__wrap @error('current_password', 'updatePassword') border--danger @enderror ">
                <input type="password" id="current_password" name="current_password"  class="form__item">
            </div>
            @error('current_password', 'updatePassword')
            <small class="text--danger">✖  {{ $message }}</small>
            @enderror
        </div>

        <div class="form__group">
            <label for="password" class="form__label">New Password</label>
            <div class="form__wrap @error('password', 'updatePassword') border--danger @enderror ">
                <input type="password" id="password" name="password"  class="form__item">
            </div>
            @error('password', 'updatePassword')
            <small class="text--danger">✖  {{ $message }}</small>
            @enderror
        </div>

        <div class="form__group">
            <label for="password_confirmation" class="form__label">Confirm Password</label>
            <div class="form__wrap">
                <input type="password" id="password_confirmation" name="password_confirmation"  class="form__item">
            </div>
        </div>



        <div class="flex flex--align-center justify--between">
            <button class="btn btn--primary">UPDATE PASSWORD</button>
        </div>
    </form>
</div>
