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
<!-- Select 2 JS -->
<script src="{{ asset('assets/theme1/libs/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/theme1/libs/select2/dist/js/select2.init.js') }}"></script>
<!--Datatable plugins -->
<script src="{{ asset('assets/theme1/libs/extra-libs/DataTables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/theme1/js/pages/datatable/datatable-basic.init.js') }}"></script>
<!--Custom JavaScript -->
@yield('library-js')

<script src="{{ asset('assets/theme1/js/custom.min.js') }}"></script>
@yield('custom-js')