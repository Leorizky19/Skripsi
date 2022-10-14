
</div>   <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 <a href="#">L_Rizky</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="<?=base_url()?>back-end/assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script src="<?=base_url()?>back-end/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>back-end/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>back-end/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?=base_url()?>back-end/assets/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url()?>back-end/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?=base_url()?>back-end/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?=base_url()?>back-end/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url()?>back-end/assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="<?=base_url()?>back-end/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?=base_url()?>back-end/assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url()?>back-end/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?=base_url()?>back-end/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>back-end/assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>back-end/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>back-end/assets/plugins/chart.js/Chart.min.js"></script>
<script src="<?=base_url()?>back-end/assets/dist/js/demo.js"></script>
<script src="<?=base_url()?>back-end/assets/dist/js/inventory.js"></script>
<script src="<?=base_url()?>back-end/assets/dist/js/grafik/grafik.js"></script>
<script src="<?=base_url()?>back-end/assets/dist/js/sweetalert2.all.js"></script>
<script src="<?=base_url()?>back-end/assets/dist/js/sweetalert2.min.js"></script>
<!-- REQUIRED SCRIPTS -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  window.setTimeout(function(){
    $(".alert").fadeTo(500,0).slideUp(500,function() {
    $(this).remove();
    });
    }, 3000)
</script>
<script>
$(function () {
    var url = window.location;
    // for single sidebar menu
    $('ul.nav-sidebar a').filter(function () {
        return this.href == url;
    }).addClass('active');

    // for sidebar menu and treeview
    $('ul.nav-treeview a').filter(function () {
        return this.href == url;
    }).parentsUntil(".nav-sidebar > .nav-treeview")
        .css({'display': 'block'})
        .addClass('menu-open').prev('a')
        .addClass('active');
});
</script>
</body>
</html>