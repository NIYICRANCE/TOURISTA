<br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-12">
      <div class="card shadow">
        <div class="card-header text-white" style="background-color:lightgoldenrodyellow;">
          <h4>Story Detail</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-8">
              <img src="<?= strip_tags($stories_detail->stories_image) ?>" alt="<?= strip_tags($stories_detail->stories_name) ?>" class="img-fluid rounded">
            </div>
            <div class="col-lg-4">
              <h4 class="card-title"><?= strip_tags($stories_detail->stories_name) ?></h4>
              <p class="card-text"><strong>Flight Name:</strong> <?= strip_tags($stories_detail->flight) ?></p>
              <p class="card-text"><strong>Category:</strong> <?= strip_tags($stories_detail->category) ?></p>
              <p class="card-text"><strong>Travel Price:</strong> ₦ <?= strip_tags($stories_detail->price) ?></p>

            </div>
          </div>
          <hr>
          <h5 class="card-title">Story</h5>
          <p class="card-text"><?= nl2br(htmlentities($stories_detail->description)) ?></p>
          <hr>
          <?php if ($this->session->userdata('logged_in')): ?>
            <?php $this->load->view("users/comments"); ?>
          <?php else: ?>
            <div class="alert alert-warning" role="alert">
              <p>Please log in to write a Comment. <a href="<?= base_url('users/login') ?>" class="btn btn-link">Login</a></p>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center mt-4">
    <div class="col-lg-8">
      <?php $this->load->view("users/comments_display"); ?>
    </div>
  </div>
</div>
