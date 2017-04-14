<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Estudo sobre CodeIgniter</title>
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
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
    </div>
  </div>
</nav>
<div class="container">
