<?= $this->extend('layout/defaultheadfoot'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Detail data</h1>
            <p>Disini data dapat di modifikasi</p>
            <div class="card">
                <h5 class="card-header"><?= $detail['nama']; ?></h5>
                <div class="card-body">
                    <h5 class="card-title">Informasi Data</h5>
                    <p class="card-text"><b>Nama Lengkap</b> : <?= $detail['nama']; ?>
                        <br><b>Email </b>: <?= $detail['email']; ?><br>
                        <b>Alamat</b>: <?= $detail['alamat']; ?>
                    </p>
                    <a href="/pages/edit/<?= $detail['id']; ?>" class="btn btn-primary">Edit</a>
                    <form action="/pages/<?= $detail['id']; ?>" method="POST" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                    <a href="/pages/crud" class="btn btn-light">Kembali</a>


                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>