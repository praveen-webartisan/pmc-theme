document.addEventListener('DOMContentLoaded', function(){
	initComponents();
	toggleScrollTopBtn();
});

$(window).scroll(function(){
	toggleScrollTopBtn();
});

$(document).on('click', '#btnScrollTop', function(e){
	e.preventDefault();
	$('body, html').animate({
		scrollTop: 0
	}, 500);
});

$(document).on('click', '.go-to-section', function(e){
	e.preventDefault();
	var section = $($(this).attr('href'));

	if(typeof(section) != 'undefined' && section.length > 0){
		scrollDoc(section[0]);
	}
});

$(document).on('click', '#menuMobile > li > a, #nav-mobile > li > a', function(e){
	e.preventDefault();
	var element = $($(this).attr('href'));

	if(typeof(element) != 'undefined' && element.length > 0){
		scrollDoc(element[0]);
	}
});

function initComponents()
{
	// Initialize mobile menu
	var sideNav = document.querySelectorAll('.sidenav');

	if(sideNav.length > 0){
		var sideNavInstances = M.Sidenav.init(sideNav, {});
	}

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

	var buttons = document.querySelectorAll('#btnShowThemes');

	if(buttons.length > 0){

		buttons.forEach(function(element, index){
			element.addEventListener('click', function(e){
				e.preventDefault();
				showModal('modalChooseTheme');
			});
		});
	}

	var btnChangeTheme = document.getElementById("btnChangeTheme");
	btnChangeTheme.addEventListener('click', function(e){
		e.preventDefault();
		submitThemeForm();
	});

	$('#preloader').delay(1000).fadeOut('slow');
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
	window.scrollTo({left: 0, top: (element.offsetTop - menu.offsetHeight), behavior: 'smooth'})
}