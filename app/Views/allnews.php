<?= $this->extend('layouts/master') ?>
<?= $this->section('content') ?>

<div class="container mt-5 mb-5">
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Slug</th>
      <th scope="col">Body</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php if (! empty($news) && is_array($news)): ?>
            <?php foreach ($news as $news_item): ?>
    <tr>
      <th scope="row">1</th>
      <td><?= esc($news_item['title']) ?></td>
      <td><?= esc($news_item['slug']) ?></td>
      <td><?= esc($news_item['body']) ?></td>
      <td><a href="delnews/<?= esc($news_item['id']) ?>">Delete</a></td>
    </tr>
    <?php endforeach ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No Data</td>
                </tr>
        <?php endif ?> 
  </tbody>
</table>
    </div>
</div>

<?= $this->endsection() ?>