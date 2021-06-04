    <!-- jQuery -->
    <script src="/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/back-office/bootstrap/dist/js/tether.min.js"></script>
    <script src="/back-office/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="/back-office/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/back-office/js/waves.js"></script>
    <script src="/plugins/bower_components/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="/plugins/bower_components/html5-editor/bootstrap-wysihtml5.js"></script>
    <script src="/plugins/bower_components/dropzone-master/dist/dropzone.js"></script>
    <script>
        $(document).ready(function () {
            $('.textarea_editor').wysihtml5();
        });
    </script>

<script src="/plugins/bower_components/gallery/js/animated-masonry-gallery.js"></script>
<script src="/plugins/bower_components/gallery/js/jquery.isotope.min.js"></script>
<script src="/plugins/bower_components/fancybox/ekko-lightbox.min.js"></script>
<script>
    $(document).ready(function ($) {
        // delegate calls to data-toggle="lightbox"
        $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function (event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                onShown: function () {
                    if (window.console) {
                        return console.log('Checking our the events huh?');
                    }
                }
                , onNavigate: function (direction, itemIndex) {
                    if (window.console) {
                        return console.log('Navigating ' + direction + '. Current item: ' + itemIndex);
                    }
                }
            });
        });
        //Programatically call
        $('#open-image').click(function (e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });
        $('#open-youtube').click(function (e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });
        // navigateTo
        $(document).delegate('*[data-gallery="navigateTo"]', 'click', function (event) {
            event.preventDefault();
            var lb;
            return $(this).ekkoLightbox({
                onShown: function () {
                    lb = this;
                    $(lb.modal_content).on('click', '.modal-footer a', function (e) {
                        e.preventDefault();
                        lb.navigateTo(2);
                    });
                }
            });
        });
    });
</script>
    
    <!-- Custom Theme JavaScript -->
    <script src="/back-office/js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>