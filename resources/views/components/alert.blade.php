
<div {{ $attributes->merge(['class' => 'bg--'.$type. ' text--white border--'.$type. ' shadow--5 b-0 nav--fixed flashIn' ]) }}>
    <div class="panel__body">
        {{ $slot }}
    </div>
</div>
