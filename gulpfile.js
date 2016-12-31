const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {

    mix.less(
        [
            'bootstrap.less',
            'materialadmin.less',
        ],
        'public/assets/css/style.css'
    );

    mix.scripts(
        [
            'libs/utils/html5shiv.js',
            'libs/utils/respond.min.js'
        ],
        './public/assets/js/support.js'
    );

    mix.scripts(
        [
            'libs/jquery/jquery-1.11.2.min.js',
            'libs/jquery/jquery-migrate-1.2.1.min.js',
            'libs/bootstrap/bootstrap.min.js',
            'libs/spin.js/spin.min.js',
            'libs/autosize/jquery.autosize.min.js',
            'libs/nanoscroller/jquery.nanoscroller.min.js',
            'core/source/App.js',
            'core/source/AppNavigation.js',
            'core/source/AppOffcanvas.js',
            'core/source/AppCard.js',
            'core/source/AppForm.js',
            'core/source/AppNavSearch.js',
            'core/source/AppVendor.js',
        ],
        './public/assets/js/core.js'
    );

    mix.scripts(
        [
            'core/demo/Demo.js',
        ],
        './public/assets/js/main.js'
    );

    mix.copy(
        'resources/assets/fonts',
        'public/assets/css'
    );

    mix.copy(
        'resources/assets/img',
        'public/assets/img'
    );
});
