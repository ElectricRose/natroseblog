<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays the home page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *
 * @package Fluida
 */
if ( is_page_template() ) {
	load_template( get_page_template() );
	return true;
}

get_header();

function fluida_lp_layoutclass () {
	$lp = cryout_get_option ('fluida_landingpage');
	if ( $lp ) {
		echo 'fluida-landing-page one-column';
	} else {
		echo fluida_get_layout_class();
	}
} // fluida_lp_layoutclass()
?>

<div id="container" class=" <?php fluida_lp_layoutclass() ?>">
	<main id="main" role="main" class="main">
	<?php
	cryout_before_content_hook();

	$fluida_landingpage = cryout_get_option ('fluida_landingpage');

	if ( $fluida_landingpage ) {
		fluida_lpslider();
		fluida_lpblocks();
		fluida_lptext('one');
		fluida_lpboxes(1);
		fluida_lptext('two');
		fluida_lpboxes(2);
		fluida_lptext('three');
		fluida_lpindex();
		fluida_lptext('four');
	} else {
		fluida_lpindex();
	}

    cryout_after_content_hook();
	?>

	<div class="front-shirt-content">
		<div class="front-shirt-section">
			<h3>Check Out These Awesome Shirts!</h3>
			<h4>That's right, I design shirts!</h4>
			<p>Check out these snazzy wears.. Perfect for your next camping or tubing trip!<br>There are plenty of sizes, colour and style options to choose from!</p>
			<img src="wp-content/uploads/2017/05/bothshirts-1.jpg" alt="vodka train and tubeular t-shirts">
				<div id="vodka-link">
					<h3>Vodka Train</h3>
					<h4><a href="https://teespring.com/vodka-train" target="_blank">Buy It Here!</a></h4>
				</div>
				<div id="tube-link">
					<h3>Totally Tubeular</h3>
					<h4><a href="https://teespring.com/shop/totally-tubeular2" target="_blank">Buy It Here!</a></h4>
				</div>
		</div><!--front-shirt-section-->
	</div><!--front-shirt-content-->


	<div class="front-contact">
		<h5>I'm also a WordPress & Front-End Developer!</h5>
    <p>Check out my website for more info!</p>
		<p><a href="http://www.natalierose.net" target="_blank">www.natalierose.net</a></p>
	</div><!--work-with-me-->
</div><!--front-contact-->




	</main><!-- #main -->
 		<?php fluida_get_sidebar(); ?>
	<?php if ( ! $fluida_landingpage ) { fluida_get_sidebar(); } ?>
</div><!-- #container -->

<?php get_footer();
