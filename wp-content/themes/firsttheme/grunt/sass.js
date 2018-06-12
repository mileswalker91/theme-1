module.exports = {
  options: {
    sourceMap: true,
  },
  dist: {
    files: [
      {
        expand: true,
        cwd: 'scss',
        src: ['**/*.scss'],
        dest: 'assets/css',
        ext: '.css'
      },
      {
        expand: true,
        cwd: 'scss/admin',
        src: ['**/*.scss'],
        dest: 'assets/css',
        ext: '.css'
      }
    ]
  }
};
