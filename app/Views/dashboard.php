<?= $this->extend('layouts/master') ?>
<?=$this->section("content")?>
<?php 
// $session = session();
// print_r($_SESSION);
// echo $session->get('name');
?>
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Dashboard</a>
                    <div class="d-flex">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="<?php echo base_url('/logout'); ?>">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h2 class="text-center mt-5">User Dashboard</h2  >
            <a  href="<?php echo base_url('/addnews'); ?>">Add New News</a><br>
            <a  href="<?php echo base_url('/allnews'); ?>">All News</a>
        </div>
    </div>
     
</div>
  
<?=$this->endSection()?>