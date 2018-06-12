module.exports = {
    sourcemap: {
      options: {
        position: 'bottom',
        banner: '/*# sourceMappingURL=site.css.map */',
        linebreak: true
      },
      files: {
        src: [ 'build/css/site.min.css']
      }
    }
};
