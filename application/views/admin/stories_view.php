<br>
				
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
              <h6 class="card-subtitle mb-2 text-muted"><?= strip_tags($stories_detail->name) ?></h6>
              <p class="card-text"><strong>Flight price :</strong> <?= strip_tags($stories_detail->flight) ?></p>
              <p class="card-text"><strong>Category:</strong> <?= strip_tags($stories_detail->category) ?></p>
              <p class="card-text"><strong>Cost of Journey:</strong> ₦ <?= strip_tags($stories_detail->price) ?></p>
              		<div>
					<?php
					if($stories_detail->status == '1')
					{
						print "Status: <span class = 'text-success'>Published</span>";
					}
					else
					{
						print "Status: <span class = 'text-danger'>Unpublished</span>";
					}
					?>		
				</div>
            </div>
          </div>
          <hr>
          <h5 class="card-title">Story</h5>
          <p class="card-text"><?= nl2br(htmlentities($stories_detail->description)) ?></p>
          <hr>
        <?php print '<td>';
	        print '<a href= "'.base_url().'admin/stories_edit/'.$stories_detail->id.'" title= "Edit" class="btn btn-success btn-sm"> <i class= "fas fa-wrench"></i> Update</a>&nbsp';
	        print '<a href= "'.base_url().'admin/stories_delete/'.$stories_detail->id.'" title= "Delete" class="btn btn-danger btn-sm delete" data-confirm = "Are you sure to delete this stories?"> <i class= "fas fa-trash"></i> Delete</a>&nbsp';

	        print '</td>'; 
	      ?>

        </div>
      </div>
    </div>
  </div>

</div>

	  