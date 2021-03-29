<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title . ' - ' .  config('app.name') : config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/guardian.css') }}">
    <script src="{{ asset('js/guardian.js') }}" defer></script>
</head>
<body class="guardian__auth">
    <x-guardian-fixed-flash></x-guardian-fixed-flash>
    <div class="wrapper">
        <div class="row flex flex--align-center">
            <div class="md-col-5">
                {{ $slot }}
            </div>
            <div class="md-offset-1 md-col-6 my-5">
                {{ $content ?? '' }}
            </div>
        </div>
    </div>
</body>
</html>
