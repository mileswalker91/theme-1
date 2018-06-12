module.exports = function(grunt) {

  require('time-grunt')(grunt);
  require("load-grunt-config")(grunt, {
      init: true,
        data: {
          pkg: grunt.file.readJSON('package.json'),
          dirs: {
            testDir: '/path/to/dir'
          }
      },
      jitGrunt: {
        jitGrunt: true,
          staticMappings: {
            usebanner: 'grunt-banner'
        }
      }
  });
};
