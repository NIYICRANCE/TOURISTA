<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--==== CSS =====-->

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/bootstrap.min.css'); ?>">
    <!-- Font-awesome css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/all.css'); ?>">
    <!-- Owl-carousel css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/owl.carousel.min.css'); ?>">
    <!-- My css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/style.css'); ?>">
    
    <!-- jQuery min js -->
    <script type="text/javascript" src="<?= base_url('tool/js/jquery-3.2.1.slim.min.js'); ?>"></script>

    <title>Touris Project | User Home</title>
</head>

<body>
    <!--============ Header area ===========-->
    <div class="header-area">
        <!--============= Menu Area ============-->
        <div>
            <?php $this->load->view('temp/menu'); ?>
        </div>
    </div>
    <!-- =============== single header ===========-->
    <div class="single-header-u">
        <div class="container">
            <span><a href="<?= base_url()?>home"><i class="fas fa-home"></i> Home</a></span>
        </div>
    </div>
    <div class="user-menu-area">
        <div class="container">
            <div class="user-menu">
            <ul>
                <li><a href="<?= base_url('user-home/edit-profile/'.$this->session->userdata('id').'')?>">Edit profile</a></li>
                <li><a href="<?= base_url()?>users/logout"><i class="fas fa-power-off"></i> Logout</a></li>
            </ul>
            </div>
        </div>
    </div>
    <!--=========== Content-area ==========-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12" style="min-height: 500px">
                <?php $this->load->view($user_view); ?>
            </div>
        </div>
    </div>



    <!--============ Footer Area ============-->
    <div>
        <?php $this->load->view('temp/footer'); ?>
    </div>
