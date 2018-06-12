module.exports = {
    browserSync: {
        bsFiles: {
            src: ['css/site.min.css',
                  '*.php'
                 ]
        },
        options: {
            watchTask: true,
            proxy: "wordpress.test",
            port: 3360,
            open: true,
            notify: false,
        }
    }
};
