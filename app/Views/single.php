<?= $this->extend('layouts/master') ?>
<?= $this->section('headerAssets') ?>
<style>
.news-title {
    color: red;
}
</style>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container mt-5 mb-5">
    <div class="row">
    <?php if (! empty($news) && is_array($news)): ?>
           
                <h3><?= esc($news['title']) ?></h3>
                <div class="main">
                    <?= esc($news['body']) ?>
                </div>
           
        <?php else: ?>
            <h3>No News</h3>
            <p>Unable to find any news for you.</p>
        <?php endif ?>
    </div>
</div>
<?= $this->endSection() ?>

