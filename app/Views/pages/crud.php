<?= $this->extend('layout/defaultheadfoot'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Simple CRUD</h1>
            <a href="/pages/create" class="btn btn-primary mt-3">Tambah data baru</a>
            <?php if (session()->getFlashdata('Message')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('Message') ?>
                </div>

            <?php endif ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($orang as $o) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $o['nama']; ?></td>
                            <td><?= $o['email']; ?></td>
                            <td><?= $o['alamat']; ?></td>
                            <td>
                                <?php $i++ ?>
                                <a href="/detail/<?= $o['id']; ?>" class="btn btn-success">Detail</a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>