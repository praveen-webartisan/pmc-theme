<div class="card">
	<?php
		$type = isset($type) ? $type : "text";
		if($type == "image"):
	?>
		<div class="card-image">
			<img class="materialboxed" src="<?=assetsUrl('img/' . $image);?>">
		</div>
	<?php else: ?>
		<div class="card-content">
			<p><?=$content;?></p>
		</div>
	<?php endif;?>
</div>