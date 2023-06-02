<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <h1>assalamualaikoom <?= $name ? $name : "World!" ?></h1>
<?= $this->endSection() ?>