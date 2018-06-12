module.exports = {
    phase1: [
        'sass',
        'imagemin'
    ],
    phase2: [
        'autoprefixer'
    ],
    phase3: [
        'cssmin',
        'concat',
    ],
    phase4: [
        'uglify',
        'usebanner',
    ],
    phase5: [
    	'copy',
        'clean',
    ],
};
