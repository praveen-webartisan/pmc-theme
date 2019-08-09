<div class="carousel carousel-slider">
	<?php foreach($images as $image): ?>
		<a class="carousel-item" href="javascript:void(0);">
			<img src="<?=assetsUrl('img/' . $image);?>">
		</a>
	<?php endforeach; ?>
</div>