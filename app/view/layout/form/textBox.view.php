<?php

	$value = isset($value) ? $value : (defined('FORM_DATA') && isset(FORM_DATA[$name]) ? FORM_DATA[$name] : '');

?>
<div class="input-field col s12">
	<?php if(isset($icon)): ?>
		<i class="material-icons prefix"><?=$icon;?></i>
	<?php endif; ?>
	<?php if($type == "textarea"): ?>
		<textarea id="<?=$name;?>" name="<?=$name;?>" class="materialize-textarea"><?=$value;?></textarea>
	<?php else: ?>
		<input type="<?=$type;?>" id="<?=$name;?>" name="<?=$name;?>" value="<?=$value;?>">
	<?php endif; ?>
	<label for="<?=$name;?>"><?=$label;?></label>
	<?php if(defined('VALIDATION') && isset(VALIDATION[$name])): ?>
		<span class="helper-text red-text text-darken"><?=VALIDATION[$name];?></span>
	<?php endif;?>
</div>