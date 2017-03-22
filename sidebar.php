<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Redy
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<a class="" data-toggle="collapse" href="#collapseSidebar" aria-expanded="false" aria-controls="collapseSidebar">Sidebar</a>

<div class="collapse" id="collapseSidebar">
        <div class="">
                    
<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
            
        </div>
</div>
            <!-- #secondary -->
