<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('assets/theme1/vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/theme1/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets/theme1/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- apps -->
<script src="{{ asset('assets/theme1/js/app.min.js') }}"></script>
<script src="{{ asset('assets/theme1/js/app.init.js') }}"></script>
<script src="{{ asset('assets/theme1/vendors/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('assets/theme1/js/waves.js') }}"></script>
<script src="{{ asset('assets/theme1/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
@yield('library-js')

<script src="{{ asset('assets/theme1/js/custom.min.js') }}"></script>
@yield('custom-js')
