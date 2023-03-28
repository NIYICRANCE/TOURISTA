<div class="container">
<div class="my-form">
    <div id="form-header">Update Story info</div>
    <?= form_open_multipart("admin/stories_edit/{$stories_detail->id}")?>
        <div class="form-group row">
            <label for="book-name" class="col-sm-2 col-form-label">Story Name</label>
            <div class="col-sm-6">
                <?= form_input(['name'=>'stories_name', 'placeholder'=> 'Story Name', 'value'=>set_value('stories_name', $stories_detail->stories_name), 'class'=>'form-control'])?>
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('stories_name')?></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-6">
                <?= form_textarea(['name'=>'description', 'placeholder'=>'Story Description',  'value'=>set_value('description', $stories_detail->description), 'class'=>'form-control', 'rows'=>'5'])?>
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('description')?></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="flight" class="col-sm-2 col-form-label">Flight</label>
            <div class="col-sm-6">
                 <?= form_input(['name'=>'flight', 'placeholder'=> 'Flight Name', 'value'=>set_value('flight', $stories_detail->flight), 'class'=>'form-control'])?>
                     
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('flight')?></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-6">
                <?= form_input(['name'=>'price', 'placeholder'=> 'Story price', 'value'=>set_value('price', $stories_detail->price), 'class'=>'form-control'])?>
            </div>
            <div class="col-md-4">
                <div class="text-danger form-error"><?= form_error('price')?></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="stories_image" class="col-sm-2 col-form-label">Story image</label>
            <div class="col-sm-6">
                <?= form_upload(['name'=>'userfile', 'class'=>'form-control'])?>
                <div class="text-secondary">* Upload PNG, JPG format. Image should not be more than 400KB</div>
            </div>
            <div class="col-sm-4">
               <div class="text-danger form-error"></div>    
            </div>
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
            <span><?= form_submit(['name'=> 'submit', 'value'=> 'Update', 'class'=>'btn btn-primary btn-sm my-btn'])?></span>
            <span><?= form_reset(['name'=> 'reset', 'value'=> 'Reset', 'class'=>'btn btn-danger btn-sm my-btn-res'])?></span>
        </div>
    </form>
</div>
</div>

