<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/guardian.css') }}?{{ Str::uuid() }}">
    <script src="{{ asset('js/guardian.js') }}" defer></script>
    {{ $styles ?? '' }}
    {{ $scripts ?? '' }}
</head>
<body class="guardian__dashboard">
    <x-guardian-fixed-flash></x-guardian-fixed-flash>
    <div class="grid">
        <x-guardian-sidebar-nav>

        </x-guardian-sidebar-nav>
        <main class="main">
            {{ $slot  }}
        </main>
    </div>

</body>
</html>
