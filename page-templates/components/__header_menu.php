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
	<!-- <button class="site-offcanvas__close" onclick="siteMenuClose()" aria-label="Close menu">x</button> -->
	 <button class="site-offcanvas__close" onclick="siteMenuClose()" aria-label="Close menu">
		<span></span>
		<span></span>
	</button>

	<!-- <ul class="navbar-nav mt-5">  .mr-auto, .text-end-->
		<?php //foreach( $menuitemsPrimary as $item ){ ?>
			<?php 
				//if( isset($item->object_id) && (int)$item->object_id === current_obj_id() ){ $active_class = 'active'; }
				//else{ $active_class = ''; }
			?>
			<!--<li class="nav-item">
				<a class="nav-link <?php //echo $active_class;?>" aria-current="page" href="<?php //echo $item->url;?>"><?php //echo $item->title;?></a>
			</li>
		<?php //} ?>
	</ul> -->

	<ul class="navbar-nav mt-5">
	<?php
	// Group items by parent ID for nested lookup
	$menu_by_parent = [];
	foreach ( $menuitemsPrimary as $item ) {
		$menu_by_parent[ (int) $item->menu_item_parent ][] = $item;
	}

	// Recursive render function
	if ( ! function_exists('f3_render_menu_items') ) {
		function f3_render_menu_items( $parent_id, $menu_by_parent ) {
			if ( empty( $menu_by_parent[ $parent_id ] ) ) return;

			foreach ( $menu_by_parent[ $parent_id ] as $item ) {
				$active_class = ( isset($item->object_id) && (int)$item->object_id === current_obj_id() ) ? 'active' : '';
				$has_children = ! empty( $menu_by_parent[ $item->ID ] );
				?>
				<li class="nav-item <?php echo $has_children ? 'has-submenu' : ''; ?>">
					<a class="nav-link <?php echo $active_class; ?>" aria-current="page" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>

					<?php if ( $has_children ) : ?>
						<ul class="nav-submenu">
							<?php f3_render_menu_items( $item->ID, $menu_by_parent ); ?>
						</ul>
					<?php endif; ?>
				</li>
				<?php
			}
		}
	}
	f3_render_menu_items( 0, $menu_by_parent );
	?>
</ul>
	<a href="https://support.f3networks.ca/hc/en-us/requests/new" target="_blank" class="f3-btn f3-btn f3-btn--outline mt-4">Submit a Request</a>
  </div>
</nav>
<!--/Backdrop overlay-->

<!--Hamburger button — triggers the side menu-->
<div class="sticky-top f3-menu-sticky">
	<div class="container-lg container-btn-trigger-position __menu">
		<div class="row">
			<button class="site-menu-trigger f3-btn--outline me-4 me-md-0" onclick="siteMenuOpen()" aria-label="Open menu" aria-expanded="false" aria-controls="site-offcanvas">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<!-- Submit a Request button -->
			<a href="https://support.f3networks.ca/hc/en-us/requests/new" target="_blank" class="f3-btn f3-btn--outline d-none d-md-block me-4 me-lg-0">Submit a Request</a>
		</div>
	</div>
</div>
<!--/Hamburger button — triggers the side menu-->