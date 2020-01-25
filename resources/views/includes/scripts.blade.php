<!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

<!-- Scripts
================================================== -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}" ></script>
<script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}" defer></script>
<script src="{{ asset('js/mmenu.min.js') }}" defer></script>
<script src="{{ asset('js/tippy.all.min.js') }}" defer></script>
<script src="{{ asset('js/simplebar.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap-slider.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}" defer></script>
<script src="{{ asset('js/snackbar.js') }}" defer></script>
<script src="{{ asset('js/clipboard.min.js') }}" defer></script>
<script src="{{ asset('js/counterup.min.js') }}" defer></script>
<script src="{{ asset('js/magnific-popup.min.js') }}" defer></script>
<script src="{{ asset('js/slick.min.js') }}" defer></script>
<script src="{{ asset('js/custom.js') }}" defer></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script >
    // Snackbar for user status switcher
    $('#snackbar-user-status label').click(function() {
        Snackbar.show({
            text: 'Your status has been changed!',
            pos: 'bottom-center',
            showAction: false,
            actionText: "Dismiss",
            duration: 3000,
            textColor: '#fff',
            backgroundColor: '#383838'
        });
    });
</script>