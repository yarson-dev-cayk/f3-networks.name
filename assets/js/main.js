document.addEventListener('DOMContentLoaded', function(){
	/*Page PRE-LOADER for (VAR-1 & VAR-2):*/
	//window.addEventListener('load',function(){const loader = document.getElementById('f3-preloader'); if(loader){loader.classList.add('hide'); setTimeout(function(){loader.remove();},450);} });
	
	/*Page PRE-LOADER for (VAR-3):*/
	window.addEventListener('load',function(){const preloader = document.getElementById('f3-preloader'); if(preloader){preloader.classList.add('hide'); setTimeout(() => {preloader.remove();}, 500);}});

	if(window.innerWidth > 575) {AOS.init({ duration:1000, once:true, offset:120 });} //AOS Init (and works Desktop only)

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
	/*__/OFFCANVAS SIDE MENU - Main Menu*/

	/*Contact Form - Gravity Form Plugin*/
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
	/*__/Contact Form - Gravity Form Plugin*/


	/*OFFCANVAS SIDE MENU - Main Menu - keep the element with buttons inside .container*/
	// function updateMenuPosition(){
	// 	const container = document.querySelector('.container-btn-trigger-position.__menu');
	// 	const row = document.querySelector('.container-btn-trigger-position.__menu > .row');
	// 	if (!container || !row) return;
	// 	const containerRight = container.getBoundingClientRect().right;
	// 	row.style.right = `${window.innerWidth - containerRight}px`;
	// }
	// window.addEventListener('load', updateMenuPosition); window.addEventListener('resize', updateMenuPosition);
	/*__/OFFCANVAS SIDE MENU - Main Menu - keep the element with buttons inside .container*/
});