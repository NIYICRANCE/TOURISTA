<!--=== Success msg ===-->
<?php 
    if($this->session->flashdata('login_success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('login_success').'</div>';
    }
    if($this->session->flashdata('success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('success').'</div>';
    }
?>


<div class="admin-index section-padding" style="background-color: #f2f2f2; padding: 20px;">
    <div class="user-heading text-center" style="background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0,0,0,0.3);">
         <h3 style="color: #333;">Welcome, <span class="text-info"><?php print $this->session->userdata('name') ?></span></h3>
        <p style="color: #666; font-size: 16px;">Your account allows you to read stories online, comment on other teller's stories. You can also edit your profile information from here, like as your name, password and other informations.</p>   
    </div>
</div>
<br/>
<div class="row">
    <div class="col-lg-5">
<div class="user-info" style="padding: 20px; background-color: #f7f7f7; box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1); border-radius: 5px;">
    <div id="table-header">Profile details</div><br>
        <h4 class="text-info"><?= htmlentities($user_details->name) ?></h4>
        <p><i class="fas fa-envelope"></i> <?= htmlentities($user_details->email)?></p>
        <p><i class="fas fa-mobile-alt"></i> <?= htmlentities($user_details->contact)?></p>
        <p><i class="fas fa-map-marker-alt"></i> <?= htmlentities($user_details->address)?> &nbsp<i class="fas fa-city"></i> <?= htmlentities($user_details->city)?></p>
        <p><i class="fas fa-history"></i> Joined from: <?= htmlentities(date('d-M, y', strtotime($user_details->createdate)))?></p>
</div>

    </div>
    <div class="col-lg-7">
  <div class="user-activities" style="background-color: #f5f5f5; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0,0,0,0.3); padding: 20px;">
    <div id="table-header" style="color: #555; font-size: 24px; font-weight: bold; margin-bottom: 20px;">Your Activities</div>
    <div class="user-reviews" style="background-color: #fff; border-radius: 5px; padding: 10px;">
        <?php 
        $this->load->model('user_model');
        $count = count($this->user_model->my_comments());
        print "<b>Comments: </b>You have written ".$count." comments on people's stories.";
        ?>
    </div>
</div>

    </div>
</div>
