
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

</head>

<body style="background: black;">
<!--========== Header Area ===========-->
<div class="header-area">
<!--========== Menu Area =========-->
<div  style="background: white !important;">
    <?php $this->load->view('temp/menu'); ?>
</div>
</div>
<!--=== Success msg ===-->
<?php 
    if($this->session->flashdata('login_success'))
    {
        print '<div class= "success-msg">';
        print '<div class = "container">'.$this->session->flashdata('login_success').'</div>';
        print '<div class="cross"><a href="" class="text-success"><i class="fas fa-times"></i></a></div>';
        print '</div>';
    }
?>

<!--============ Slider Area ===========-->

    <?php $this->load->view('temp/slider'); ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="<?= base_url('tool/js/popper-1.12.9.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/all.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/owl.carousel.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/main.js'); ?>"></script>

</body>

</html>
