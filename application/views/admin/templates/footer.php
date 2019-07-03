<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Rega Aji <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Tekan Tombol Logout untuk keluar dari halaman</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('admin/auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
 <script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- datatables -->
<script type="text/javascript" src="<?= base_url(); ?>assets/DataTables/datatables.min.js"></script>

  <script src="<?= base_url(); ?>assets/Highcharts/code/highcharts.js"></script>
    <script src="<?= base_url(); ?>assets/js/canvasjs.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging': true,
      'lengthChange': true,
      'searching': true,
      'ordering': true,
      'info': true,
      'autoWidth': true
  })
})


    //modal detail cek pemesanan wipe
    $(function(){
          $('.tampilModalDetailNew').on('click', function(){
              const id = $(this).data('id');
              $.ajax({
                  url: '<?= base_url("admin/wipe/rincilModal"); ?>',
                  data: {id:id},
                  method: 'post',
                  dataType: 'json',
                  success: function(data){
                    $('.nama').html(data.nama),
                    $('.telepon').html(data.telepon),
                    $('.tanggal_jemput1').html(data.tanggal_jemput1),
                    $('.waktu_jemput1').html(data.waktu_jemput1),
                    $('.tanggal_kirim1').html(data.tanggal_kirim1),
                    $('.waktu_kirim1').html(data.waktu_kirim1),
                    $('.location1').html(data.location1),
                    $('.harga1').html(data.harga1),
                    $('.alamat1').html(data.alamat1),
                    $('.harga1').html(data.harga1),
                    $('.status1').html(data.status1),
                    $('.uang1').html(data.uang1)
                  } 
              });
              //console.log("ok");
          });
      })





   //modal detail cek pemesanan essii
    $(function(){
          $('.tampilModalDetailBaru').on('click', function(){
              const id = $(this).data('id');
              $.ajax({
                  url: '<?= base_url("admin/essii/detailModal"); ?>',
                  data: {id:id},
                  method: 'post',
                  dataType: 'json',
                  success: function(data){
                    $('.nama').html(data.nama),
                    $('.telepon').html(data.telepon),
                    $('.tanggal_jemput').html(data.tanggal_jemput),
                    $('.waktu_jemput').html(data.waktu_jemput),
                    $('.tanggal_kirim').html(data.tanggal_kirim),
                    $('.waktu_kirim').html(data.waktu_kirim),
                    $('.location').html(data.location),
                    $('.harga').html(data.harga),
                    $('.alamat').html(data.alamat),
                    $('.harga').html(data.harga),
                    $('.status').html(data.status),
                    $('.uang').html(data.uang)
                  } 
              });
              //console.log("ok");
          });
      })
</script>




</body>

</html>