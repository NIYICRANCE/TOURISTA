<br><div id="table-header">Stories By Tellers
<!--=== for category name as title ===-->
<?php foreach($category as $ctg): ?>
<?php 
if(isset($_GET['ctg']))
{
	if($_GET['ctg']== $ctg->tag)
	{
		print '<i class="fas fa-angle-double-right" style="color: #ddd"></i> '.$ctg->category;
	}
} 
?>
<?php endforeach; ?>
</div><br>
<style>
    #book-image {
     
        width: 350px;
        height: 350px;
        overflow: hidden;
        border-radius: 50%;

    }

    #book-image img {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        border-radius: 50%;
        object-fit: cover; width: 100%; height: 100%;
    }

</style>
<div class="row ">
	<?php foreach($stories as $stories):?>
	<div class="col-lg-4 col-md-3 col-sm-4">
		<div class="">
		<div id="single-book" style="border-radius: 50%;">
			<div id="book-image">
				<?php print '<img src = "'.strip_tags($stories->stories_image).'" alt = "">';?>
			</div>
			<!--=== Restricted user to buy their own project ===-->
			<?php if($this->session->userdata('id') != $stories->userId): ?>

			<?php endif; ?>
			
			
		</div>	<div class="book-text">
			<?php print '<a href = "'.base_url().'users/stories-view/'.$stories->id.'" style="color:black !important;">'.substr(htmlentities($stories->stories_name),0,30).'</a>'; ?>
				</div>
	</div>
	</div>
	<?php endforeach;?>
</div><br>

<!--=== Pagination ===-->
<?php if(!isset($_GET['ctg'])):?>
<div class="paginataion section-padding">
<?= $this->pagination->create_links() ?>
</div>
<?php endif; ?>

 