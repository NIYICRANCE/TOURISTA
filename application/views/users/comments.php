<?= form_open("users/stories_view/".$this->uri->segment(3)."")?>
    <div class="form-group row">
      
        <div class="col-md-10 col-sm-10">
            <?= form_textarea(['name'=>'comments', 'placeholder'=>'Drop a comment',  'value'=>set_value('comments'), 'class'=>'form-control', 'rows'=>'3'])?>
             <div class="text-danger form-error"><?= form_error('comments')?></div>
        </div>
        <div class="col-md-2 col-sm-2">
            <?= form_submit(['name'=>'submit', 'value'=>'Comment', 'class'=>'btn btn-success'])?>
        </div>
    </div>
<?= form_close()?>
