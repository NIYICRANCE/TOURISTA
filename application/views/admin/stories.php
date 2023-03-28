<!--=== Success msg ===-->
<?php 
    if($this->session->flashdata('success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('success').'</div>';
    }
?>

<div class="container-fluid">
    <div class="books-menu">
      <ul>
        <li><a href="<?= base_url()?>admin/stories"><i class="fas fa-book"></i> all Stories</a></li>
        <li><a href="<?= base_url()?>admin/add_stories"><i class="fas fa-plus-circle"></i> Add new Stories</a></li>

        <li class="pending-books"><a href="<?= base_url()?>admin/pending_stories"><i class="fas fa-tools"></i> Pending Stories</a> 
        <div class = "count-pending-books"><?php 
          $this->load->model('admin_model');
          $count_pending_stories = count($this->admin_model->pending_stories());
          print $count_pending_stories;
          ?> 
        </div>
        </li>
        
      </ul>
  </div>
</div>

<br>
<div class="container-fluid">
	<div id="table-header">Stories list</div>
	<table class="table table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Story Name</th>
      <th scope="col">Description</th>
      <th scope="col">flight</th>
      <th scope="col">Cost of Trip</th>
      <th scope="col">Category</th>
      <th scope="col">User</th>
      <th scope="col">Story Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>


  <tbody>
  	<?php foreach($stories as $story): ?>
    <tr>
      <?php print '<td>'.$story->id.'</td>'; ?>
      <?php print '<td><a href = "'.base_url().'admin/stories_view/'.$story->id.'" title="More Description" class= "text-info">'.strip_tags(ucwords($story->stories_name)).'</a></td>'; ?>

      <?php print '<td><span>'.substr(strip_tags($story->description), 0, 100).'</span></td>'; ?>
      <?php print '<td>'.strip_tags($story->flight).'</td>'; ?>
      <?php print '<td>₦ '.strip_tags($story->price).'</td>'; ?>
      <?php print '<td>'.ucwords(strip_tags($story->category)).'</td>'; ?>
      <?php print '<td>'.ucwords(strip_tags($story->name)).'</td>'; ?>

      <?php print '<td><img src = "'.strip_tags($story->stories_image).'" alt = "" width="50" hieght="80" </td>';?>


      <?php print '<td>';
        print '<a href= "'.base_url().'admin/stories_view/'.$story->id.'" title= "View More" class="btn btn-primary btn-sm">View</a>&nbsp';

        print '</td>'; 
      ?>
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>

<div class="paginataion section-padding">
<?= $this->pagination->create_links() ?>
</div>
</div>
