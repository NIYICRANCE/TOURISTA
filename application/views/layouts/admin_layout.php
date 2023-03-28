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

    <title>Torisa Project | Admin Dashboard</title>
   
</head>

<body>
    <!--========== Header area ===========-->
    <div class="header-area">
        
        <!--============ Menu Area ===========-->
        <!-- Admin doesn't have any menu -->
    </div>
        <!-- =========== single header ==========-->
    <div class="single-header-a">
        <div class="container">
            <span><a href="<?= base_url() ?>home"><i class="fas fa-home"></i> Home</a> / 
            <a href="<?= base_url()?>admin">Admin Dashboard</a></span>
        </div>
    </div>
    <!--========== Content-area ==========-->
    <div class="admin-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-3 admin-nav">
                    <?php $this->load->view('admin/admin_nav'); ?>
                </div>
                <div class="col-md-10 col-sm-9">
                    <?php $this->load->view($admin_view); ?><br>

                    <!--============ Footer Area ============-->
                    <div>
                        <?php $this->load->view('temp/footer'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>