<div class="text-success">
<?php 
    if($this->session->flashdata('login_success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('login_success').'</div>';
    }
?>
</div>


<div class="admin-index section-padding" style="min-height: 500px">
	<div class="text-center">
		<h3>Admin Dashboard</h3>
		<p>Welcome, <a href="#" class="text-primary"><?= $this->session->userdata('name') ?></a>. You have logged in as an admin. Now you can monitor the full application</p>
	</div>
	
   
<div class="admin-content section-padding">
		<div class="container">
			<div class="row con-flex">
				 <?php if($this->session->userdata('type') == 'A'): ?>
				 <div class="col-lg-3 col-md-3 col-sm-4">
					<div class="col-admin bg-primary clickable-div" data-href="<?= base_url('admin/category')?>">
						<div>
							<i class="fas fa-list"></i>
							<h6>Total Category</h6>
						</div>
						<?php 
				          $this->load->model('admin_model');
				          $count_category = count($this->admin_model->get_category());
				          print $count_category;
				          ?> 
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4">
					<div class="col-admin bg-secondary clickable-div" data-href="<?= base_url('admin/allusers')?>">
						<div>
							<i class="fas fa-users"></i>
							<h6>Total Users</h6>
						</div>
						
						<?php 
				          $this->load->model('admin_model');
				          $count_users = count($this->admin_model->get_users());
				          print $count_users;
				          ?> 
					</div>
				</div>	
 				<?php endif; ?>
				
				<div class="col-lg-3 col-md-3 col-sm-4">
					<div class="col-admin bg-success clickable-div" data-href="<?= base_url('admin/stories')?>">
						<div>
							<i class="fas fa-book"></i>
							<h6>Total Stories</h6>
						</div>
						<?php 
				          $this->load->model('admin_model');
				          $count_stories = count($this->admin_model->count_total_stories());
				          print $count_stories;
				          ?> 
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-4">
					<div class="col-admin bg-warning clickable-div" data-href="<?= base_url('admin/pending_stories')?>">
						<div>
							<i class="fas fa-book-dead"></i>
							<h6>Pending Stories</h6>
						</div>
						<?php 
				          $this->load->model('admin_model');
				          $count_pending_stories = count($this->admin_model->pending_stories());
				          print $count_pending_stories;
				          ?> 
					</div>
				</div>
			</div>
		</div>
	</div>



	
</div>