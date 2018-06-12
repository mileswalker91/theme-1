module.exports = {
    fonts: {
        files: [{
            expand: true,
            cwd: 'assets/fonts/',
            src: '**',
            dest: 'build/fonts',
            flatten: true,
            filter: 'isFile'
        }]
    },
    sourcemap: {
        src: '../assets/css/site.css.map',
        dest: '../build/css/site.css.map'
    },
};
