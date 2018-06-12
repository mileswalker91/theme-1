module.exports = {
    scripts: {
        options: {
          report: 'min',
          mangle: false
        },
        files: [{
          expand: true,
          cwd: 'build/js',
          src: ['*.js', '!*.min.js'],
          dest: 'build/js',
          ext: '.min.js'   
        }]
    }
};
