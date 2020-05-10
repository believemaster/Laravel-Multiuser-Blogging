
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Admin Lte3 -->
<!-- jQuery -->
<script src="{{ asset('/admin/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('/admin/assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('/admin/assets/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('/admin/assets/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('/admin/assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('/admin/assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('/admin/assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('/admin/assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('/admin/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Material UI Bootstrap 4 -->
<!-- <script src="{{ asset('/admin/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script> -->
<script src="{{ asset('/admin/assets/plugins/bootstrap/js/bootstrap-material-design.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('/admin/assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('/admin/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/admin/assets/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('/admin/assets/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/admin/assets/dist/js/demo.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('/admin/assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('/admin/assets/plugins/toastr/toastr.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('/admin/assets/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

<script src="{{ asset('/admin/assets/plugins/datatables-rowreorder/js/dataTables.rowReorder.js') }}"></script>
<script src="{{ asset('/admin/assets/plugins/datatables-rowreorder/js/rowReorder.bootstrap4.js') }}"></script>

<script src="{{ asset('/admin/assets/plugins/datatables-responsive/js/dataTables.responsive.js') }}"></script>
<script src="{{ asset('/admin/assets/plugins/datatables-responsive/js/responsive.bootstrap4.js') }}"></script>

<!-- User CDN Below If Above DT Responsive Fails -->
<!-- <script src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script> -->

<script type="text/javascript">
    ( function ( $ ) {
        "use strict";

        jQuery( '#vmap' ).vectorMap( {
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: [ '#1de9b6', '#03a9f5' ],
            normalizeFunction: 'polynomial'
        } );
    } )( jQuery );
</script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery(".myselect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops No Results Found!",
            width: "100%"
        });
    });
</script>
<script type="text/javascript">
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
});
</script>
<script type="text/javascript">
  $(function () {
    $("#example1").DataTable({
        responsive: true
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

<script type="text/javascript">
      
        $(function () {
          if (window.location.pathname == '/admin/dashboard') {
          Swal.fire({
            title: '<h1 class="display-4 text-white">Experience New UI {{ Auth::user()->name }}</h1>',
            width: 500,
            padding: '1em',
            background: '#fff url(https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_960_720.jpg)',
            backdrop: `
              rgba(0,0,123,0.4)
              url("https://sweetalert2.github.io/images/nyan-cat.gif")
              left top
              no-repeat
            `
          })
        } else {

        }
        });
      
      
</script>



