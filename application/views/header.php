<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MAIN PAGE</title>
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dropdown.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pagination.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
  <header class="p-3 mb-3 bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <!-- logo -->
        <a href="<?php echo base_url(); ?>request">
          <div class="rounded" style="display:block; overflow: hidden;"><img src="<?php echo base_url(); ?>assets/img/cni.jpg" alt="logo cni" width="55" height="43"></div>
        </a>

        <!-- navbar links -->
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 mx-3">
          <li><a href="<?php echo base_url(); ?>request" class="nav-link px-3 text-white">Home</a></li>
          <li><a href="<?php echo base_url() ?>request/docs" class="nav-link px-3 text-white">Docs</a></li>
          <li><a href="<?php echo base_url(); ?>request/contact" class="nav-link px-3 text-white">Contact</a></li>
        </ul>

        <!-- user links -->
        <div class="dropdown text-end" data-bs-theme="dark">
          <a href="#" class="d-block text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
            </svg>
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="<?php echo base_url('profile'); ?>">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?php echo base_url(); ?>request/logout">Sign out</a></li>
          </ul>
        </div>

        
      </div>
    </div>
  </header>