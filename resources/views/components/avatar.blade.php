
<div class="avatar__container flex flex--align-center bg--dark p-4 r-3">
    <div class="avatar__group">
        <div class="avatar avatar--rounded mr-3">
            <img src="{{$user->avatar}}" alt="{{ $user->name }} avatar">
        </div>
        @if($user->haveAvatar() && ($delete ?? false))
            <a class="avatar__delete" onclick="event.preventDefault(); document.getElementById('delete-avatar-form').submit()" href="">
                <svg class="avatar__delete__icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10
                18a8
                8 0 100-16 8 8 0
                000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
            </a>
        @endif

    </div>

    <div class="overflow text--default-light">
        <div class="ellipsis">{{ $user->name }}</div>
        <div class="avatar__email ellipsis">{{ $user->email }}</div>
    </div>

    <form id="delete-avatar-form" style="display: none" action="{{ route('guardian.avatar.destroy') }}" method="post">
        @csrf
        @method('DELETE')
    </form>

</div>
