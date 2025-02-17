<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<!-- end of page level js -->
<!-- Start of vendor js -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="{{ asset('vendors/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>




<script>
    document.body.style.zoom = "90%";
</script>

<script>
    $(document).ready(function() {
        var ww = $(window).width();
        console.log(ww);
        $(window).resize(function() {
            checkWidth();
        });
    });

    function checkWidth() {
        var ww = $(window).width();
        console.log(ww);

        if (ww < 767) {
            $('.sidebar-res').css('margin-left', '');
        }

        if (ww < 992) {
            console.log('rhb');
            $('.left-aside').addClass('top_solver');
        } else {
            $('.left-aside').removeClass('top_solver');
        }

    }
</script>

@stack('backend_js')
