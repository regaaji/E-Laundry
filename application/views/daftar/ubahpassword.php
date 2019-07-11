
<div class="container">
    <div class="row justify-content-center" style="margin-top: 120px;">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                   <i class="fas fa-fw fa-key"></i> Ubah Password
                </div>
                <div class="card-body">
                
                   <?= $this->session->flashdata('message'); ?>
                      <form action="<?= base_url(); ?>daftar/ubahpassword" method="post">
                           <div class="form-group">
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="password" class="form-control" name="current_password" id="current_password" placeholder="Password Saat Ini" />
                                </div>
                                <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>   
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="password" class="form-control" name="new_password1" id="new_password1" placeholder="Password Baru" />
                                </div>
                                   <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?> 
                            </div>
                        </div>
                          
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary login-button">Ubah</button><br>
                        </div>    
                        
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>