<div class="section-title">
<?php 
$this->load->model('user_model');
$count_comments = count($this->user_model->get_comments());

print "<a href = '#collapseReview' data-toggle = 'collapse' role = 'button' aria-controls='collapseReview'><i class = 'far fa-comment'></i> Comments : (".$count_comments.")</a>";
?>
</div>

<div class="collapse" id="collapseReview">
  <div class="card card-body">
    <table class="table table-hover">
	<tbody>
		<?php foreach($comments as $comment): ?>
		<tr>
			<?php print '<td style="width: 230px">';
			print '<b class = "text-info">'.htmlentities($comment->name).'</b>';
			print '<p>'.htmlentities($comment->email).'</p>';
			print '<small>'.date('h:i a, d M Y', strtotime($comment->dateTime)).'</small>';
			print '</td>'; ?>
			<?php print '<td><p>'.nl2br(htmlentities($comment->comments)).'</p></td>'; ?>
		</tr>
		<?php endforeach ?>
	</tbody>
	</table>
  </div>
</div><br>
