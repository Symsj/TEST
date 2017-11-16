<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage ClubFitness
 */

?>
<div class="primary-sidebar">
<?php if ( is_active_sidebar( 'primary_sidebar' ) ) : ?>
	<?php dynamic_sidebar( 'primary_sidebar' ); ?>
<?php endif; ?>
</div>