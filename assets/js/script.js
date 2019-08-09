document.addEventListener('DOMContentLoaded', function(){
	initComponents();
});

function initComponents()
{
	// Initialize parallaxes
	var parallaxElements = document.querySelectorAll('.parallax');

	if(parallaxElements.length > 0){
		var parallaxInstances = M.Parallax.init(parallaxElements, {});
	}

	// Initialize modals
	var modalElements = document.querySelectorAll('.modal');

	if(modalElements.length > 0){

		modalElements.forEach(function(element, index){
			initModal(element);
		});
	}

	// Initialize carousel
	var carouselElements = document.querySelectorAll('.carousel');

	if(carouselElements.length > 0){
		var carouselInstances = M.Carousel.init(carouselElements, {
			fullWidth: true,
			indicators: true
		});
	}

	// Initialize material box
	var materialBoxElements = document.querySelectorAll('.materialboxed');

	if(materialBoxElements.length > 0){
		var materialBoxInstances = M.Materialbox.init(materialBoxElements, {
			fullWidth: true,
			indicators: true
		});
	}

	var btnShowThemes = document.getElementById("btnShowThemes");
	btnShowThemes.addEventListener('click', function(e){
		e.preventDefault();
		showModal('modalChooseTheme');
	});

	var btnChangeTheme = document.getElementById("btnChangeTheme");
	btnChangeTheme.addEventListener('click', function(e){
		e.preventDefault();
		submitThemeForm();
	});
}

function initModal(modalElement)
{
	var modalId = modalElement.getAttribute('id');
	var option = typeof(modalOptions) != 'undefined' ? modalOptions[modalId] : {};
	var modalInstance = M.Modal.init(modalElement, option);
}

function showModal(modalId)
{
	var modalElement = document.getElementById(modalId);
	var modalInstance = M.Modal.getInstance(modalElement);
	modalInstance.open();
}

function submitThemeForm()
{
	var form = document.getElementById('frmChooseTheme');
	form.submit();
}

function scrollDoc(element)
{
	var menu = document.getElementById('menuMain');
	window.scrollTo(0, (element.offsetTop - menu.offsetHeight))
}