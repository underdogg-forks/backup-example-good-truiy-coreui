let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Global
 |--------------------------------------------------------------------------
 |
 | Mix rules for global things
 |
 */

mix.copy([
    'bower_components/fontawesome/fonts/*',
    'bower_components/simple-line-icons/fonts/*'
], 'public/assets/fonts');

mix.copy([
    'bower_components/fontawesome/css/font-awesome.min.css',
    'bower_components/fontawesome/css/font-awesome.css',
    'bower_components/fontawesome/css/font-awesome.css.map',
    'bower_components/simple-line-icons/css/simple-line-icons.css',
], 'public/assets/css');

/*
 |--------------------------------------------------------------------------
 | App
 |--------------------------------------------------------------------------
 |
 | Mix rules for the app.
 |
 */

mix.js([
    'resources/assets/app/js/app.js',
], 'public/assets/app/app.js');

mix.sass('resources/assets/app/sass/app.scss', 'public/assets/app/app.css');

/*
 |--------------------------------------------------------------------------
 | Admin
 |--------------------------------------------------------------------------
 |
 | Mix rules for the admin (core.ui).
 |
 */

mix.combine([
    'bower_components/jquery/dist/jquery.js',
    'bower_components/popper.js/dist/umd/popper.js',
    'bower_components/bootstrap/dist/js/bootstrap.js',
    'bower_components/pace/pace.js',
    'bower_components/chart.js/dist/Chart.js'
], 'public/assets/admin/components.js');

mix.js([
    'resources/assets/admin/js/views/charts.js',
    'resources/assets/admin/js/views/main.js',
    'resources/assets/admin/js/views/widgets.js',
    'resources/assets/admin/js/app.js'
], 'public/assets/admin/app.js');

mix.sass('resources/assets/admin/scss/style.scss', 'public/assets/admin/style.css');