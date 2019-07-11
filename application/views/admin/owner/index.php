





<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">


   <div class="col-lg-7">
     <div class="card">
      <div class="card-body">
        <?php if($this->session->flashdata('message')) : ?>
          <div class="alert alert-success"><?= $this->session->flashdata('message'); ?></div>
        <?php endif; ?>

        <h5 class="font-weight-bold">Data Produk <?= $this->session->userdata('nama') ?></h5> 

        <button class="btn btn-primary mt-3 mb-4" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-circle pr-1"></i>Tambah Barang</button>

        <table class="table table-hover table-responsive" id="example2">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Gambar</th>
              <th scope="col">Harga</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>

            <?php $i = 1; ?>
            <?php foreach($nama as $ba) : ?>
              <tr>
                <th scope="row"><?= $i; ?></th> 
                <td><?= $ba['nama']; ?></td>
                <td><img src="<?= base_url() ?>assets/img/<?= $ba['gambar']; ?>" width="50" height="50" class="rounded-circle" alt=""></td>
                <td><?= $ba['harga']; ?></td>
                <td><span class="badge badge-success"><?= $ba['nama_status']; ?></span></td>
                <td>
                  <a href="<?= base_url() ?>admin/owner/edit/<?= $ba['id_produk']; ?>" class="badge badge-primary">Ubah</a>
                  <a href="<?= base_url() ?>admin/owner/hapus/<?= $ba['id_produk']; ?>" class="badge badge-danger">Hapus</a>
                </td>
              </tr>
              <?php $i++; ?>
            <?php endforeach; ?>

          </tbody>
        </table>


      </div>
    </div>     
  </div>


  <div class="col-lg-5">
    <div class="card">
      <div class="card-body">
        

        <h5 class="font-weight-bold">Data Produk <?= $this->session->userdata('nama') ?> Gagal</h5> 

        <table class="table table-hover table-responsive" id="example2">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Gambar</th>
              <th scope="col">Harga</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>

            <?php $i = 1; ?>
            <?php foreach($namagagal as $ba) : ?>
              <tr>
                <th scope="row"><?= $i; ?></th> 
                <td><?= $ba['nama']; ?></td>
                <td><img src="<?= base_url() ?>assets/img/<?= $ba['gambar']; ?>" width="50" height="50" class="rounded-circle" alt=""></td>
                <td><?= $ba['harga']; ?></td>
                <td><span class="badge badge-danger"><?= $ba['nama_status']; ?></span></td>
              </tr>
              <?php $i++; ?>
            <?php endforeach; ?>

          </tbody>
        </table>


      </div>
    </div>      
  </div>



</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	<form method="post" action="<?= base_url(); ?>admin/owner/" enctype="multipart/form-data">
      		<div class="form-group">
      			<label for="nama">Nama</label>
      			<input type="text" class="form-control" id="nama" name="nama">
      			<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
      		</div>
      		<div class="form-group">
      			<label for="harga">Harga</label>
      			<input type="text" class="form-control" id="harga" name="harga">
      			<?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
      		</div>
      		<div class="form-group">
      			<label for="Gambar">Gambar</label>
      			<input type="file" class="form-control" id="gambar" name="gambar">
      			<?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
      		</div>
      		<div class="form-group">

      			<input type="hidden" name="owner_id" value="<?= $this->session->userdata('owner_id'); ?>" id="owner_id">

            <input type="hidden" name="user_id" value="<?= $this->session->userdata('id'); ?>" id="user_id">
            <input type="hidden" name="status_barang_id" value="3" id="status_barang_id">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>


