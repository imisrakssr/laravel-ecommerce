<!-- latest jquery-->
    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>

    <!-- portfolio js -->
    <script src="{{ asset('frontend/js/isotope.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    <!-- menu js-->
    <script src="{{ asset('frontend/js/menu.js') }}"></script>
    <script src="{{ asset('frontend/js/sticky-menu.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('frontend/js/feather.min.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('frontend/js/lazysizes.min.js') }}"></script>

    <!-- slick js-->
    <script src="{{ asset('frontend/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/js/slick-animation.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{ asset('frontend/js/bootstrap-notify.min.js') }}"></script>

    <!-- Theme js-->
    <script src="{{ asset('frontend/js/theme-setting.js') }}"></script>
    <script src="{{ asset('frontend/js/color-setting.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <script src="{{ asset('frontend/js/custom-slick-animated.js') }}"></script>


    <script>
        $(window).on('load', function () {
            setTimeout(function () {
                $('#exampleModal').modal('show');
            }, 2500);
        });

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
        feather.replace();
    </script>{{ asset('frontend/') }}


    @yield('scripts')
