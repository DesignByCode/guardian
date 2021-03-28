
<div class="avatar__container flex flex--align-center bg--dark p-4 r-3">
    <div class="avatar avatar--rounded mr-3">
        <img src="{{$user->avatar}}" alt="{{ $user->name }} avatar">
    </div>

    <div class="overflow text--default-light">
        <div class="ellipsis">{{ $user->name }}</div>
        <div class="avatar__email ellipsis">{{ $user->email }}</div>
    </div>
</div>
