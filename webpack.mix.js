const mix = require('laravel-mix')
const purgecss = require('@fullhuman/postcss-purgecss')
const cssnano = require('cssnano')

mix
    .sass('./resources/sass/guardian.sass', './public/css')
    .js('./resources/js/guardian.js', './public/js')
    .react()
    .options({
        terser: {
            extractComments: false,
        },
        postCss: [
            require('postcss-discard-duplicates'),
            purgecss({
                content: [
                    'resources/views/**/*.blade.php',
                    'resources/js/react/**/*.js'
                ],
                safelist: [/bg--*/, /\\*-col-*/]
            }),
            // cssnano({
            //     preset: 'default',
            //     discardComments: {
            //         removeAll: true,
            //     },
            // })
        ]
    })
    .copy('./public', '../../package-tester/public')

