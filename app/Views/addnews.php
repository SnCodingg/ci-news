<?= $this->extend('layouts/master') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Add News</h5>
                    <form action="<?php echo base_url('/addnews'); ?>" method="post">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="" required>
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" required>
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <textarea class="form-control" id="body" name="body" required></textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-block">Add Now</button>
                           
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
     
</div>

<?= $this->endsection() ?>