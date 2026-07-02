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

	// make them global for onclick=""
	window.siteMenuOpen = siteMenuOpen;
	window.siteMenuClose = siteMenuClose;
	document.addEventListener('keydown', function (e) { if(e.key === 'Escape') siteMenuClose();});
	/*OFFCANVAS SIDE MENU - Main Menu*/
});