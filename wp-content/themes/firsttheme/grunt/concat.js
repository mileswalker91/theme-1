module.exports = {
    options: {
        separator: '\r\n\r\n'
    },
    header: {
        src: [
            "assets/js/modernizr-custom.js",
            "libs/respond/dest/respond.js",
            "libs/picturefill/dist/picturefill.js",
            "assets/js/header.js"
        ],
        dest: 'build/js/header.js'
    },
    footer: {
        src: [
            "libs/es5-shim/es5-shim.js",
            "libs/foundation/js/foundation/foundation.js",
            "libs/foundation/js/foundation/foundation.equalizer.js",
            "assets/js/nav.js", // needs to load before materialize for offcanvas navbar js to play with BP nav.js code
            "libs/materialize/dist/js/materialize.min.js",
            "libs/slick-carousel/slick/slick.js",
            "libs/REM-unit-polyfill/js/rem.js",
            "assets/js/blog.js",
            "assets/js/carousel.js",
            "assets/js/faqs.js",
            "assets/js/fixed-action-buttons.js",
            "assets/js/footer.js",
            "assets/js/forms.js",
            "assets/js/gallery.js",
            "assets/js/slider.js",
            "assets/js/testimonials.js"
        ],
        dest: 'build/js/footer.js'
    },
    admin_panel: {
        src: [
            "assets/admin-js/global-admin.js"
        ],
        dest: 'build/js/ff-admin-panel.js'
    }
};
