<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forkio
 */

get_header();
?>

	<!--- // FORKAPP -->
    <section class="forkapp">
        <div class="container">
            <h1 class="forkapp_title">Fork App</h1>
            <span class="forkapp_subtitle">A Real Gamechanger In The World Of Web-Development</span>
            <p class="forkapp_version">v. 2.8 For Mac and Windows</p>
            <a href="#" class="button button_forkapp">Download For Free Now</a>
            </a>
        </div>
    </section>
    <!-- MAIN INFO -->
    <section class="main-info" id="Overview">
        <div class="container">
            <p class="main-info_conditions">Unlimited 30-Days Trial Period</p>
            <h3 class="main-info_title">Revolutionary editor</h3>
            <p class="main-info_about">Aenean cursus imperdiet nisl id fermentum. Aliquam pharetra dui laoreet vulputate
                dignissim. Sed id metus id quam auctor molestie eget ut augue.</p>
            <div class="main-info_icones">
                <div class="wrap-iconeset">
                    <div class="main-info_icones_item">
                        <i class="far fa-eye "></i>
                        <p class="main-info_icones_item__exacly">Watch</p>
                    </div>
                    <p class="main-info_icones__quantity">1,139</p>
                </div>
                <div class="wrap-iconeset">
                    <div class="main-info_icones_item">
                        <i class="fas fa-star"></i>
                        <p class="main-info_icones_item__exacly">Star</p>
                    </div>
                    <p class="main-info_icones__quantity">21,038</p>
                </div>
                <div class="wrap-iconeset">
                    <div class="main-info_icones_item">
                        <i class="fas fa-code-branch"></i>
                        <p class="main-info_icones_item__exacly">Fork</p>
                    </div>
                    <p class="main-info_icones__quantity">21,038</p>
                </div>
            </div>
        </div>
    </section>
    <!-- FEATURES -->
    <section class="features ">
        <div class="container">
            <h4 class="features_title">&lt; Here is what you get &gt;</h4>
            <div class="features-left">
                <div class="features-left-block">
                    <div class="features-left-block_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature-icone1.png" alt="features">
                    </div>
                    <div class="features-left-block_about">
                        <p class="features-left-block_title">Creatred to Make The Web Better</p>
                        <p class="features-left-block_text">Aenean cursus imperdiet nisl id fermentum. Aliquam pharetra
                            dui
                            laoreet vulputate dignissim. Sed id metus id quam auctor molestie eget ut augue.
                        </p>
                    </div>
                </div>
                <div class="features-left-block">
                    <div class="features-left-block_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature-icone2.png" alt="features">
                    </div>
                    <div class="features-left-block_about">
                        <p class="features-left-block_title">Incredibly Powerful Tool</p>
                        <p class="features-left-block_text">Maecenas eu dictum felis, a dignissim nibh. Mauris rhoncus
                            felis
                            odio, ut volutpat massa placerat ac. Curabitur dapibus iaculis mi gravida luctus. Aliquam
                            erat
                            volutpat.
                        </p>
                    </div>
                </div>
                <div class="features-left-block">
                    <div class="features-left-block_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature-icone3.png" alt="features">
                    </div>
                    <div class="features-left-block_about">
                        <p class="features-left-block_title">Experimental Stuff</p>
                        <p class="features-left-block_text">Maecenas eu dictum felis, a dignissim nibh. Mauris rhoncus
                            felis
                            odio, ut volutpat massa placerat ac. Curabitur dapibus iaculis mi gravida luctus. Aliquam
                            erat
                            volutpat.
                        </p>
                    </div>
                </div>
                <div class="features-left-block">
                    <div class="features-left-block_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature-icone4.png" alt="features">
                    </div>
                    <div class="features-left-block_about">
                        <p class="features-left-block_title">Creatred to Make The Web Better</p>
                        <p class="features-left-block_text">Maecenas eu dictum felis, a dignissim nibh. Mauris rhoncus
                            felis
                            odio, ut volutpat massa placerat ac. Curabitur dapibus iaculis mi gravida luctus. Aliquam
                            erat
                            volutpat.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="features-right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature-code.png" alt="code">
        </div>
    </section>
    <!-- SOCIAL -->
    <section class="social ">
        <div class="container">
            <div class="carousel single-item">
               
            	<?php if ( have_posts() ) :while ( have_posts() ) :the_post(); ?>

                <div class="social-wrap ">
                    <div class="social-foto">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social-foto.png" alt="Steven Strange"> -->
                        <?php echo get_the_post_thumbnail( get_the_ID(), 'post_custonthumb' );
                        ?>
                    </div>
                    <div class="social-title">
                        <span class="social-title_name"> <?php the_title(); ?> </span>
                        <a href=" <?php the_permalink() ?> " class="social-title_profession"><?php echo get_the_author() ?></a>
                    </div>
                    <div class="social-about">
                        <p class="social-about_text"><a href="<?php the_permalink() ?>" class="social-about_link">@Pixelbuddha</a> 
                        <?php the_excerpt(); ?>
                        </p>
                        <p class="social-about_old"><?php echo get_the_date()?></p>

                    </div>
                </div>

                <?php
                    endwhile;
                else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>






                <!-- <div class="social-wrap">
                    <div class="social-foto">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social-foto.png" alt="Steven Strange">
                    </div>
                    <div class="social-title">
                        <span class="social-title_name">Steven Strange</span>
                        <a href="#" class="social-title_profession">@DoctorS</a>
                    </div>
                    <div class="social-about">
                        <p class="social-about_text"><a href="#" class="social-about_link">@Pixelbuddha</a> Suspendisse
                            sodales
                            sem est, in scelerisque felis scelerisque in. Aenean faucibus mollis risus. Praesent sit
                            amet
                            erat
                            eget eros.</p>
                        <p class="social-about_old">2 hours ago</p>

                    </div>
                </div>
                <div class="social-wrap">
                    <div class="social-foto">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social-foto.png" alt="Steven Strange">
                    </div>
                    <div class="social-title">
                        <span class="social-title_name">Steven Strange</span>
                        <a href="#" class="social-title_profession">@DoctorS</a>
                    </div>
                    <div class="social-about">
                        <p class="social-about_text"><a href="#" class="social-about_link">@Pixelbuddha</a> Suspendisse
                            sodales
                            sem est, in scelerisque felis scelerisque in. Aenean faucibus mollis risus. Praesent sit
                            amet
                            erat
                            eget eros.</p>
                        <p class="social-about_old">2 hours ago</p>

                    </div>
                </div>
                <div class="social-wrap">
                    <div class="social-foto">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social-foto.png" alt="Steven Strange">
                    </div>
                    <div class="social-title">
                        <span class="social-title_name">Steven Strange</span>
                        <a href="#" class="social-title_profession">@DoctorS</a>
                    </div>
                    <div class="social-about">
                        <p class="social-about_text"><a href="#" class="social-about_link">@Pixelbuddha</a> Suspendisse
                            sodales
                            sem est, in scelerisque felis scelerisque in. Aenean faucibus mollis risus. Praesent sit
                            amet
                            erat
                            eget eros.</p>
                        <p class="social-about_old">2 hours ago</p>
                    </div>
                </div>
                <div class="social-wrap">
                    <div class="social-foto">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social-foto.png" alt="Steven Strange">
                    </div>
                    <div class="social-title">
                        <span class="social-title_name">Steven Strange</span>
                        <a href="#" class="social-title_profession">@DoctorS</a>
                    </div>
                    <div class="social-about">
                        <p class="social-about_text"><a href="#" class="social-about_link">@Pixelbuddha</a> Suspendisse
                            sodales
                            sem est, in scelerisque felis scelerisque in. Aenean faucibus mollis risus. Praesent sit
                            amet
                            erat
                            eget eros.</p>
                        <p class="social-about_old">2 hours ago</p>

                    </div>
                </div> -->
            </div>

            <div class="social-links">
                <div class="social-links-item">
                    <a href="#" class="social-links-item-btn_filling">
                        <div class="social-links-item-btn">
                            <i class="fab fa-github social-links-item-btn_filling_icone"></i>
                            <p class="social-links-item-btn_filling_site">GitHub</p>
                        </div>
                    </a>
                    <p class="social-links-item_followers">7 352 Followers</p>
                </div>
                <div class="social-links-item">
                    <a href="#" class="social-links-item-btn_filling">
                        <div class="social-links-item-btn twitter">
                            <i class="fab fa-twitter social-links-item-btn_filling_icone twitter"></i>
                            <p class="social-links-item-btn_filling_site twitter">Twitter</p>
                        </div>
                    </a>
                    <p class="social-links-item_followers">136 312 Followers</p>
                </div>
                <div class="social-links-item">
                    <a href="#" class="social-links-item-btn_filling">
                        <div class="social-links-item-btn facebook">
                            <i class="fab fa-facebook-f social-links-item-btn_filling_icone facebook"></i>
                            <p class="social-links-item-btn_filling_site facebook">Facebook</p>
                        </div>
                    </a>
                    <p class="social-links-item_followers">218 092 Subscribers</p>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIALS -->
    <section class="testimonials" id="AboutFork">
        <div class="container">
            <h5 class="testimonials-title">People Are Talking About Fork</h5>
            <div class="testimonials-item-wrap">
                <div class="testimonials-item">
                    <div class="testimonials-item_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials1.png" alt="smashing">
                    </div>
                    <p class="testimonials-item_text">Sed vestibulum scelerisque urna, eu finibus leo facilisis sit
                        amet.
                        Proin id dignissim magna. Sed varius urna et pulvinar venenatis. </p>
                </div>
                <div class="testimonials-item">
                    <div class="testimonials-item_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials2.png" alt="smashing">
                    </div>
                    <p class="testimonials-item_text">Donec euismod dolor ut ultricies consequat. Vivamus urna ipsum,
                        rhoncus molestie neque ac, mollis eleifend nibh.</p>
                </div>
                <div class="testimonials-item">
                    <div class="testimonials-item_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials3.png" alt="smashing">
                    </div>
                    <p class="testimonials-item_text">In efficitur in velit et tempus. Duis nec odio dapibus, suscipit
                        erat fringilla, imperdiet nibh. Morbi tempus auctor felis ac vehicula. </p>
                </div>
                <div class="testimonials-item">
                    <div class="testimonials-item_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials4.png" alt="smashing">
                    </div>
                    <p class="testimonials-item_text">Sed vestibulum scelerisque urna, eu finibus leo facilisis sit
                        amet. Proin id dignissim magna. Sed varius urna et pulvinar venenatis. </p>
                </div>
                <div class="testimonials-item">
                    <div class="testimonials-item_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials5.png" alt="smashing">
                    </div>
                    <p class="testimonials-item_text">Praesent ut eros tristique, malesuada lectus vel, lobortis massa.
                        Nulla faucibus lorem id arcu consequat faucibus. </p>
                </div>
                <div class="testimonials-item">
                    <div class="testimonials-item_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials6.png" alt="smashing">
                    </div>
                    <p class="testimonials-item_text">Fusce pharetra erat id odio blandit, nec
                        pharetra eros venenatis. Pellentesque porttitor cursus massa et vestibulum. </p>
                </div>
                <p class="testimonials-bottom">Duis lobortis arcu sed arcu tincidunt feugiat. Nulla nisi mauris,
                    facilisis vitae aliquet id, imperdiet quis nibh. Donec eget elit eu libero tincidunt consequat nec
                    elementum orci. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                    mus. </p>
                <hr class="testimonials-hr">
            </div>
        </div>

    </section>

    <!-- PRICING -->
    <section class="pricing" id="Options">
        <div class="container">
            <h5 class="testimonials-title">Fork Subscription
                Pricing</h5>
            <div class="wparwrap">
                <div class="pricing-wrap">

                    <div class="pricing-rate">
                        <span class="pricing-rate_title">Students</span>
                        <p class="pricing-rate_cost">$<span>29</span> </p>
                        <p class="pricing-rate_time">per Month</p>
                        <hr class="pricing-rate_hr ">
                        <p class="pricing-rate_quality">Professional License</p>
                        <a href="#" class="pricing-rate_btn">purchase</a>
                    </div>
                </div>
                <div class="pricing-wrap">

                    <div class="pricing-rate">
                        <span class="pricing-rate_title">professional</span>
                        <p class="pricing-rate_cost">$<span>59</span></p>
                        <p class="pricing-rate_time">per Month</p>
                        <hr class="pricing-rate_hr ">
                        <p class="pricing-rate_quality">Professional License <br>
                            Email Support</p>
                        <a href="#" class="pricing-rate_btn">purchase</a>
                    </div>
                </div>
                <div class="pricing-wrap">


                    <div class="pricing-rate best">
                        <span class="pricing-rate_title best_title">agency</span>
                        <p class="pricing-rate_cost best_cost">$<span>99</span></p>
                        <p class="pricing-rate_time">per Month</p>
                        <hr class="pricing-rate_hr ">
                        <p class="pricing-rate_quality">1-12 Team Members <br>
                            Phone Support</p>
                        <a href="#" class="pricing-rate_btn best_btn">purchase</a>
                    </div>
                </div>
                <div class="pricing-wrap">

                    <div class="pricing-rate">
                        <span class="pricing-rate_title">enterprise</span>
                        <p class="pricing-rate_cost">$<span>159</span></p>
                        <p class="pricing-rate_time">per Month</p>
                        <hr class="pricing-rate_hr ">
                        <p class="pricing-rate_quality">Unlimited Team Members <br>
                            24/ 7 Phone Support</p>
                        <a href="#" class="pricing-rate_btn">purchase</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- FORM -->
    <section class="subscribe" id="Support">
        <div class="container">
            <div class="subscribe-wrap">
                <div>
                    <h6 class="subscribe-title">Subscribe To Stay In Touch</h6>
                </div>
                <div class="form-wrap">
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Your name" class="subscribe-input">
                        <input type="tel" placeholder="Phone" class="subscribe-input">
                        <button type="submit" class="button subscribe-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php

get_footer();
