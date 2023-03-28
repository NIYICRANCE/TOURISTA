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
          <div class = "count-pending-books">
          <?php 
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
	<div id="table-header">Pending Story list</div>
	<table class="table table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Story Name</th>
      <th scope="col">Description</th>
      <th scope="col">Flight</th>
      <th scope="col">Cost of Flight</th>
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
      <?php print '<td><span>'.strip_tags($story->flight).'</span></td>'; ?>
      <?php print '<td><span>₦ '.strip_tags($story->price).'</span></td>'; ?>
      <?php print '<td><span>'.ucwords(strip_tags($story->category)).'</span></td>'; ?>
      <?php print '<td>'.ucwords(strip_tags($story->name)).'</td>'; ?>

      <?php print '<td><img src = "'.strip_tags($story->stories_image).'" alt = "" width="50" hieght="80" </td>';?>


      <?php print '<td>';
        print '<div><a href= "'.base_url().'admin/published_stories/'.$story->id.'" title= "Post the Story" class="btn btn-primary btn-sm confirm-alert" data-confirm = "Are you sure to post this Story?">Published</a></div><br>';

        print '<div><a href= "'.base_url().'admin/delete_pending_stories/'.$story->id.'" title= "Delete" class="btn btn-danger btn-sm delete" data-confirm = "Are you sure to delete this Story, which is upload by a user?"><i class= "fas fa-trash"></i> Delete&nbsp</a></div>';
        print '</td>'; 
      ?>
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>
</div>
