<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 col-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                LOGIN
            </div>
            <div class="card-body">
                <form action='<?= base_url('/Login/index'); ?>' method="POST">
                    <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger">
                            <?php echo session()->getFlashdata('error') ?>
                        </div>
                    <?php  } ?>

                    <div class="mb-3">
                        <label for="inputUsername" class="form-label">
                            Username
                        </label>
                        <input type="text" name="username" class="form-control" value="<?php echo session()->getFlashdata('username') ?>" id="inputUsername" placeholder="Masukan Username...">
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">
                                Password
                            </label>
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Masukan Password...">
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="login" class="btn btn-primary" value="LOGIN">

                        </div>
                </form>
                <form action='<?= base_url('/Login/registrasi'); ?>' method="POST">
                    <div class="mb-3">
                        <input type="submit" name="registrasi" class="btn btn-primary" value="REGISTRASI">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>