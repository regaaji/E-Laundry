

    

   

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <div class="row mt-5 mb-5">
          	<div class="col-lg-8">
                   <?php if($this->session->flashdata('message')) : ?>
                    <div class="alert alert-success"><?= $this->session->flashdata('message'); ?></div>
                  <?php endif; ?>
          		<div class="card">
          			<div class="card-body">
                  <h5 class="pb-3 font-weight-bold">Data Customers</h5>
          				<table class="table table-hover table-responsive mt-2" id="example2">
          					<thead>
          						<tr>
          							<th scope="col">#</th>
                        <th scope="col">Nama</th>
          							<th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
          						</tr>
          					</thead>
          					<tbody>
                      <?php $i = 1; ?>
                      <?php foreach( $customers as $kr ) : ?>
          						<tr>
          							<th scope="row"><?= $i; ?></th>
                        <th><?= $kr['nama']; ?></th>
          							<td><?= $kr['username']; ?></td>
                        <td><?= $kr['email']; ?></td>
                        <td><?= $kr['telepon']; ?></td>
                        <td><?= $kr['alamat']; ?></td>
                        <td>
                        <a href="<?= base_url(); ?>admin/admin/editcustomers/<?= $kr['id']; ?>" class="badge badge-primary">ubah</a>
                        <a href="<?= base_url(); ?>admin/admin/hapuscustomers/<?= $kr['id']; ?>" class="badge badge-danger">hapus</a>
                        </td>
          						</tr>
                      <?php $i++; ?>
          						<?php endforeach; ?>
          					</tbody>
          				</table>
          			</div>
          		</div>
          	</div>


            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">

                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Customers</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah; ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  

                </div>
              </div>    
            </div>

          </div>

          
           </div>   

        
			        

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
