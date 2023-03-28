<!--=== Book Menu ===-->
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

<div class="container">
  <div class="my-form">
    <div id="form-header">Add new Story</div>
    <?= form_open_multipart("admin/add_stories")?>
        <div class="form-group row">
            <label for="book-name" class="col-sm-2 col-form-label">Story Name</label>
            <div class="col-sm-6">
                <?= form_input(['name'=>'stories_name', 'placeholder'=> 'Story Name', 'value'=>set_value('stories_name'), 'class'=>'form-control'])?>
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('stories_name')?></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-6">
                <?= form_textarea(['name'=>'description', 'placeholder'=>'Story Description',  'value'=>set_value('description'), 'class'=>'form-control', 'rows'=>'5'])?>
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('description')?></div>
            </div>
        </div>

        <div class="form-group row">
            <label for="flight" class="col-sm-2 col-form-label">Flight</label>
            <div class="col-sm-6">
                 <?= form_input(['name'=>'flight', 'placeholder'=> 'Flight Name', 'value'=>set_value('flight'), 'class'=>'form-control'])?>
                     
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('flight')?></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">How much did your tour cost?</label>
            <div class="col-sm-6">
                <?= form_input(['name'=>'price', 'placeholder'=> 'Travel price', 'value'=>set_value('price'), 'class'=>'form-control'])?>
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('price')?></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="book_image" class="col-sm-2 col-form-label">Story image</label>
            <div class="col-sm-6">
                <?= form_upload(['name'=>'userfile', 'class'=>'form-control', 'id' => 'book_image'])?>
                <div class="text-secondary">* Upload PNG, JPG format. Image should not be more than 400KB</div>
            </div>
            <?php if (isset($upload_errors)) { ?>
            <div class="col-sm-4">
               <div class="text-danger form-error"><?php echo $upload_errors; ?></div>    
            </div>
            <?php } ?>
        </div>
        <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-6">
                    <select name="categoryId" class="form-control">
                        <option value="">Choose...</option>
                        <?php foreach($category as $ctg): ?>
                        <?php print '<option value="'.$ctg->id.'">'.$ctg->category.'</option>'; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            <div class="col-sm-4">
                <div class="text-danger form-error"><?= form_error('categoryId')?></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-6">
                <select name="status" class="form-control">
                    <option value="1">Published</option>
                </select>
            </div>
            <div class="col-sm-4">
               <div class="text-danger form-error"></div>    
            </div>
        </div>

        <div class="sub">
            <span><?= form_submit(['name'=> 'submit', 'value'=> 'Add Story', 'class'=>'btn btn-primary btn-sm my-btn'])?></span>
            <span><?= form_reset(['name'=> 'reset', 'value'=> 'Reset', 'class'=>'btn btn-danger btn-sm my-btn-res'])?></span>
        </div>
    </form>
</div>
</div>

<style>

.container-center {
  width: 100%; /* Set to your desired width */
  margin: 0 auto;
}
    .form-control {
        border: none;
        border-radius: 0;
        background-color: #f1f1f1;
        color: #333;
        font-size: 1rem;
        font-weight: 400;
        padding: 0.375rem 0.75rem;
        margin-bottom: 1rem;
    }

    .form-control:focus {
        box-shadow: none;
    }

  #form-header {
        font-size: 1.5rem;
        font-weight: 700;
    }
    
    .form-group {
        margin-bottom: 1.5rem;
    }
    
    
    .form-control:focus {
        border-bottom-color: #007bff;
    }
    
    .form-error {
        margin-top: 0.25rem;
        font-size: 0.8rem;
        font-weight: 400;
        color: #dc3545;
    }
    
    .my-btn {
        margin-right: 1rem;
    }
    
    .my-btn-res {
        margin-right: 1rem;
    }
</style>