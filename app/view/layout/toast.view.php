<?php
	$iconColor = 'black';
	$icon = 'filter_vintage';

	switch ($type) {
		case 'success':
			$iconColor = 'green';
			$icon = 'check_circle';
			break;
		case 'failed':
			$iconColor = 'red';
			$icon = 'warning';
			break;
	}
?>
<span class="content white-text">
	<i class="material-icons <?=$iconColor;?>-text"><?=$icon;?></i>
	<?=$message;?>
</span>