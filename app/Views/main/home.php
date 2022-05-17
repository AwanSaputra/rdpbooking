<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<style>
    * {
        box-sizing: border-box;
    }

    /* Create two equal columns that floats next to each other */
    .column {
        float: left;
        width: 50%;
        padding: 10px;
        height: 300px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <center>

                <h1>List Peminjam RDP</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto ea totam quasi doloribus. Quaerat nihil dolorem at nostrum corrupti dolores molestiae, voluptates nemo, asperiores natus eum veniam quibusdam sit amet!
                </p>
                <hr>

                <div class="row">
                    <div class="column" style="background-color:#aaa;">
                        <!-- <table border="0" cellpadding="10" cellspacing="0"> -->
                        <h2>Innova 5</h2>
                        <!-- <tr>
                            <th>No</th>
                            <th>Batch</th>
                            <th>Nama</th>
                            <th>Divisi</th>
                            <th>Status</th>
                        </tr> -->
                        <tr>
                            <p id="nama"> <?= $nama; ?></p>
                            <p id="divisi2"> <?= $divisi; ?></p>
                            <p id="profile2"> <?= $profile; ?></p>
                        </tr>
                        <hr>
                        <tbody>
                            <td colspan="8" align="right"> <a href="/Main/AddStatusRDP1/<?= session()->get('id'); ?>"><input type="submit" value="Add" class="btn btn-primary"></a> </td>
                            <td width="20px"><a href="/Main/deleteStatus1/<?= session()->get('id'); ?>"><input type="submit" value="Delete" class="btn btn-danger"></a></td>

                        </tbody>
                    </div>
                    <div class="column" style="background-color:#bbb;">
                        <!-- <table border="0" cellpadding="10" cellspacing="0"> -->
                        <h2>Innova 6</h2>
                        <tr>
                            <p id="nama"> <?= $nama2; ?></p>
                            <p id="divisi2"> <?= $divisi2; ?></p>
                            <p id="profile2"> <?= $profile2; ?></p>

                        </tr>
                        <hr>
                        <tbody>
                            <td colspan="8" align="right"> <a href="/Main/AddStatusRDP2/<?= session()->get('id'); ?>"><input type="submit" value="Add" class="btn btn-primary"></a> </td>
                            <td width="20px"><a href="/Main/deleteStatus1/<?= session()->get('id'); ?>"><input type="submit" value="Delete" class="btn btn-danger"></a></td>

                        </tbody>
                    </div>
                </div>
                </table>
            </center>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>