
<div class="avatar__container flex flex--align-center bg--dark p-4 r-3">
    <div class="avatar avatar--rounded mr-3">
        <img src="https://ui-avatars.com/api/?background=transparent&background=FED766&name={{$user->name}}" alt="avatar">
    </div>

    <div class="overflow text--default-light">
        <div class="ellipsis">{{ $user->name }}</div>
        <div class="avatar__email ellipsis">{{ $user->email }}</div>
    </div>
</div>
