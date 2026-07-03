<?php $menuitemsPrimary = get_all_menu('primary','ASC'); $menuitemsPrimary_count = count($menuitemsPrimary);?>

<!-- ===== OFFCANVAS SIDE MENU ===== -->
<!--Backdrop overlay-->
<div id="site-menu-overlay" class="__menu site-menu-overlay" onclick="siteMenuClose()"></div>

<!-- Side panel -->
<nav id="site-offcanvas" class="site-offcanvas" aria-label="Main navigation">
  <div class="site-offcanvas__head">
    <a href="<?php echo home_url('/');?>" class="site-offcanvas__logo">
      <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/F3-Networks-logo.webp" alt="<?php bloginfo('name');?>">
    </a>
	<button class="site-offcanvas__close" onclick="siteMenuClose()" aria-label="Close menu">x</button>

	<ul class="navbar-nav mt-5"> <!--.mr-auto, .text-end-->
		<?php foreach( $menuitemsPrimary as $item ){ ?>
			<?php 
				if( isset($item->object_id) && (int)$item->object_id === current_obj_id() ){ $active_class = 'active'; }
				else{ $active_class = ''; }
			?>
			<li class="nav-item">
				<a class="nav-link <?php echo $active_class;?>" aria-current="page" href="<?php echo $item->url;?>"><?php echo $item->title;?></a>
			</li>
		<?php } ?>
	</ul>
	<a href="#contact" class="f3-btn f3-btn f3-btn--outline mt-4">Submit a Request</a>
  </div>
</nav>
<!--/Backdrop overlay-->
<!--Hamburger button — triggers the side menu-->
<div class="container-lg container-btn-trigger-position __menu">
	<div class="row">
		<button class="site-menu-trigger f3-btn--outline me-4 me-md-0" onclick="siteMenuOpen()" aria-label="Open menu" aria-expanded="false"	aria-controls="site-offcanvas">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<!-- Submit a Request button -->
		<a href="#contact" class="f3-btn f3-btn--outline d-none d-md-block me-4 me-lg-0">Submit a Request</a>
	</div>
 </div>
<!--/Hamburger button — triggers the side menu-->