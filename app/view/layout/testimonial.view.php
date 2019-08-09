<div class="card black-text">
	<div class="card-image waves-effect waves-block waves-light">
		<img class="activator" src="<?=assetsUrl('img/' . $image);?>">
	</div>
	<div class="card-content">
		<span class="card-title activator">
			<?=$title;?>
			<i class="material-icons right">more_vert</i>
		</span>
		<p><?=$description;?></p>
	</div>
	<div class="card-reveal">
		<span class="card-title">
			<?=$title;?>
			<i class="material-icons right">close</i>
		</span>
		<p><?=$content;?></p>
	</div>
</div>