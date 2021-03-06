<main role="main" class="container" style="margin-top: 150px;">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header" style="background-color: #372560; color: #fff;">
                    Login
                </div>
                <div class="card-body">
                    <?= form_open('login', ['method' => 'POST']) ?>
                    <div class="form-group">
                        <label for="">Email</label>
                        <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'required' => true, 'placeholder' => 'Masukkan email']) ?>
                        <?= form_error('email') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <?= form_password('password', '', ['class' => 'form-control', 'required' => true, 'placeholder' => 'Masukkan password']) ?>
                        <?= form_error('password') ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>