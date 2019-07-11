<div class="container mt-5">
    <div class="row justify-content-center" style="margin-top: 120px;">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
                        <h1 class="text-center text-primary mb-4">Daftar</h1>
                        <form action="<?= base_url(); ?>daftar/proses_register" method="post">
                            <div class="form-group row">
                                <label for="full_name" class="col-md-4 col-form-label text-md-right">Nama</label>
                                <div class="col-md-6">
                                    <input type="text" id="full_name" class="form-control" name="nama" placeholder="nama" value="<?= set_value('nama'); ?>">
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text" id="username" class="form-control" name="username" placeholder="username" value="<?= set_value('username'); ?>">
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('username'); ?></small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="password" value="<?= set_value('password'); ?>">
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('password'); ?></small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input type="email" id="email" class="form-control" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('email'); ?></small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telepon" class="col-md-4 col-form-label text-md-right">Telepon</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="telepon" placeholder="telepon" name="telepon" value="<?= set_value('telepon'); ?>">
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('telepon'); ?></small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" id="alamat" rows="3" placeholder="alamat" name="alamat"><?= set_value('alamat'); ?></textarea>
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('alamat'); ?></small>
                                </div>
                            </div>
                            </div>
                             <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="hidden" class="form-control" id="role_id" placeholder="role_id" name="role_id" value="3">
                                    <input type="hidden" class="form-control" id="owner_id" placeholder="owner_id" name="owner_id" value="5">
                                    <input type="hidden" class="form-control" id="is_active" placeholder="is_active" name="is_active" value="1">
                                    <input type="hidden" class="form-control" id="image" placeholder="image" name="image" value="default.jpg">
                                </div>
                            </div>


                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Daftar
                                </button>
                            </div>
                            <p class="text-center mt-3">Sudah mempunyai akun? Masuk di <a href="<?= base_url(); ?>daftar/login">sini</a></p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>