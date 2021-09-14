<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sahti
 */

get_header(); ?>

	<div id="primary" class="content-area">
        <div class="row center white parallax" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/banner-1.jpg');">
            <div class="overlay" style="padding: 20% 10% 1% 10%;">
                <h3 class="white">Our purpose is to help families and their dogs to live long joyful lives together.</h3>
                <p>Learn more about our wholesome food crafted with a blend of research science and traditional medicine.</p>
            </div>
        </div>
        <div class="row center" style="border-top: 3px solid #da643d;">
            <div class="col-md-6 col-sm-6">
                <div class="container left">
                    <h3>Sahti dog food is full of helpful nutrients called <span class="orange-highlight">phytochemicals</span> and <span class="red-highlight">prebiotics</span> that help dogs:</h3>
                    <ul class="large check">
                        <li>Strengthen the immune system</li>
                        <li>Lower cholesterol</li>
                        <li>Live a longer, more joyful life with you</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="container" class="center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twoBagSmall.png" style="margin-right: 5%;" />
                    <br/><a href="<?php echo home_url(); ?>/purchase" class="button" style="display: inline-block;">Buy Now</a>
                </div>
            </div>
        </div>
    
        <div class="row" style="text-align: center; background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/canvas-bg.jpg') repeat; border-top: 2px dashed #6d615a;">
            <div class="col-md-6 col-sm-6">
                <div class="container">
                    <div id="reviewCarousel" class="carousel slide" style="color: #27a79d;">
                        <h3>Reviews</h3>
                          <ol class="carousel-indicators">
                                <li data-target="#reviewCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#reviewCarousel" data-slide-to="1"></li>
                                <li data-target="#reviewCarousel" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="carousel-content">
                                        <p>“For the last couple of years, my dog had trouble keeping food down. I switched her to Sahti and the change was almost immediate. She is able to keep her food down and and her coat has become shiny and dandruff-free! Most days she forgets she is 14 and acts like a puppy again. I feel good knowing I am providing her with the best nutrition I can in her later years”
                                        <br/> - Lisa</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-content">
                                        <p>"Our Aussie-Doodle, Astra is so happy eating Sahti dog food.  She has tremendous energy, a full and shiny coat, and loves her food.   As physicians, we are conscious of the food we feed ourselves and feel that it is important to pay attention to the care we give our dog.   Sahti helps control her weight and we're excited about seeing an evidence based approach to dog nutrition.   Dr. Ryan is a scientist who studies natural approaches to health and nutritional approaches to cancer prevention.   I can't think of anyone I'd trust more with the health of my dog."
                                        <br/> - Bernie</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-content">
                                        <p>“My 16-year old Italian Greyhound (almost deaf, almost blind, bad teeth) is eating this food very well (unlike many other dog food brands I've tried.) I am amazed that she is not only eating it but seems to really enjoy it! I add warm water to let it soften. I'm very happy!!”
                                        <br/> - Theresa</p>
                                    </div>
                                </div>
                          </div>
                    </div> <!-- #reviewCarousel -->
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/elizabeth.png" style="box-shadow: 0px 0px 5px 1px #dcdcdc;" />
                    <p class="large" style="color: #d65327;">“Our clinical studies have shown that we can improve the body’s absorption of nutrients through whole foods instead of with vitamin supplements alone.”</p>
                    <p style="color: #d65327;">—Dr. Elizabeth, Co-founder of Sahti and Associate Professor in Toxicology at CSU</p>
                </div>
            </div>
        </div>
        <div class="row" style="text-align: center; background: linear-gradient(to bottom,  #a42645 0%,#b72a4d 100%); color: #fff; padding: 15px 0;">
            <div class="container">
                <h2 class="white">Designed to Keep Your Dog Active and Healthy</h2>
            </div>
        </div>
        <div class="row" style="text-align: center; background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/canvas-bg.jpg') repeat; color: #b72a4d; padding: 15px; border-bottom: 2px dashed #6d615a;">
            <div class="container">
                <p class="dark">Most dog foods use non-nutritive fillers like potato products, or fiber extracts like cellulose and beet pulp to meet nutritive guidelines at a lower cost. Unfortunately, dogs’ bodies didn’t evolve to digest nutrition this way. Sahti is formulated to optimize a dog’s natural ability to absorb and use nutrition from wholesome foods.</p>
                <p class="dark">Instead of using hard to digest fiber extracts, Sahti is made with whole food fibers and nutrition that delivers a larger number of disease-preventing phytochemicals and prebiotics to the dog’s stomach for optimal absorption throughout the body.</p>
                <hr/>
                <h4 class="red-highlight">Diversity in phytochemicals from whole ingredients give your dog</h4>
                <div class="row">
                    <div class="col-md-8">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dog-graphic.png" style="max-width: 80%;" />
                    </div>
                    <div class="col-md-4">
                        <ul class="dark" style="list-style-type: none; text-align: left; font-size: 1.2em; margin-top: 10%;">
                            <li>
                                <span class="dot red"></span>
                                Improved Gut Health
                            </li>
                            <li>
                                <span class="dot green"></span>
                                Resistance to Cancer
                            </li>
                            <li>
                                <span class="dot orange"></span>
                                Stronger Immunity
                            </li>
                            <li>
                                <span class="dot blue"></span>
                                Better Metabolism
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container" style="text-align: center;">
                <div style="width: 70%; margin: 0 auto; padding: 5% 0;">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/uB-FQcz24mc?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row" style="text-align: center; background: linear-gradient(to bottom,  #a42645 0%,#b72a4d 100%); color: #fff; padding: 15px 0;">
            <div class="container">
                <h2 class="white">Wholesome Dog Food in Reusable Bags</h2>
            </div>
        </div>
        <div class="row center white parallax" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/FarmCropped.jpg');">
            <div class="overlay" style="padding: 5% 5% 1% 5%;">
                <h3 class="white">Quality from Start to Finish</h3>
                <p>We’re dedicated to finding the best food from sources you can trust. That’s why all our ingredients are sourced from farms that meet our standards—the majority from the USA and one from Belgium.</p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/WorldMap.png" style="max-width: 100%;" />
            </div>
        </div>
        <div class="row" style="text-align: center; background: linear-gradient(to bottom,  #a42645 0%,#b72a4d 100%); color: #fff; padding: 15px 0;">
            <div class="container">
                <p>Plastic is destroying our planet. Just as our formula is designed to help dogs live a longer joyful life, our bags can enjoy a longer life too. Re-use them, or gift them to your friends and remind them to reduce the use of plastic bags at the grocery store! Live a wholesome life.</p>
            </div>
        </div>
        <div id="product-section" class="row">
            <div class="container center">
                <div>
                    <?php storefront_site_branding(); ?>
                    <?php echo do_shortcode('[products sku="DWMF-5, DWMF-25"]'); ?>
                </div>
            </div>
        </div>
	</div><!-- #primary -->

<?php
get_footer();
