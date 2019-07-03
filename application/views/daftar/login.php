
<div class="container">
    <div class="row justify-content-center" style="margin-top: 120px;">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <h1 class="text-center text-primary">Masuk</h1>
                   <?= $this->session->flashdata('message'); ?>
                      <form action="<?= base_url(); ?>daftar/proses_login" method="post">
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Username</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" name="username" autofocus id="username" placeholder="username" value="<?= set_value('username'); ?>" />
                                </div>
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('username'); ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" value="<?= set_value('password'); ?>"/>
                                </div>
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('password'); ?></small>
                            </div>
                        </div>
                        
                        
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Masuk</button>
                             <p class="text-center mt-3">Tidak mempunyai akun? Masuk di <a href="<?= base_url(); ?>daftar/register">sini</a></p>
                            
                        
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>