<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="site-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center">
                <h1> Add User </h1>
                <span class="subheading">Data Peminjam RDP </span>
            </div>
        </div>

        <form method='post' action='<?= base_url('/Main/index'); ?>' enctype="multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="kontak" class="form-control" id="kontak">
            </div>
            <div class="form-group">
                <label>Divisi</label>
                <input type="text" name="profile" class="form-control" id="profile">
            </div>
            <button type="submit" name='submit' class="btn btn-primary">Submit</button>
        </form>

    </div>
</section>
<?= $this->endSection('content'); ?>