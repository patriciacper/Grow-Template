<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
            
            <div class="wrapper">
                <section id="home" style="display: block">
                    <div class="intro">
			             <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					       <h1 class="entry-title"><?php the_title(); ?></h   1>

				            <p class="entry-content"><?php the_content(); ?></p><!-- .entry-content -->
                        </article><!-- #post-## -->
                    </div>
                    <button type="button">See what we can do for you</button>
                </section>
            </div>
<!--
			<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
-->
            
            <div class="modal" style="display: none">
            <div class="topo_nav">
                <ul>
                    <li class="previous" style="display: none">&#60; previous</li>
                    <li class="next">next &#62;</li>
                    <li class="finish">finish &#62;</li>
                    <li class="close">close x</li>
                </ul>
            </div>

            <section class="content">
                <div id="intro" class="page intro" style="display: block">
                    <h1>“So which plant should I start with?”</h1>
                    <p>This form works as a demo for the Grow App. After telling us your specifications we will be able to tell
                        which plant will suit best your new garden!</p>
                </div>

                <div id="second" class="page second" style="display: none">
                    <h1>What kind of garden would you like to see growing?</h1>
                    <p>Help us give you the best suggestions</p>
                    <div class="options">
                        <ul>
                            <li class="opt one grow" data-id="one" data-title="Seasoning"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/seasoning.png"></li>
                            <li class="opt two grow" data-id="two" data-title="Decoration"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/decoration.png"></li>
                            <li class="opt three grow" data-id="three" data-title="Produce"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/produce.png"></li>
                        </ul>
                    </div>
                </div>

                <div id="third" class="page third">
                    <h1>How much space do you have?</h1>
                    <p>We want to suggest you plants that thrive in your place and a tree wouldn’t go so well in an apartment…</p>
                    <div class="options">
                        <ul>
                            <li class="opt one grow" data-id="one" data-title="Big Terrain"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/terrain.png"></li>
                            <li class="opt two grow" data-id="two" data-title="Apartment"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apartment.png"></li>
                            <li class="opt three grow" data-id="three" data-title="House with Garden"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/house.png"></li>
                        </ul>
                    </div>
                </div>

                <div id="fourth" class="page fourth">
                    <h1>What about your skills and time?</h1>
                    <p>We will help you grow as an experient farmer</p>
                    <div class="levels">
                        <div class="time">
                            <h2>Time</h2>
                            <div class="circles">
                                <div class="round timer" data-id="one" data-title="1h">
                                    <div class="round2">
                                    </div>
                                </div>
                                <div class="round timer" data-id="two" data-title="2h">
                                    <div class="round2">
                                    </div>
                                </div>
                                <div class="round timer" data-id="three" data-title="3h">
                                    <div class="round2">
                                    </div>
                                </div>
                                <div class="round timer" data-id="four" data-title="4h">
                                    <div class="round2">
                                    </div>
                                </div>
                                <div class="round timer" data-id="five" data-title="5h">
                                    <div class="round2">
                                    </div>
                                </div>
                            </div>
                            <p class="time one">1h</p>
                            <p class="time two">2h</p>
                            <p class="time three">3h</p>
                            <p class="time four">4h</p>
                            <p class="time five">5h</p>
                        </div>
                        <div class="skills">
                            <h2>Knowledge</h2>
                            <div class="circles">
                                <div class="round know" data-id="one" data-title="Zero"> 
                                    <div class="round2">
                                    </div>
                                </div>
                                <div class="round know" data-id="two" data-title="New"> 
                                    <div class="round2">
                                    </div>
                                </div>
                                <div class="round know" data-id="three" data-title="Amateur">
                                    <div class="round2">
                                    </div>    
                                </div>
                                <div class="round know" data-id="four" data-title="Experienced">
                                    <div class="round2">
                                    </div>
                                </div>
                                <div class="round know" data-id="five" data-title="Pro">
                                    <div class="round2">
                                    </div>
                                </div>
                            </div>
                            <p class="skills one">Complete Zero</p>
                            <p class="skills two">Newbie</p>
                            <p class="skills three">Amateur</p>
                            <p class="skills four">Experienced</p>
                            <p class="skills five">Professional</p>
                        </div>
                    </div>
                </div>
                <div id="final" class="page result">
                    <div class="final">
                        <h1>Radish!</h1>
                        <p>The perfect first plant for your garden would be a radish!</p>
                    </div>
                    <img class="radish" src="<?php echo get_stylesheet_directory_uri(); ?>/images/radish.png">
                </div>
            </section>
            <div id="bottom">
                <div class="b-intro" style="display: block">
                    <p>Click next > to start</p>
                </div>
                <div class="b-second" style="display: none">
                    <p class="zero">Click in one option to know more</p>
                    <p class="opt1 one">A Seasoning garden will make your dishes taste so much better! You can plant things like Parsley, Coriander
                        or Oregano.</p>
                    <p class="opt1 two">A decorational garden is a pretty garden that will make your house look awesome. You will plant flowers
                        with a lot of colors and amazing looks.</p>
                    <p class="opt1 three">A Produce garden allows you to stop going to the supermarket! Everything you need for a good meal will
                        grow in your own garden. This kind of garden is best suited for those who have at least a small garden</p>
                </div>
                <div class="b-third">
                    <p class="zero">Click in one option to know more</p>
                    <p class="opt1 one">With a big terrain you get to plant quite some trees for household productions or a big nice summer garden.</p>
                    <p class="opt1 two">If you live in an apartment you probably have only a small area for some pots by the window.</p>
                    <p class="opt1 three">You have a small or medium sized area to plant, maybe it even fits one or two trees!</p>
                </div>
            </div>
            <div class="b-final">
                <p>To know its details and get help planting it, install the app!</p>
                <p>Available on IOS and Android</p>
                <div class="download">
                    <a href="https://itunes.apple.com/pt/genre/ios/id36?mt=8"><img class="apple" src="<?php echo get_stylesheet_directory_uri(); ?>/images/app_store.png"></a>
                    <a href="https://play.google.com/store"><img class="google" src="<?php echo get_stylesheet_directory_uri(); ?>/images/google_play.png"></a>
                </div>
            </div>
        </div>


		</main><!-- #main -->
        
        
	</div><!-- #primary -->

    

<?php
get_footer();
