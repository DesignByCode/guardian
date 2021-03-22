
<li {{ $attributes->merge(['class' => 'nav-link' ]) }}>
    <a class="flex justify--between" href="{{ $href ?? '#' }}">
        <span class="flex flex--align-center">
            <span class="nav-link__icon">
                {{ $icon ?? '' }}
            </span>
            <span>{{ $slot }}</span>
        </span>
        @if($count ?? false)
        <span class="nav-link__notification">
            <span class="nav-link__count">{{ $count  }}</span>
        </span>
        @endif
        @if(false)
            <svg class="nav-link__arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        @endif
    </a>

</li>
