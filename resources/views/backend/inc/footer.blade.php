</div>
<!-- End Container fluid  -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer"> &copy; Faz group LTD </footer>
<!-- End footer -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>


<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('admin/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('admin/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
<!--stickey kit -->
<script src="{{ asset('admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<!--Custom JavaScript -->
<script src="{{ asset('admin/js/custom.min.js') }}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- chartist chart -->
<script src="{{ asset('admin/assets/plugins/chartist-js/dist/chartist.min.js') }}"></script>
<script
    src="{{ asset('admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
<!--c3 JavaScript -->
<script src="{{ asset('admin/assets/plugins/d3/d3.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/c3-master/c3.min.js') }}"></script>
<!-- Chart JS -->
<script src="{{ asset('admin/js/dashboard1.js') }}"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{ asset('admin/assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>

<script src="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>

{{--toastr--}}
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    $(document).ready(function () {
        toastr.success(@if(session()->has('message'))'{{ session('message') }}' @endif, @if(session()->has('message'))'{{ session('type') }}' @endif, {
            "progressBar": true,
            "positionClass": "toast-top-right",
            "showDuration": "200",
        });
    });
</script>

@yield('script')
</body>
</html>
