<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Estudo sobre CodeIgniter</title>
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <script src="http://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  </head>
  <body>


    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= base_url(); ?>">Estudo CI</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php echo ($page === 'home') ? 'active' : 'none' ?>">
          <a href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="<?php echo ($page === 'about') ? 'active' : 'none' ?>">
          <a href="<?= base_url(); ?>about">About</a>
        </li>
        <li class="<?php echo ($page === 'posts') ? 'active' : 'none' ?>">
          <a href="<?= base_url(); ?>posts">Blog</a>
        </li>
		<li class="<?php echo ($page === 'categories') ? 'active' : 'none' ?>">
			  <a href="<?= base_url(); ?>categories">Categories</a>
		</li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
		  <?php if(!$this->session->userdata('logged_in')): ?>
			  <li class="<?php echo ($page === 'login') ? 'active' : 'none' ?>">
				  <a href="<?= base_url(); ?>users/login">Login</a>
			  </li>
			  <li class="<?php echo ($page === 'register') ? 'active' : 'none' ?>">
				  <a href="<?= base_url(); ?>users/register">Signup</a>
			  </li>
		  <?php endif; ?>
		  <?php if($this->session->userdata('logged_in')): ?>
				<li class="<?php echo ($page === 'create') ? 'active' : 'none' ?>">
					<a href="<?= base_url(); ?>posts/create">Add a Post</a>
				</li>
				<li class="<?php echo ($page === 'category') ? 'active' : 'none' ?>">
							<a href="<?= base_url(); ?>categories/create">Add Category</a>
				</li>
				  <li>
					  <a href="<?= base_url(); ?>users/logout">Logout </a>
				  </li>
		 <?php endif;?>

     </ul>
    </div>
  </div>
</nav>
<div class="container">
<?php if($this->session->flashdata('user_registered')): ?>
	<?= '<p class="alert alert-success">'. $this->session->flashdata('user_registered') .'</p>'?>
<?php endif; ?>
<?php if($this->session->flashdata('post_created')): ?>
	<?= '<p class="alert alert-success">'. $this->session->flashdata('post_created') .'</p>'?>
<?php endif; ?>
<?php if($this->session->flashdata('login_failed')): ?>
	<?= '<p class="alert alert-danger">'. $this->session->flashdata('login_failed') .'</p>'?>
<?php endif; ?>
	<?php if($this->session->flashdata('user_loggedout')): ?>
		<?= '<p class="alert alert-success">'. $this->session->flashdata('user_loggedout') .'</p>'?>
	<?php endif; ?>


