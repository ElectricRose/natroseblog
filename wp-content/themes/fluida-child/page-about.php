<?php /* Template Name: About */ ?>
<?php
/**
 * The template for displaying the about page.
 *
 *
 * @package Fluida
 */


 get_header(); ?>

 	<div id="container" class="<?php echo fluida_get_layout_class(); ?>">
 		<div class="about-content">
      <div class="about-img">
        <img src="/wp-content/uploads/2017/05/natalierose-sun1-1.png" alt="natalie rose photo in a sun">
      </div>
      <div class="about-text">
        <h2>In wilderness lies the hope of the world.</h2>
        <span><p>~John Muir</p></span><br>
        <p>Hey! I'm Natalie Rose and I'm an outdoor adventure, and DIY lifestyle blogger.</p>
        <p>I write for the open minds and wild hearts that love to wander and create.</p><br>
        <p><span>I live for the sun-drenched days on the beach, the wanderings into the woods, and the evenings spent by a crackling fire.</span></p><br>
        <p>I'm always looking for new ways to enjoy the outdoors, and new places to explore.
        <p>While I havn't travelled internationally much yet, I've discovered a lot of the hidden gems in my own backyard. I'm a big fan of getting to know your own area and the stay-cation! <br>
          Canada is huge and has so many amazing places to explore!</p>
        <p>Any time I come across an amazing new spot, sport or adventure you can be sure I will share it with you here!</p>
        <p>Travelling outside of North America is definitely on my radar though, so don't be surprised if I sell all my stuff and hit the road in the next few years! It's in the works..</p><br>
        <p>A big passion of mine is to create my own health and beauty products with essential oils and plants. Relying less on chemical laden products and learning about nature's gifts has been an awesome experience, and I love to share it!<br>
          On this blog you will find a bunch of my tried and true essential oil recipes, along with links and recommendations to other people's work that I love.<br>Beauty products don't have to be expensive or full of toxins. There's a more natural way if you are willing to put a little bit of work in!</p>
        </div>

      <div class="about-work-border">
        <div class="about-work">
          <h3>Hey! Did you hear? I build websites!</h3>
          <p>Being stuck in the 9-5 grind was killing my body and spirit, so I gave it up!</p>
          <p>It took a lot of courage to step out and start a business on my own, but in 2016 I decided to change my life and enrolled in web developent classes.
          It's been a long and challenging road, but I absolutely love what I do! I wish everyone could know the feeling of being free to make their own hours!</p><br>
          <p>Of course it's still a lot of hard work, and I actually probably work more than before.. but when you enjoy what you do it's totally different! Believe it or not, I actually look forward to Mondays!</p><br>
          <p>If you are interested in my web development skills, head over to <a href="http://www.natalierose.net" target="_blank">www.natalierose.net</a> and check it out!</p>
        </div>
        <div class="facebook">
            <?php if ( function_exists("sfp_page_plugin") ) {
            $args = array(
              'url' => 'https://www.facebook.com/Natalie-Rose-191345558020334/',
              'width' => '300',
              'hide_cover'=> false,
              'locale' => 'en_US' );
              sfp_page_plugin( $args );
            } ?>
        </div>
      </div>

          <div class="insta">
            <div class="insta-text">
              <p>Find me on Instagram! <a href="https://www.instagram.com/electric._.rose/?hl=en" target="_blank"> @electric._.rose </a></p>
            </div>
              <?php echo do_shortcode('[instagram-feed]'); ?>
            </div>


      </div><!--about-content-->
 		</div><!--container-->

 			<?php cryout_after_content_hook(); ?>
 		</main><!-- #main -->

 		<?php fluida_get_sidebar(); ?>

 	</div><!-- #container -->

 <?php get_footer();
