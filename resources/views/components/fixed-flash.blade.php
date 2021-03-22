@php
    $code = Str::slug(session('status'));
@endphp


@if (session('status') && array_keys(config('guardian.status')))
    <x-guardian-alert type="{{ config('guardian.status')[$code]['type'] }}">
        <div class="py-3">
            {{ config('guardian.status')[$code]['message'] }}
        </div>
    </x-guardian-alert>
@elseif(session('errors'))
    <x-guardian-alert type="danger">
        <div class="py-3">
            Something when wrong!
        </div>
    </x-guardian-alert>
@endif
