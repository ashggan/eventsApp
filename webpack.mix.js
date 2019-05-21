let mix = require('laravel-mix');

mix.setPublicPath('./themes/hambern-hambern-blank-bootstrap-4/assets')


mix.sass('themes/hambern-hambern-blank-bootstrap-4/assets/scss/main.scss', 'dist/css')
// .js('themes/hambern-hambern-blank-bootstrap-4/assets/js/scripts.js', 'dist/js')
;