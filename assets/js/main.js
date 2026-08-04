document.addEventListener('DOMContentLoaded', function(){
	/*Page PRE-LOADER for (VAR-1 & VAR-2):*/
	//window.addEventListener('load',function(){const loader = document.getElementById('f3-preloader'); if(loader){loader.classList.add('hide'); setTimeout(function(){loader.remove();},450);} });
	
	/*Page PRE-LOADER for (VAR-3):*/
	window.addEventListener('load',function(){const preloader = document.getElementById('f3-preloader'); if(preloader){preloader.classList.add('hide'); setTimeout(() => {preloader.remove();}, 500);}});

	if(window.innerWidth > 575) {AOS.init({ duration:1000, once:true, offset:120 });} //AOS Init (and works Desktop only)


	//console.log(globalData);

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
	(function () {
		let wrapper = document.getElementById('contact_form');
		if (!wrapper) return; //nothing to watch, bail out

		var observer = new MutationObserver(function () {
			var confirmation = wrapper.querySelector('#gform_confirmation_message_1');
			if (confirmation) {
				wrapper.classList.add('form--notification');
				observer.disconnect(); //job done, stop watching
			}
		});
		observer.observe(wrapper, {
			childList: true,
			subtree: true
		});
	})();
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
	
	
   	/*Construction Notice` Section -Tabs ==> #pt_wrapper_tabs*/
	const nav = document.querySelector('.pt-tabs-nav');
	if (nav && typeof window.ptTabsData !== 'undefined') {
		const tabs = window.ptTabsData;

		nav.addEventListener('click', function (e) {
			const btn = e.target.closest('.pt-tab-btn');
			if (!btn) return;

			const index = parseInt(btn.dataset.tabIndex, 10);
			const data = tabs[index];
			if (!data) return;

			nav.querySelectorAll('.pt-tab-btn').forEach(b => b.classList.remove('is-active'));
			btn.classList.add('is-active');

			const panels = document.querySelectorAll('.pt-tab-panel');
			panels.forEach(p => p.classList.add('pt-fade-out'));

			setTimeout(function () {
				document.querySelectorAll('#pt_wrapper_tabs [data-pt]').forEach(function (el) {
					const field = el.dataset.pt;
					if (data.hasOwnProperty(field)) { el.textContent = data[field]; }
				});
				panels.forEach(p => p.classList.remove('pt-fade-out'));
			}, 450);
		});
	}

	const accordion = document.querySelector('.pt-accordion');
	if (accordion) {
		accordion.addEventListener('click', function (e) {
			const header = e.target.closest('.pt-acc-header');
			if (!header) return;

			const item = header.closest('.pt-acc-item');
			const wasOpen = item.classList.contains('is-open');

			// close all, then open the clicked one (unless it was already open)
			accordion.querySelectorAll('.pt-acc-item').forEach(i => i.classList.remove('is-open'));
			if (!wasOpen) item.classList.add('is-open');
		});
	}
	/*__/Construction Notice` Section -Tabs ==> #pt_wrapper_tabs*/

	//SwiperJS Slider in "About Us" Page
	let swiperjsSliderDOM = document.querySelector('.swiper');
	if(swiperjsSliderDOM) { //https://swiperjs.com/
		//Pull Slider Options from globalData (localized via wp_localize_script)
		const sliderOptions = (typeof globalData !== 'undefined' && globalData.leadershipTeamSlider) ? globalData.leadershipTeamSlider : { autoplay:false, navigation:true, speed:2000 };
		let sliderOptionsAutoplay;
		if(sliderOptions.autoplay){	sliderOptionsAutoplay = { delay:4000, disableOnInteraction:false, pauseOnMouseEnter:true} }else{ sliderOptionsAutoplay = false; }
		let sliderNavigation;
		if(sliderOptions.navigation){ sliderNavigation = { nextEl:'.swiper-button-next', prevEl:'.swiper-button-prev' } }else{ sliderNavigation = false; }

		const swiper = new Swiper('.swiper', {
			//direction:'vertical',
			loop: true, //---> loop: count > 4,
			effect: 'slide', //---> slide|fade|cube|coverflow|flip
			slidesPerView: 'auto',
			slidesPerGroup: 1,
			spaceBetween: 20,
			speed: sliderOptions.speed, //---> sliderOptions.speed,
			//centeredSlides: true,
			autoplay: sliderOptionsAutoplay,

			pagination: { el:'.swiper-pagination', clickable:true },
			navigation: sliderNavigation,
			breakpoints: {
				0:{	slidesPerView:1, spaceBetween:26, },
				576:{ slidesPerView:2, spaceBetween:25, },
				768:{ slidesPerView:3,	spaceBetween:25, },
				1200:{ slidesPerView: 4, spaceBetween: 25, },
			}
		});
	}
	//__/SwiperJS Slider in "About Us" Page


    const mapContainer = document.getElementById('g_map_frame_container');
	if(mapContainer){
		const mapLogo = mapContainer.querySelector('.map-logo');
		mapContainer.addEventListener('mouseenter',() => { mapLogo.classList.add('is-active'); });
		mapContainer.addEventListener('mouseleave', () => {	mapLogo.classList.remove('is-active'); });
	}

});