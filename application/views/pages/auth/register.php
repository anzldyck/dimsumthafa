<main role="main" class="container" style="margin-top: 150px;">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header" style="background-color: #372560; color: #fff;">
                    Register
                </div>
                <div class="card-body">
                    <?= form_open('register', ['method' => 'POST']) ?>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <?= form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'autofocus' => true]) ?>
                        <?= form_error('name') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'required' => true, 'placeholder' => 'Masukkan email aktif']) ?>
                        <?= form_error('email') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <?= form_password('password', '', ['class' => 'form-control', 'required' => true, 'placeholder' => 'Masukkan password minimal 8 karakter']) ?>
                        <?= form_error('password') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Konfirmasi Password</label>
                        <?= form_password('password_confirmation', '', ['class' => 'form-control', 'required' => true, 'placeholder' => 'Masukkan password yang sama']) ?>
                        <?= form_error('password_confirmation') ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>