<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package materialwp
 */

get_header(); ?>
<!-- Sekcja Top Slider -->
<div class="top-slider">

    <?php
		$cta_content = get_posts(array(
			'include' => 63,
			'post_type' => 'any',
			'numberposts' => '1',
			'suppress_filters' => false
		));

		$ts_content = apply_filters('the_content', $ts_content[0]->post_content);
		echo $ts_content;
		?>

</div>

<!-- Sekcja Trzy klucowe cechy -->
<div class="tree-features">
	<div class="container section-padding">
		<?php
		$posts = get_posts(array(
			'include' => 52,
			'post_type' => 'any',
			'numberposts' => '1',
			'suppress_filters' => false
		));

		$tf_content = apply_filters('the_content', $posts[0]->post_content);
		echo $tf_content;
		?>

	</div>
</div>
<!-- Zalety produktu-->
<div class="product-advantages darker-bg">
	<div class="container">
		<?php
		$pa_content = get_posts(array(
			'include' => 55,
			'post_type' => 'any',
			'numberposts' => '1',
			'suppress_filters' => false
		));

		$pa_content = apply_filters('the_content', $pa_content[0]->post_content);
		echo $pa_content;
		?>
	</div>
</div>
<!-- Czytaj więcej-->
<div class="product-more">
	<div class="container">
		<?php
		$pm_content = get_posts(array(
			'include' => 58,
			'post_type' => 'any',
			'numberposts' => '1',
			'suppress_filters' => false
		));

		$pm_content = apply_filters('the_content', $pm_content[0]->post_content);
		echo $pm_content;
		?>
	</div>
</div>
<!-- Call to Action-->
<div class="call-to-action accent-bg">
	<div class="container">
		<?php
		$cta_content = get_posts(array(
			'include' => 63,
			'post_type' => 'any',
			'numberposts' => '1',
			'suppress_filters' => false
		));

		$cta_content = apply_filters('the_content', $cta_content[0]->post_content);
		echo $cta_content;
		?>
	</div>
</div>
<?php get_footer(); ?>