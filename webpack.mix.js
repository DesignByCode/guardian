const mix = require('laravel-mix')

mix
    .sass('./resources/sass/guardian.sass', './public/css')
    .js('./resources/js/guardian.js', './public/js')
    .react()
    .copy('./public', '../../package-tester/public')

