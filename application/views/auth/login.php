<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Login Form</h2>
                    <?= $this->session->flashdata('pesan'); ?>
                    <br>
                    <form method="POST" action="<?= base_url('auth/login/proses_login') ?>">
                        
                        <div class="mt-3 input-group">
                            <label class="label">Username</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <input class="input--style-4" type="text" name="username">
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Password</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <input class="input--style-4" type="password" name="password">
                                <div class="select-dropdown"></div>
                                <br>
                                Create an account ? <a href="<?= base_url('auth/register') ?>">Sign up</a>
                                <br>
                                <a href="https://api.whatsapp.com/send?phone=6282295153183&text=Saya%0ALupa%0APassword">Forgot password</a>
                            </div>
                        </div>
                        <div class="">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>