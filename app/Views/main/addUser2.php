<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="site-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center">
                <h1> Add Supplier </h1>
                <span class="subheading">SUPPLIER BIO CONTENT </span>
            </div>
        </div>

        <form method='post' action='<?= base_url('/Main/index'); ?>' enctype="multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name2" class="form-control" id="name2">
            </div>
            <div class="form-group">
                <label>Kontak</label>
                <input type="text" name="kontak2" class="form-control" id="kontak2">
            </div>
            <div class="form-group">
                <label>Profile</label>
                <input type="text" name="profile2" class="form-control" id="profile2">
            </div>
            <button type="submit" name='submit2' class="btn btn-primary">Submit</button>
        </form>

    </div>
</section>
<?= $this->endSection('content'); ?>