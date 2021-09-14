<?php
/**
 * The template for displaying the calculator.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Calculator
 *
 * @package Sahti
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		    <?php while ( have_posts() ) : the_post();
				do_action( 'storefront_page_before' );
				get_template_part( 'content', 'page' );
				do_action( 'storefront_page_after' );
			endwhile; ?>
			
			<div id="calculator">
			    <h3>Dog's Information</h3>
			    <form id="calculator-inputs">
			        <label class="dog-weight-input-label">Current Weight (in pounds):
                      <input class="dog-weight-input" type="text" name="dog-weight" /> lbs
                    </label>
                    <hr/>
			        <p>Select the image that most closely resembles your dog's shape</p>
			        <label class="dog-shape-radio-label">
                      <input class="dog-shape-radio" type="radio" name="dog-shape" value="1" />
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dog-weight-chart-dog1.png" data-toggle="popover" title="Very Thin" data-content="No fat cover on ribs or tail base. Severe abdominal tuck and accentuated hourglass shape" data-placement="top" data-trigger="hover" />
                    </label>
                    <label class="dog-shape-radio-label">
                      <input class="dog-shape-radio" type="radio" name="dog-shape" value="2" />
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dog-weight-chart-dog2.png" data-toggle="popover" title="Underweight" data-content="Little fat cover on ribs and tail base. Abdominal tuck and marked hourglass shape" data-placement="top" data-trigger="hover" />
                    </label>
                    <label class="dog-shape-radio-label">
                      <input class="dog-shape-radio" type="radio" name="dog-shape" value="3" />
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dog-weight-chart-dog3.png" data-toggle="popover" title="Ideal Body Weight" data-content="Slight fat cover on ribs and tail base, with come contour to tail base. Abdominal tuck, and well-proportioned waist." data-placement="top" data-trigger="hover" />
                    </label>
                    <label class="dog-shape-radio-label">
                      <input class="dog-shape-radio" type="radio" name="dog-shape" value="4" />
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dog-weight-chart-dog4.png" data-toggle="popover" title="Overweight" data-content="Moderate fat cover on ribs and tail base - bones not easily felt. No abdominal tuck, and back is slightly broadened at waist." data-placement="top" data-trigger="hover" />
                    </label>
                    <label class="dog-shape-radio-label">
                      <input class="dog-shape-radio" type="radio" name="dog-shape" value="5" />
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dog-weight-chart-dog5.png" data-toggle="popover" title="Obese" data-content="Thick fat cover on ribs and tail base - difficult to feel bones. No waist with fat hanging from abdomen, and back is markedly broadened." data-placement="top" data-trigger="hover" />
                    </label>
                    <hr/>
                </form>

                <p id="weight-warning" style="display: none; style= width: 100%; text-align: center; border: #b72a4d 2px solid; padding: 10px 0; ">Your dog is underweight.  <br/>Please contact your veterinarian or Sahti at <a href="mailto:info@sahtihealth.com">info@sahtihealth.com</a> to discuss feeding options. </p>
                <div id="calc-results">
                    <p>Ideal Weight: <span id="ideal-weight"></span> lbs</p>
                    <p>kCals per Day: <span id="kcals"></span> kCals | 1 - 8oz cup = 650 kCal</p>
                    <p>Cups per Day: <span id="cups"></span> cups</p>
                </div>
                <p>** Please note: This is an approximation of how much Sahti to feed your dog per day; this does not apply to other foods.  Your dog's nutrition needs vary on their metabolism and overall activity.  If you have questions on how much to feed your dog, please contact your veterinarian or Sahti at <a class="support-email" href="mailto:info@sahtihealth.com">info@sahtihealth.com</a> **</p> 
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

</script>

<?php
get_footer();
