<footer class="main-footer" style="font-family: BrandonText-Light; font-size: 11.5px; background-color: #F9EEF1; color: #717070;  letter-spacing: 0.5px; border: 0px">
  <center>
    <strong>Copyright &copy; 2022 Rekomendasi Masker Wajah Tradisional Berdasarkan Penelitian Ilmiah Menggunakan Cosine Similarity dan TF-IDF</strong> All Right Reserved.
  </center>
</footer>

<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<script>
  $(document).ready(function() {
    $('#table_id').DataTable();
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="plugins/knob/jquery.knob.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/demo.js"></script>
<script src="plugins/pace/pace.min.js"></script>
<script type="text/javascript">
  $(document).ajaxStart(function() {
    Pace.restart();
  });
  $('.ajax').click(function() {
    $.ajax({
      url: '#',
      success: function(result) {
        $('.ajax-content').html('<hr>Ajax Request Completed !');
      }
    });
  });
</script>

</html>