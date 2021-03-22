<div>
    <form action="{{ route('user-profile-information.update') }}" method="post">
        @csrf
        @method('PUT')
        <div class="form__group">
            <label for="name" class="form__label">Name</label>
            <div class="form__wrap @error('name', 'updateProfileInformation') border--danger @enderror ">
                <input type="text" id="name" name="name" value="{{ request()->user()->name }}" class="form__item">
            </div>
            @error('name', 'updateProfileInformation')
            <small class="text--danger">✖  {{ $message }}</small>
            @enderror
        </div>


        <div class="form__group">
            <label for="email" class="form__label">Email</label>
            <div class="form__wrap @error('email', 'updateProfileInformation') border--danger @enderror ">
                <input type="text" id="email" name="email" value="{{ request()->user()->email }}" class="form__item">
            </div>
            @error('email', 'updateProfileInformation')
            <small class="text--danger">✖  {{ $message }}</small>
            @enderror
        </div>

        <div class="flex flex--align-center justify--between">
            <button class="btn btn--primary">UPDATE PROFILE</button>
        </div>
    </form>
</div>
