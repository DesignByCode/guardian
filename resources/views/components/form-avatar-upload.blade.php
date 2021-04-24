<div>
    <form action="{{ route('guardian.avatar.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form__group">
            <label for="avatar-input" class="form__label">Upload Avatar</label>
            <div class="form__wrap @error('avatar') border--danger @enderror">
                <input class="form__item" type="file" name="avatar" id="avatar-input">
            </div>
            @error('avatar')
            <small class="text--danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="p-4 mb-4">
            <img class="avatar__upload__preview" id="imagePreview" alt="preview">
        </div>
        <button type="submit"  class="button btn btn--primary">Upload</button>
    </form>
</div>
