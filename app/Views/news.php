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
        <h2 class="news-title"><?= esc($title) ?></h2>
        <?php if (! empty($news) && is_array($news)): ?>
            <?php foreach ($news as $news_item): ?>
                <h3><?= esc($news_item['title']) ?></h3>
                <div class="main">
                    <?= esc($news_item['body']) ?>
                </div>
                <p><a href="/single/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>
            <?php endforeach ?>
        <?php else: ?>
            <h3>No News</h3>
            <p>Unable to find any news for you.</p>
        <?php endif ?> 
    </div>
</div>
<?= $this->endSection() ?>

