<br><div id="table-header">Search result
</div><br>

<?php if(!$stories): ?>
	<div><h6 class="text-danger">No Story found related to your search. Search story by title.</h6></div>
	<?php else: ?>
	<table class="table table-hover table-responsive borderless">
	<?php foreach($stories as $story):?>
			<tr  class='clickable-row' data-href="<?= base_url('users/stories_view/'.$story->id)?>">
			<td>
			<?php print '<img src = "'.strip_tags($story->stories_image).'" alt = "" height="170" width = "140">';?>	
			</td>
			<td colspan="1"></td>
			<td>
				<p class="text-info" style="font-size: 18px"><?= htmlentities($story->stories_name) ?></p>
				<p><?= substr(htmlentities($story->description),0,250)?></p>
			</td>
			</tr>
	<?php endforeach;?>
	</table>
<?php endif; ?>

 