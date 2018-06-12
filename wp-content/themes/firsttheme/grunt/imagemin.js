module.exports = {
    dynamic: {
      files: [{
        expand: true,
        cwd: 'assets/img/',
        src: ['**/*.{png,jpg,svg,gif}'],
        dest: 'build/img/'
      }]
    }
};
