<?= $this->extend('layout/defaultheadfoot'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form edit data</h2>
            <p>Disini edit datanya</p>
            <form action="/pages/update/<?= $detail['id']; ?>" method="POST">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" autofocus value="<?= $detail['nama']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= $detail['email']; ?>">
                    <div id="emailHelp" class="form-text">Email aman di database</div>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat tempat tinggal</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $detail['alamat']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>