let mix = require("laravel-mix");

const config = {
    css: {
        src: [
            './assets/css/framework/editor.css',
            './assets/css/framework/typography.css',
        ],
        dest: './dist/css/framework'
    },
    scss: {
        src: './assets/scss/layout.scss',
        dest: './dist/css'
    },
    vendor: {
        css: [
            'node_modules/bootstrap/dist/css/bootstrap.min.css'
        ],
        javascript: [
            'node_modules/bootstrap/dist/js/bootstrap.min.js',
            'node_modules/jquery/dist/jquery.min.js',
        ]
    },
    watch: [
        './templates/**/*.ss',
        './assets/scss/**/*.scss',
        './assets/css/**/*.css',
        './assets/javascript/**/*.js'
    ],
};

mix.sass(config.scss.src, config.scss.dest).sourceMaps()
    .copy(config.css.src, config.css.dest)
    .copy(config.vendor.css, './dist/css/vendor')
    .copy(config.vendor.javascript, './dist/javascript/vendor')
    .browserSync({
        open: "external",
        proxy: "ssprojectsetup.vcap.me",
        host: "ssprojectsetup.vcap.me",
        injectChanges: true,
        files: config.watch,
    });
