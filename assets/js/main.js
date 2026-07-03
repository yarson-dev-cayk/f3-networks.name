document.addEventListener('DOMContentLoaded', function(){
	/*OFFCANVAS SIDE MENU - Main Menu*/
	function siteMenuOpen() {
		document.getElementById('site-offcanvas').classList.add('is-open');
		document.getElementById('site-menu-overlay').classList.add('is-open');
		document.body.classList.add('menu-is-open');
		document.querySelector('.site-menu-trigger').setAttribute('aria-expanded', 'true');
	}
	function siteMenuClose() {
		document.getElementById('site-offcanvas').classList.remove('is-open');
		document.getElementById('site-menu-overlay').classList.remove('is-open');
		document.body.classList.remove('menu-is-open');
		document.querySelector('.site-menu-trigger').setAttribute('aria-expanded', 'false');
	}

	//Make them global for onclick=""
	window.siteMenuOpen = siteMenuOpen;
	window.siteMenuClose = siteMenuClose;
	document.addEventListener('keydown', function (e) { if(e.key === 'Escape') siteMenuClose();});

	//NEW — close the menu whenever any link inside it is clicked
	document.querySelectorAll('#site-offcanvas a').forEach(function (link) {
		link.addEventListener('click', function() { siteMenuClose(); });
	});
	/*OFFCANVAS SIDE MENU - Main Menu*/


	let wrapper = document.getElementById('contact_form');
	if( !wrapper ) return; //nothing to watch, bail out

	var observer = new MutationObserver(function () {
		var confirmation = wrapper.querySelector('#gform_confirmation_message_1');
		if (confirmation){
			wrapper.classList.add('form--notification');
			observer.disconnect(); //job done, stop watching
		}
	});
	observer.observe(wrapper, {
		childList: true,
		subtree: true
	});
});