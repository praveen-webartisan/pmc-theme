<div class="card">
	<?php
		$type = isset($type) ? $type : "text";
		if($type == "image" || $type == "image-text"):
	?>
		<div class="card-image">
			<img class="materialboxed" src="<?=assetsUrl('img/' . $image);?>">
			<?php if($type == "image-text"): ?>
				<span class="card-title"><?=$title;?></span>
			<?php endif; ?>
		</div>
		<?php if($type == "image-text"): ?>
			<div class="card-content">
				<p><?=$content;?></p>
			</div>
			<div class="card-action">
				<span class="card-desc"><?=$desc;?></span>
			</div>
		<?php endif; ?>
	<?php else: ?>
		<div class="card-content">
			<?php if(isset($descTop)): ?>
				<div class="card-desc"><?=$descTop;?></div>
			<?php endif;?>
			<?php if(isset($title)): ?>
				<span class="card-title"><?=$title;?></span>
			<?php endif;?>
			<?php if(isset($descBottom)): ?>
				<div class="card-desc"><?=$descBottom;?></div>
			<?php endif;?>
			<p><?=$content;?></p>
		</div>
		<?php if(isset($action)): ?>
			<div class="card-action"><?=$action;?></div>
		<?php endif;?>
	<?php endif;?>
</div>