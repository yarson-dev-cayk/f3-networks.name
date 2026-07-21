<?php
/**
 * EXTRAS (Helper-File with useful and custom Functions)
*/
function dd($data){ echo '<pre>', var_dump($data), '</pre>'; }

function current_obj_id(){ return get_queried_object_id(); }

function remove_editor_menu() {
	remove_action('admin_menu', '_add_themes_utility_last', 101);
} add_action('_admin_menu', 'remove_editor_menu', 1);

function get_all_menu($menu_slug, $order = 'ASC'){
	$menu_name = $menu_slug; //menu slug
	$locations = get_nav_menu_locations();
	if( !isset($locations[$menu_name]) ) { return []; }
	$menu = wp_get_nav_menu_object( $locations[$menu_name] );
	$menuitems = wp_get_nav_menu_items( $menu->term_id, array('order' => $order) );

	if($order == 'DESC'){ return array_reverse($menuitems);	}else{ return $menuitems; }
} //Call: get_all_menu('primary'); / get_all_menu('primary','DESC');


//`Construction Notice` Section -Tabs ==> #pt_wrapper_tabs
function project_tabs_shortcode() {
    if( ! have_rows('current_construction_tabs') ) { return '<p>No tabs found.</p>'; }
    $tabs = [];
    while ( have_rows('current_construction_tabs') ) {
        the_row();
        $tabs[] = [
            'tab_title'     => get_sub_field('tab_title'),
            'block1_title'  => get_sub_field('block1_title'),
            'block1_label1' => get_sub_field('block1_label1'),
            'block1_value1' => get_sub_field('block1_value1'),
            'block1_label2' => get_sub_field('block1_label2'),
            'block1_value2' => get_sub_field('block1_value2'),
            'block2_title'  => get_sub_field('block2_title'),
            'block2_label1' => get_sub_field('block2_label1'),
            'block2_value1' => get_sub_field('block2_value1'),
            'block2_label2' => get_sub_field('block2_label2'),
            'block2_value2' => get_sub_field('block2_value2'),
        ];
    }
    $hide_style = empty( $tabs[0]['block2_value2'] ) ? ' style="display:none"' : ''; //need only for 'block2_value2'is empty and we don't show 'block2_label2' & 'block2_value2'
    ob_start();?>

    <div id="pt_wrapper_tabs" class="pt-wrapper">
        <div class="pt-tabs-nav">
            <?php foreach( $tabs as $index => $tab ) : ?>
                <button type="button" class="pt-tab-btn  gradient_border <?php echo $index === 0 ? 'is-active' : '';?>" data-tab-index="<?php echo esc_attr( $index );?>">
                    <?php echo esc_html( $tab['tab_title'] );?>
                </button>
            <?php endforeach; ?>
        </div>

        <div class="pt-panels-row">
            <div class="pt-tab-panel pt-tab-panel1 gradient_border">
                <h4 class="pt-panel-title" data-pt="block1_title"><?php echo esc_html( $tabs[0]['block1_title'] ); ?></h4>
                <p class="pt-field-label" data-pt="block1_label1"><?php echo esc_html( $tabs[0]['block1_label1'] ); ?></p>
                <p class="pt-field-value" data-pt="block1_value1"><?php echo esc_html( $tabs[0]['block1_value1'] ); ?></p>
                <p class="pt-field-label" data-pt="block1_label2"><?php echo esc_html( $tabs[0]['block1_label2'] ); ?></p>
                <p class="pt-field-value" data-pt="block1_value2"><?php echo esc_html( $tabs[0]['block1_value2'] ); ?></p>
            </div>

            <div class="pt-tab-panel pt-tab-panel2 gradient_border">
                <h4 class="pt-panel-title" data-pt="block2_title"><?php echo esc_html( $tabs[0]['block2_title'] ); ?></h4>
                <p class="pt-field-label" data-pt="block2_label1"><?php echo esc_html( $tabs[0]['block2_label1'] ); ?></p>
                <p class="pt-field-value" data-pt="block2_value1"><?php echo esc_html( $tabs[0]['block2_value1'] ); ?></p>
                <?php if( !empty( $tabs[0]['block2_value2'] ) ) :?>
                    <p class="pt-field-label" data-pt="block2_label2"><?php echo esc_html( $tabs[0]['block2_label2'] ); ?></p>
                    <p class="pt-field-value" data-pt="block2_value2"><?php echo esc_html( $tabs[0]['block2_value2'] ); ?></p>
                <?php endif;?>
            </div>
        </div>
    </div>
    <div id="pt_accordion" class="pt-accordion">
        <?php foreach ( $tabs as $index => $tab ) : ?>
            <div class="pt-acc-item">
                <button type="button" class="pt-acc-header gradient_border" data-acc-index="<?php echo esc_attr( $index ); ?>">
                    <?php echo esc_html( $tab['tab_title'] ); ?>
                    <span class="pt-acc-icon">
                        <span class="pt-acc-icon-plus">+</span>
                        <span class="pt-acc-icon-minus">−</span>
                    </span>
                </button>
                <div class="pt-acc-body">
                    <div class="pt-tab-panel pt-tab-panel1">
                        <h4 class="pt-panel-title"><?php echo esc_html( $tab['block1_title'] ); ?></h4>
                        <p class="pt-field-label"><?php echo esc_html( $tab['block1_label1'] ); ?></p>
                        <p class="pt-field-value"><?php echo esc_html( $tab['block1_value1'] ); ?></p>
                        <p class="pt-field-label"><?php echo esc_html( $tab['block1_label2'] ); ?></p>
                        <p class="pt-field-value"><?php echo esc_html( $tab['block1_value2'] ); ?></p>
                    </div>
                    <div class="pt-tab-panel pt-tab-panel2">
                        <h4 class="pt-panel-title"><?php echo esc_html( $tab['block2_title'] ); ?></h4>
                        <p class="pt-field-label"><?php echo esc_html( $tab['block2_label1'] ); ?></p>
                        <p class="pt-field-value"><?php echo esc_html( $tab['block2_value1'] ); ?></p>
                        <?php if( !empty( $tab['block2_value2'] ) ) :?>
                            <p class="pt-field-label"><?php echo esc_html( $tab['block2_label2'] ); ?></p>
                            <p class="pt-field-value"><?php echo esc_html( $tab['block2_value2'] ); ?></p>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <script>window.ptTabsData = <?php echo wp_json_encode($tabs); ?>;</script>

    <?php
    return ob_get_clean();
} add_shortcode( 'project_tabs', 'project_tabs_shortcode' );
//__/`Construction Notice` Section -Tabs ==> #pt_wrapper_tabs
