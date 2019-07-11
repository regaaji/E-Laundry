

    

   

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <div class="row mt-5">
          	
            
          

             <div class="col-md-8 mb-3">
                   
              <div class="card">
                <div class="card-body">
                
                  <form method="post" action="" enctype="multipart/form-data">
                     <div class="form-group row">
                      <label for="user_id" class="col-sm-2 col-form-label">Akun</label>
                      <div class="col-sm-10">
                        <select name="user_id" id="user_id" class="form-control">
                          <option value="" selected>-Pilih Akun-</option>
                        <?php foreach($akun as $a) : ?>
                          <option value="<?= $a['id'] ?>"><?= $a['nama'] ?></option>
                         <?php endforeach;  ?>
                        </select>
                         <?= form_error('owner_id', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nama" class="col-sm-2 col-form-label">Owner</label>
                      <div class="col-sm-10">
                        <select name="owner_id" id="owner_id" class="form-control">
                          <option value="" selected>-Pilih Owner-</option>
                        <?php foreach($owner as $o) : ?>
                          <option value="<?= $o['id_owner'] ?>"><?= $o['nama_owner'] ?></option>
                         <?php endforeach;  ?>
                        </select>
                         <?= form_error('owner_id', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>
                    
                        <input type="hidden" class="form-control" id="nama_produk" name="nama_produk" value="clean">
                        <input type="hidden" class="form-control" id="status_barang_id" name="status_barang_id" value="1">
                        <input type="hidden" class="form-control" id="gambar" name="gambar" value="shoes1.jpg">
                        <input type="hidden" class="form-control" id="harga" name="harga" value="5000">
                    <div class="form-group row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                      </div>
                    </div>
                  </form>
                    
                </div>
              </div>
            </div>
            

            <div class="col-md-4">
              <div class="card" style="width: 18rem;">
                <div class="card-header text-white bg-primary">
                  <i class="fas fa-store mr-1"></i>Daftar Tampil Owner 
                </div>
                <ul class="list-group list-group-flush">
                  <?php foreach($tampil as $o) : ?>
                  <li class="list-group-item"><?= $o['nama_owner'] ?>
                   <a href="<?=base_url() ?>admin/admin/hapusproduk/<?= $o['id_produk'] ?>"><span class="badge badge-danger badge-sm float-right"><i class="fas fa-trash"></i></span></a>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
          </div>
          

          
           </div>   

        
			        

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
