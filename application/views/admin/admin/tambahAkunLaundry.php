

    

   

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
                    <div class="form-group row">
                      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="username" class="col-sm-2 col-form-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username">
                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>
                     <div class="form-group row">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>
                     <div class="form-group row">
                      <label for="password" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>
                     <div class="form-group row">
                      <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="telepon" name="telepon">
                        <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>
                     <div class="form-group row">
                      <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
                      <div class="col-sm-10">
                        <textarea name="alamat" id="" cols="30" rows="3" class="form-control">
                          
                        </textarea>
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                    </div>
                        <input type="hidden" class="form-control" id="image" name="image" value="default.jpg">
                        <input type="hidden" class="form-control" id="role_id" name="role_id" value="2">
                        <input type="hidden" class="form-control" id="is_active" name="is_active" value="1">
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
                  <i class="fas fa-users mr-1"></i>Daftar Akun 
                </div>
                <ul class="list-group list-group-flush">

                  <?php foreach($akun as $o) : ?>
                  <li class="list-group-item"><?= $o['nama'] ?>
                   <a href="<?=base_url() ?>admin/admin/hapusowner/<?= $o['id'] ?>"><span class="badge badge-danger badge-sm float-right"><i class="fas fa-trash"></i></span></a>
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

      
