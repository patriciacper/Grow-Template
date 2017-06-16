<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_theme
 */

?>

	</div><!-- #content -->

	<footer style="display: none">
        <div class="navigation">
            <div class="breadcrumbs">
                <div class="one">
                    <p id="active-txt">This is Grow</p>
                    <div class="crumb" id="active-crumb"></div>
                </div>
                <div class="two crumb-second">
                    <p>Type</p>
                    <div class="crumb"></div>
                </div>
                <div class="three crumb-third">
                    <p>Size</p>
                    <div class="crumb"></div>
                </div>
                <div class="four crumb-fourth">
                    <div class="texto">
                    <p class="how-time">Time</p>
                    <p>/</p>
                    <p class="how-know">Knowledge</p>
                        </div>
                    <div class="crumb"></div>
                </div>
                <div class="five crumb-final">
                    <p>Result</p>
                    <div class="crumb"></div>
                </div>
            </div>
            <div class="connectings">
                <div class="path" id="active-path"></div>
                <div class="path path-third"></div>
                <div class="path path-fourth"></div>
                <div class="path path-final"></div>
            </div>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
</body>
</html>
