

    

   

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <div class="row mt-5">
          	
            
          

             <div class="col-md-8 mb-3">
                   
              <div class="card">
                <div class="card-body">
                
                  <form method="post" action="" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" value="<?= $edit['id_owner'] ?>" name="id_owner">
                    <div class="form-group row">
                      <label for="nama_owner" class="col-sm-2 col-form-label">Nama Owner</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_owner" name="nama_owner" value="<?= $edit['nama_owner'] ?>">
                         <?= form_error('isi', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="isi" name="isi" value="<?= $edit['isi'] ?>">
                        <?= form_error('isi', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>
                     <div class="form-group row">
                      <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>

                      <div class="col-sm-10">
                        <input type="file"  id="gambar_produk" name="gambar_produk" value="<?= $edit['gambar_produk'] ?>">
                         <img src="<?= base_url(); ?>assets/img/<?= $edit['gambar_produk'] ?>" class="img-thumbnail" width="100" height="50" alt="">
                        <?= form_error('gambar_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>


                    <div class="form-group row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Edit</button>
                      </div>
                    </div>
                  </form>
                    
                </div>
              </div>
            </div>
            

          

          
           </div>   

        
			        

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
