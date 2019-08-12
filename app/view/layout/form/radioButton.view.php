<p>
	<label>
		<?php
			$checked = isset($checked) && $checked ? 'checked' : '';
		?>
		<input class="with-gap" type="radio" value="<?=$value;?>" name="<?=$name;?>" <?=$checked;?> />
		<span class="<?=isset($textColor) ? $textColor : '' ?>"><?=$text;?></span>
	</label>
</p>