module.exports = {
    options: {
      livereload: true,
    },
    scripts: {
      files: ['assets/js/**/*.js', '!js/modernizr-custom.js'],
      tasks: ['newer:jshint', 'newer:modernizr', 'newer:concat', 'newer:uglify', 'clean:scripts', 'notify:scripts'],
      options: {
        spawn: false,
      }
    },
    sass: {
      files: ['scss/**/*.scss'],
      tasks: ['sass', 'newer:autoprefixer', 'newer:cssmin', 'copy:sourcemap', 'usebanner:sourcemap', 'notify:styles'],
      options: {
        spawn: false,
      }
    }
    // images: {
    //   files: ['img/**/*.{png,jpg,gif}'],
    //   tasks: ['newer:imagemin', 'notify:images'],
    //   options: {
    //     spawn: false,
    //   }
    // }
};
