<!DOCTYPE html>
<html>
<head>
	<title><?=APP_TITLE;?></title>
	<?= includeView("includes.styles"); ?>
</head>
<body>

	<?= includeView('layout.menu'); ?>

	<div class="modal modal-fixed-footer" id="modalChooseTheme">
		<div class="modal-content">
			<h4>Choose Theme</h4>
			<form id="frmChooseTheme" action="<?=appUrl('/set-theme');?>" method="POST">
				<?=includeView('layout.form.radioButton', ["value" => "blue", "name" => "theme", "text" => "Blue", "textColor" => "blue", "checked" => APP_THEME == "blue"]);?>
				<?=includeView('layout.form.radioButton', ["value" => "red", "name" => "theme", "text" => "Red", "textColor" => "red", "checked" => APP_THEME == "red"]);?>
				<?=includeView('layout.form.radioButton', ["value" => "green", "name" => "theme", "text" => "Green", "textColor" => "green", "checked" => APP_THEME == "green"]);?>
				<?=includeView('layout.form.radioButton', ["value" => "purple", "name" => "theme", "text" => "Purple", "textColor" => "purple", "checked" => APP_THEME == "purple"]);?>
				<?=includeView('layout.form.radioButton', ["value" => "cyan", "name" => "theme", "text" => "Cyan", "textColor" => "cyan", "checked" => APP_THEME == "cyan"]);?>
				<?=includeView('layout.form.radioButton', ["value" => "teal", "name" => "theme", "text" => "Teal", "textColor" => "teal", "checked" => APP_THEME == "teal"]);?>
				<?=includeView('layout.form.radioButton', ["value" => "brown", "name" => "theme", "text" => "Brown", "textColor" => "brown", "checked" => APP_THEME == "brown"]);?>
			</form>
		</div>
		<div class="modal-footer">
			<a class="modal-close waves-effect waves-<?=APP_THEME; ?> btn-flat" href="javascript:void(0);">Close</a>
			<a id="btnChangeTheme" class="waves-effect waves-<?=APP_THEME; ?> btn-flat" href="javascript:void(0);">Change</a>
		</div>
	</div>

	<div class="parallax-container">
		<div class="section">
			<div class="row center white-text">
				<br><br>
				<h1><?=APP_TITLE; ?></h1>
				<h5 class="light">A modern responsive PHP theme based on Material Design</h5>
				<a class="btn-large <?=APP_THEME;?> waves-effect waves-light">Get started</a>
			</div>
		</div>
		<div class="parallax"><img src="<?=assetsUrl('img/bg/bg1.jpg'); ?>"></div>
	</div>

	<div class="section container">
		<div class="row margin-top-2">

			<div class="col s12 m4 light center">
				<i class="material-icons medium <?=APP_THEME;?>-text">3d_rotation</i>
				<h5 class="">Column 1</h5>
				<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur est enim, nec ultricies eros tristique id. Etiam a ligula ultrices, aliquet ante ut, auctor odio. Nunc maximus iaculis erat sed fringilla. Integer hendrerit porttitor nibh, nec laoreet quam facilisis et. Donec commodo dolor et quam aliquet, nec convallis ex efficitur. Nullam ante neque, rutrum rutrum arcu quis, mattis finibus orci.</p>
			</div>

			<div class="col s12 m4 light center">
				<i class="material-icons medium <?=APP_THEME;?>-text">ac_unit</i>
				<h5 class="">Column 2</h5>
				<p class="">Donec mattis ex viverra condimentum vestibulum. In mi purus, imperdiet in ultricies eget, faucibus ut diam. Proin pulvinar lorem vitae velit rutrum, quis convallis neque lobortis. Fusce sem justo, semper at gravida id, faucibus ut dolor. Mauris aliquet purus velit, eget dictum tellus facilisis eget. In imperdiet enim eu mauris ornare aliquet. Curabitur convallis dui turpis, eu aliquam justo viverra in. Nulla ac mi vehicula, finibus nisi non, faucibus lacus. Fusce vehicula vehicula tellus, sed malesuada libero dignissim at.</p>
			</div>

			<div class="col s12 m4 light center">
				<i class="material-icons medium <?=APP_THEME;?>-text">airplay</i>
				<h5 class="">Column 2</h5>
				<p class="">Donec mattis ex viverra condimentum vestibulum. In mi purus, imperdiet in ultricies eget, faucibus ut diam. Proin pulvinar lorem vitae velit rutrum, quis convallis neque lobortis. Fusce sem justo, semper at gravida id, faucibus ut dolor. Mauris aliquet purus velit, eget dictum tellus facilisis eget. In imperdiet enim eu mauris ornare aliquet. Curabitur convallis dui turpis, eu aliquam justo viverra in. Nulla ac mi vehicula, finibus nisi non, faucibus lacus. Fusce vehicula vehicula tellus, sed malesuada libero dignissim at.</p>
			</div>

		</div>
	</div>

	<div class="parallax-container valign-center">
		<div class="section container">
			<div class="row center white-text">
				<br><br>
				<h5 class="light left-align">Vestibulum non molestie lectus. Donec vitae egestas arcu. Cras condimentum quis est et rutrum. Aliquam erat volutpat. Donec id ante lobortis, lobortis nunc vitae, consectetur diam. Donec lobortis, nisi at scelerisque accumsan, augue est congue odio, ac aliquet purus odio consequat nisl. Phasellus ornare pellentesque orci, non vehicula lorem placerat sit amet. Aenean euismod facilisis quam, eget venenatis velit molestie vel.</h5>
			</div>
		</div>
		<div class="parallax"><img src="<?=assetsUrl('img/bg/bg2.jpg'); ?>"></div>
	</div>

	<div class="section container">
		<div class="row margin-top-2">

			<div class="col s12 m12 light center">
				<h4 class="">Full width column</h4>
				<p class="left-align">Nulla rutrum lorem metus, a dignissim mi posuere a. Donec nec turpis id est varius porttitor ac in enim. Maecenas ipsum ligula, laoreet molestie scelerisque eu, tristique quis nulla. Integer fringilla scelerisque congue. Aenean augue ex, gravida vel orci eu, sagittis hendrerit augue. Proin porta urna eget urna dapibus, ac sodales massa pretium. Morbi pellentesque arcu id commodo euismod. Sed mattis placerat mauris, in feugiat elit sodales in. Phasellus at egestas ante. Maecenas pretium vehicula eleifend. Suspendisse semper ligula ut ex molestie tincidunt. Donec id elit eget dolor blandit imperdiet. Ut aliquet turpis ac tortor ultrices luctus. Quisque non efficitur diam, id suscipit nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque ut accumsan purus.</p>
			</div>

		</div>
	</div>

	<div class="parallax-container valign-center">
		<div class="section container">
			<div class="row center white-text">
				<br><br>
				<h5 class="light left-align">Nunc sagittis nibh diam, quis scelerisque odio dignissim quis. Morbi convallis nisl non massa efficitur, a interdum tellus dictum. Pellentesque et lectus tristique, molestie augue et, eleifend elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum rhoncus rutrum ligula ac molestie. Proin sed neque velit. Suspendisse condimentum mi ullamcorper ultrices accumsan.</h5>
			</div>
		</div>
		<div class="parallax"><img src="<?=assetsUrl('img/bg/bg3.jpg'); ?>"></div>
	</div>

	<div class="section container">
		<div class="row margin-top-2">

			<div class="col s12 m12 light center">
				<h3>Slider</h3>
				<br>
				<div class="carousel carousel-slider center <?=APP_THEME;?> white-text">
					<div class="carousel-fixed-item center">
						<!--  -->
					</div>
					<div class="carousel-item">
						<h2>First panel</h2>
						<p>Nullam faucibus nec risus in blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent erat elit, luctus non laoreet eu, commodo sit amet diam.</p>
						<p>Duis accumsan odio feugiat consectetur lobortis. Etiam blandit turpis a pulvinar imperdiet. Aenean in diam lacinia, hendrerit quam ut, laoreet magna. Nulla a tempor metus, eu commodo quam. Fusce fringilla, felis a consequat eleifend, justo tortor facilisis tortor, ut malesuada ante ipsum eu lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed a sapien nec metus dapibus rhoncus. Donec pellentesque turpis in nisl viverra suscipit. Vivamus mattis ac quam fringilla vestibulum.</p>
					</div>
					<div class="carousel-item">
						<h2>Second panel</h2>
						<p>Nullam faucibus nec risus in blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent erat elit, luctus non laoreet eu, commodo sit amet diam.</p>
						<p>Duis accumsan odio feugiat consectetur lobortis. Etiam blandit turpis a pulvinar imperdiet. Aenean in diam lacinia, hendrerit quam ut, laoreet magna. Nulla a tempor metus, eu commodo quam. Fusce fringilla, felis a consequat eleifend, justo tortor facilisis tortor, ut malesuada ante ipsum eu lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed a sapien nec metus dapibus rhoncus. Donec pellentesque turpis in nisl viverra suscipit. Vivamus mattis ac quam fringilla vestibulum.</p>
					</div>
					<div class="carousel-item">
						<h2>Third panel</h2>
						<p>Integer pellentesque accumsan justo, ut commodo risus vulputate id. Mauris vestibulum, mi ac pellentesque lobortis, turpis lacus euismod velit, at condimentum est augue ut eros. Nullam aliquet ultricies nulla non maximus. Nullam id libero id mauris posuere vulputate. Praesent bibendum diam eu nisl eleifend tincidunt. Aenean id libero consequat, auctor nisl sit amet, euismod arcu. Nulla rutrum bibendum erat, at ultricies dolor. Maecenas in massa at ipsum venenatis pretium sit amet nec tellus. Phasellus malesuada lacus nec vehicula lobortis. Vivamus in mattis lectus, ac vehicula ligula. Mauris accumsan orci sit amet faucibus finibus. Mauris sodales turpis non eleifend lacinia. Nunc vitae augue vitae magna vestibulum faucibus. Nullam varius, dui ac ultrices tincidunt, risus nulla aliquam diam, eget suscipit purus ipsum nec lacus. Nunc non libero leo. Vestibulum in diam varius, vulputate elit et, placerat odio.</p>
					</div>
					<div class="carousel-item">
						<h2>Fourth panel</h2>
						<p>Quisque sed metus commodo tortor sodales tincidunt. Praesent efficitur mollis ante eu fermentum. Integer placerat sollicitudin nulla a interdum. Praesent auctor augue vel tellus rutrum eleifend. Quisque et molestie ligula. Sed erat dui, cursus ac porta sed, ultrices non nulla. Sed quis imperdiet massa, semper interdum erat. Fusce nec risus ultrices nunc tristique scelerisque at sit amet lorem. Nam posuere nulla purus, ac blandit dolor facilisis in. Nulla facilisi. Integer nibh odio, gravida vel eleifend eu, euismod sit amet metus. Suspendisse est eros, iaculis in bibendum nec, rhoncus ut neque. Curabitur leo lectus, pulvinar sed dolor sed, egestas molestie tortor. In eu gravida orci. Fusce quis semper dui. Ut ac lacus eget risus imperdiet bibendum sed sed nibh.</p>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="parallax-container valign-center">
		<div class="section container">
			<div class="row center white-text">
				<br><br>
				<h5 class="light left-align">Quisque maximus lobortis arcu et ornare. Maecenas euismod hendrerit orci quis vestibulum. Suspendisse sit amet orci accumsan, bibendum purus in, efficitur lorem. Pellentesque tristique odio velit, quis interdum orci condimentum vitae. Aliquam sollicitudin lacus ut placerat euismod. Integer mi ligula, varius in arcu nec, lacinia luctus urna.</h5>
			</div>
		</div>
		<div class="parallax"><img src="<?=assetsUrl('img/bg/bg1.jpg'); ?>"></div>
	</div>

	<div class="section container">
		<div class="row">
			<div class="col s12 m12">
				<h3>Testimonials</h3>
			</div>

			<div class="col s12 m12 light">

				<div class="row">
					<div class="col s12 m4">
						<?=includeView('layout.testimonial', ["image" => "person/man-1.png", "title" => "Person 1", "description" => "Profession", "content" => "Integer at tempor magna, consequat semper est. Vivamus at porta erat, ac pulvinar mi. Donec in auctor velit, eleifend vulputate tellus. Vivamus nisl mauris, tristique non ligula non, fringilla pulvinar sapien. Cras ac ornare sapien. In placerat, ex ac aliquam elementum, turpis nibh semper dolor, quis molestie dolor justo vitae ante."]);?>
					</div>
					<div class="col s12 m4">
						<?=includeView('layout.testimonial', ["image" => "person/woman-1.png", "title" => "Person 2", "description" => "Profession", "content" => "Sed orci urna, commodo semper convallis et, efficitur ac neque. Sed tincidunt est quis purus pharetra placerat. In bibendum, tellus a tempor placerat, purus ex tincidunt tortor, eu aliquet nunc urna ac eros. Aenean facilisis leo in metus convallis dignissim. Nam quis maximus diam."]);?>
					</div>
					<div class="col s12 m4">
						<?=includeView('layout.testimonial', ["image" => "person/man-3.png", "title" => "Person 3", "description" => "Profession", "content" => "Pellentesque vitae ex pulvinar, eleifend ligula sit amet, fringilla augue. Suspendisse eget ex a tortor sollicitudin porttitor eget vitae mauris. Donec vitae mauris at neque tempor lobortis et vitae tortor. Suspendisse ut orci ipsum. Donec euismod elit et nulla lacinia interdum. Etiam euismod lectus nec felis finibus sodales. Duis suscipit ullamcorper quam, iaculis eleifend ante suscipit eu."]);?>
					</div>
				</div>

				<div class="row">
					<div class="col s12 m4">
						<?=includeView('layout.testimonial', ["image" => "person/woman-2.png", "title" => "Person 4", "description" => "Profession", "content" => "Aliquam quis nulla bibendum, aliquam turpis a, ullamcorper felis. Donec ullamcorper eget nulla eu cursus. Proin ultricies eros a leo sollicitudin, quis pellentesque neque pharetra. Duis molestie posuere velit sed auctor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam ut sem vitae turpis ultricies posuere ac in nisi."]);?>
					</div>
					<div class="col s12 m4">
						<?=includeView('layout.testimonial', ["image" => "person/man-3.png", "title" => "Person 5", "description" => "Profession", "content" => "Proin non commodo erat, at efficitur nulla. Mauris sodales magna a pharetra egestas. Praesent sit amet lorem ac lectus efficitur placerat sit amet quis nunc. Phasellus imperdiet consectetur lorem, ac aliquet velit vestibulum sit amet. Sed a velit ligula."]);?>
					</div>
					<div class="col s12 m4">
						<?=includeView('layout.testimonial', ["image" => "person/woman-3.png", "title" => "Person 6", "description" => "Profession", "content" => "Aliquam magna dui, lobortis id pretium ac, fermentum eget arcu. Vivamus elementum vestibulum metus sed lacinia. Nullam fermentum arcu vel tempor mollis. Proin bibendum facilisis lorem, nec tempus arcu pretium id. Curabitur turpis elit, congue vitae urna eu, laoreet fringilla nunc. Nunc sit amet sollicitudin orci. In hac habitasse platea dictumst."]);?>
					</div>
				</div>

			</div>

		</div>
	</div>

	<div class="parallax-container valign-center">
		<div class="section container">
			<div class="row center white-text">
				<br><br>
				<h5 class="light left-align">In commodo tellus ipsum, vel vulputate arcu rhoncus in. Integer sagittis laoreet dolor sed tristique. Praesent venenatis interdum nulla, eu interdum mauris condimentum in. In id dui pharetra, tempus purus et, mattis turpis. Phasellus accumsan vestibulum mi a ultricies. Nunc ante quam, tincidunt ut aliquam eu, pretium sit amet nulla. Ut blandit nisi sapien, eget dictum sem tristique nec. Sed eget finibus nibh. Pellentesque magna neque, semper vel felis et, ornare blandit elit.</h5>
			</div>
		</div>
		<div class="parallax"><img src="<?=assetsUrl('img/bg/bg2.jpg'); ?>"></div>
	</div>

	<div class="section container">
		<div class="row">
			<div class="col s12 m12">
				<h3>Gallery</h3>
			</div>

			<div class="col s12 m12 light">

				<div class="row">
					<div class="col s12 m6">
						<?=includeView('layout.card', ["type" => "image", "image" => "gallery/gallery-1.jpg"]); ?>
					</div>
					<div class="col s12 m6">
						<?=includeView('layout.card', ["type" => "image", "image" => "gallery/gallery-2.jpg"]); ?>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m4">
						<?=includeView('layout.card', ["type" => "image", "image" => "gallery/gallery-3.jpg"]); ?>
					</div>
					<div class="col s12 m4">
						<?=includeView('layout.card', ["type" => "image", "image" => "gallery/gallery-4.jpg"]); ?>
					</div>
					<div class="col s12 m4">
						<?=includeView('layout.card', ["type" => "image", "image" => "gallery/gallery-5.jpg"]); ?>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m6">
						<?=includeView('layout.card', ["type" => "image", "image" => "gallery/gallery-6.jpg"]); ?>
					</div>
					<div class="col s12 m6">
						<?=includeView('layout.card', ["type" => "image", "image" => "gallery/gallery-7.jpg"]); ?>
					</div>
				</div>

			</div>

		</div>
	</div>

	<div class="parallax-container valign-center">
		<div class="section container">
			<div class="row center white-text">
				<br><br>
				<h5 class="light left-align">Nam fermentum, diam non facilisis consectetur, est lorem accumsan lorem, blandit condimentum neque elit id enim. Mauris accumsan sagittis turpis sed vulputate. In lorem tellus, congue non elementum a, hendrerit quis ipsum. Curabitur mattis, purus a pharetra aliquet, lectus felis fermentum quam, eget egestas massa nibh id nibh. Donec at facilisis massa. Mauris rutrum, dolor vel porttitor tempor, purus tellus ultrices libero, eget tempus dolor sem eu lorem.</h5>
			</div>
		</div>
		<div class="parallax"><img src="<?=assetsUrl('img/bg/bg3.jpg'); ?>"></div>
	</div>

	<div class="section container" id="sectionContactForm">
		<div class="row">
			<div class="col s12 m12">
				<h3>Contact Form</h3>
			</div>

			<div class="col s12 m6 light">
				<form autocomplete="off" action="<?=appUrl('send-contact-form');?>" method="POST">
					<div class="row">
						<div class="col s12">
							<div class="row">
								<?=includeView('layout.form.textBox', ["name" => "name", "label" => "Name", "type" => "text", "icon" => "account_circle"]);?>
							</div>
							<div class="row">
								<?=includeView('layout.form.textBox', ["name" => "email", "label" => "Email", "type" => "email", "icon" => "email"]);?>
							</div>
							<div class="row">
								<?=includeView('layout.form.textBox', ["name" => "mobile", "label" => "Mobile", "type" => "text", "icon" => "phone"]);?>
							</div>
							<div class="row">
								<?=includeView('layout.form.textBox', ["name" => "message", "label" => "Message", "type" => "textarea", "icon" => "message"]);?>
							</div>
							<div class="row">
								<button type="submit" class="btn waves-effect waves-light <?=APP_THEME;?>">
									<i class="material-icons right">send</i>
									Send
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>

			<div class="col s12 m6 light">
				<!--  -->
			</div>

		</div>
	</div>

	<?= includeView("layout.footer"); ?>
	<?= includeView("includes.scripts"); ?>

	<script type="text/javascript">
		<?php if(defined('ALERT')): ?>
			var alertToastHtml = "<?=addslashes(includeView('layout.toast', ALERT));?>";
			M.toast({html: alertToastHtml});
		<?php endif; ?>
		<?php if(defined('VALIDATION')): ?>
			document.addEventListener('DOMContentLoaded', function(){
				scrollDoc(document.getElementById('sectionContactForm'));
			});
		<?php endif; ?>
	</script>

</body>
</html>