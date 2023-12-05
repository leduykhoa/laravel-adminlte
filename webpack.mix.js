const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.copy(`node_modules/admin-lte/plugins/fontawesome-free/webfonts/`, `public/webfonts`);
mix.copy(`node_modules/admin-lte/dist/img/`, `public/images`);


mix.scripts([
    `./node_modules/admin-lte/plugins/jquery/jquery.min.js`,
    `./node_modules/admin-lte/plugins/jquery-ui/jquery-ui.min.js`,
    `./node_modules/admin-lte/plugins/fullcalendar/main.js`,
    `./node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js`,
    `./node_modules/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js`,
    `./node_modules/admin-lte/plugins/chart.js/Chart.min.js`,
    `./node_modules/admin-lte/plugins/sparklines/sparkline.js`,
    `./node_modules/admin-lte/plugins/jqvmap/jquery.vmap.min.js`,
    `./node_modules/admin-lte/plugins/jqvmap/maps/jquery.vmap.usa.js`,
    `./node_modules/admin-lte/plugins/jquery-knob/jquery.knob.min.js`,
    `./node_modules/admin-lte/plugins/moment/moment.min.js`,
    `./node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js`,
    `./node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js`,
    `./node_modules/admin-lte/plugins/summernote/summernote-bs4.min.js`,
    `./node_modules/admin-lte/plugins/jquery-mousewheel/jquery.mousewheel.js`,
    `./node_modules/admin-lte/plugins/raphael/raphael.min.js`,
    `./node_modules/admin-lte/plugins/jquery-mapael/jquery.mapael.min.js`,
    `./node_modules/admin-lte/plugins/jquery-mapael/maps/usa_states.min.js`,
    `./node_modules/admin-lte/plugins/sweetalert2/sweetalert2.min.js`,
    `./node_modules/admin-lte/plugins/toastr/toastr.min.js`,
    `./node_modules/admin-lte/plugins/ion-rangeslider/js/ion.rangeSlider.min.js`,
    `./node_modules/admin-lte/plugins/bootstrap-slider/bootstrap-slider.min.js`,
    `./node_modules/admin-lte/plugins/flot/jquery.flot.js`,
    `./node_modules/admin-lte/plugins/flot/plugins/jquery.flot.resize.js`,
    `./node_modules/admin-lte/plugins/flot/plugins/jquery.flot.pie.js`,
    `./node_modules/admin-lte/plugins/uplot/uPlot.iife.min.js`,
    `./node_modules/admin-lte/plugins/pace-progress/pace.min.js`,
    `./node_modules/admin-lte/plugins/select2/js/select2.full.min.js`,
    `./node_modules/admin-lte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js`,
    `./node_modules/admin-lte/plugins/inputmask/jquery.inputmask.min.js`,
    `./node_modules/admin-lte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js`,
    `./node_modules/admin-lte/plugins/bootstrap-switch/js/bootstrap-switch.min.js`,
    `./node_modules/admin-lte/plugins/bs-stepper/js/bs-stepper.min.js`,
    `./node_modules/admin-lte/plugins/dropzone/min/dropzone.min.js`,
    `./node_modules/admin-lte/plugins/codemirror/codemirror.js`,
    `./node_modules/admin-lte/plugins/codemirror/mode/css/css.js`,
    `./node_modules/admin-lte/plugins/codemirror/mode/xml/xml.js`,
    `./node_modules/admin-lte/plugins/codemirror/mode/htmlmixed/htmlmixed.js`,
    `./node_modules/admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js`,
    `./node_modules/admin-lte/plugins/jquery-validation/jquery.validate.min.js`,
    `./node_modules/admin-lte/plugins/jquery-validation/additional-methods.min.js`,
    `./node_modules/admin-lte/plugins/ekko-lightbox/ekko-lightbox.min.js`,
    `./node_modules/admin-lte/plugins/filterizr/jquery.filterizr.min.js`,
    `./node_modules/admin-lte/plugins/datatables/jquery.dataTables.min.js`,
    `./node_modules/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js`,
    `./node_modules/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js`,
    `./node_modules/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js`,
    `./node_modules/admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js`,
    `./node_modules/admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js`,
    `./node_modules/admin-lte/plugins/jszip/jszip.min.js`,
    `./node_modules/admin-lte/plugins/pdfmake/pdfmake.min.js`,
    `./node_modules/admin-lte/plugins/pdfmake/vfs_fonts.js`,
    `./node_modules/admin-lte/plugins/datatables-buttons/js/buttons.html5.min.js`,
    `./node_modules/admin-lte/plugins/datatables-buttons/js/buttons.print.min.js`,
    `./node_modules/admin-lte/plugins/datatables-buttons/js/buttons.colVis.min.js`,
    `./node_modules/admin-lte/plugins/jsgrid/demos/db.js`,
    `./node_modules/admin-lte/plugins/jsgrid/jsgrid.min.js`,
    `./node_modules/admin-lte/dist/js/adminlte.js`,
    `./node_modules/admin-lte/dist/js/demo.js`,
    `./resources/js/form-validation.js`
],
    `public/js/app-admin-common.js`);


mix.styles([
    `./node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css`,
    `./node_modules/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css`,
    `./node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css`,
    `./node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css`,
    `./node_modules/admin-lte/plugins/jqvmap/jqvmap.min.css`,
    `./node_modules/admin-lte/plugins/daterangepicker/daterangepicker.css`,
    `./node_modules/admin-lte/plugins/summernote/summernote-bs4.min.css`,
    `./node_modules/admin-lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css`,
    `./node_modules/admin-lte/plugins/toastr/toastr.min.css`,
    `./node_modules/admin-lte/plugins/sweetalert2/sweetalert2.min.css`,
    `./node_modules/admin-lte/plugins/ion-rangeslider/css/ion.rangeSlider.min.css`,
    `./node_modules/admin-lte/plugins/bootstrap-slider/css/bootstrap-slider.min.css`,
    `./node_modules/admin-lte/plugins/fullcalendar/main.css`,
    `./node_modules/admin-lte/plugins/uplot/uPlot.min.css`,
    `./node_modules/admin-lte/plugins/flag-icon-css/css/flag-icons.min.css`,
    `./node_modules/admin-lte/plugins/pace-progress/themes/black/pace-theme-flat-top.css`,
    `./node_modules/admin-lte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css`,
    `./node_modules/admin-lte/plugins/select2/css/select2.min.css`,
    `./node_modules/admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css`,
    `./node_modules/admin-lte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css`,
    `./node_modules/admin-lte/plugins/bs-stepper/css/bs-stepper.min.css`,
    `./node_modules/admin-lte/plugins/dropzone/min/dropzone.min.css`,
    `./node_modules/admin-lte/plugins/codemirror/codemirror.css`,
    `./node_modules/admin-lte/plugins/codemirror/theme/monokai.css`,
    `./node_modules/admin-lte/plugins/ekko-lightbox/ekko-lightbox.css`,
    `./node_modules/admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css`,
    `./node_modules/admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css`,
    `./node_modules/admin-lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css`,
    `./node_modules/admin-lte/plugins/jsgrid/jsgrid.min.css`,
    `./node_modules/admin-lte/plugins/jsgrid/jsgrid-theme.min.css`,
    `./node_modules/admin-lte/dist/css/adminlte.min.css`
],
    `public/css/app-admin-common.css`);

mix.scripts([
    `./node_modules/@popperjs/core/dist/umd/popper.js`,
    `./node_modules/jquery/dist/jquery.js`,
    `./node_modules/bootstrap/dist/js/bootstrap.min.js`,
    `./resources/js/form-validation.js`
],
    `public/js/app-common.js`);


mix.styles([
    `./node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css`,
    `./node_modules/bootstrap/dist/css/bootstrap.css`,
],
    `public/css/app-common.css`);