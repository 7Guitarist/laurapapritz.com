<?php get_header(); ?>
<!-- slideshow -->
<section class="hp-slideshow">
    <div class="region-slideshow-container">
        <h2 class="hidden">Slideshow</h2>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow") ) : ?>
        <?php endif ?>
        <div class="slideshow-content">
            <em>Let Our Wisdom <br>
                Be Your Compass</em>
        </div>
    </div>
</section>
<!-- slideshow end -->
<!-- welcome -->
<section class="hp-welcome">
    <div class="region-welcome-container">
        <div class="site-title">
            <img alt="logo" class="img-responsive"
                src="<?php echo get_stylesheet_directory_uri() ?>/images/welcome-leaf.png" width="168" height="197" />
            <div class="site-title-group">
                <span>About Us</span>
                <em>Who We Are <div class="site-line">
                        <img alt="logo" class="img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/line-logo.png" width="27"
                            height="27" />
                    </div></em>
            </div>
        </div>
        <div class="welcome-content">
            <div class="welcome-primary-section">
                <img alt="agent" class="img-responsive"
                    src="<?php echo get_stylesheet_directory_uri() ?>/images/welcome-agent.png" width="820"
                    height="632" />
            </div>
            <div class="welcome-secondary-section">

                <p>It is with great pleasure that Laura and Team welcomes you to Washington, and to their website. With
                    years of experience in the market, they know how crucial it is for you to find relevant, up-to- date
                    information. The search is over. Their website is designed to be your one-stop shop for real estate
                    in
                    Washington.
                </p>
                <p class="welcome-text-last">This is the moment that you should enjoy the most; looking at the available
                    properties in Washington;
                    imagining yourself living in the home that you have always dreamed about. You don't want just
                    another
                    database that gives you rehashed property descriptions.</p>
                <em>Download the Compass Mobile App</em>
                <div class="welcome-group">
                    <a href="#" aria-label="download app">
                        <img alt="agent" class="img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/welcome-appstore.png" width="168"
                            height="56" />
                    </a>
                    <a href="#" aria-label="download app">
                        <img alt="agent" class="img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/welcome-google.png" width="168"
                            height="56" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="site-bg main site-bg-grayscale site-bg-rgba">
        <canvas class="lazyload" width="1600" height="1002"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/welcome-bg.jpg"></canvas>
    </div>
    <div class="site-bg bg-green">
        <canvas class="lazyload" width="1203" height="668"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/welcome-accent.jpg"></canvas>
    </div>
</section>
<!-- welcome end -->
<!-- team -->
<section class="hp-team">
    <div class="region-team-container">
        <div class="site-title">
            <img alt="logo" class="img-responsive"
                src="<?php echo get_stylesheet_directory_uri() ?>/images/team-leaf.png" width="157" height="151" />
            <div class="site-title-group">
                <span>Meet</span>
                <em>The Team <img alt="logo" class="img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/line-logo.png" width="27"
                        height="27" />
                </em>
            </div>
        </div>
        <div class="team-slick">
            <div class="team-item">
                <a href="[blogurl]" aria-label="team" class="team-img canvas-wrapper">
                    <canvas width="282" height="331"></canvas>
                    <img alt="team" class="img-team canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/team-1.jpg" />
                    <span class="site-play-btn ai-font-play-button-a"></span>
                </a>
                <div class="team-content">
                    <em>Laura Papritz</em>
                    <span>Managing Broker</span>
                </div>
                <div class="team-content-hover">
                    <em>Laura Papritz</em>
                    <span>Managing Broker</span>
                    <div class="team-contact-item">
                        <span class="ai-font-phone"></span>
                        <?php echo do_shortcode('[ai_phone href="+1.206.331.2927"] 206.331.2927[/ai_phone]')?>
                    </div>
                    <a href="[blogurl]" aria-label="More Info" class="site-btn">More Info</a>
                </div>
            </div>
            <div class="team-item">
                <a href="[blogurl]" aria-label="team" class="team-img canvas-wrapper">
                    <canvas width="282" height="331"></canvas>
                    <img alt="team" class="img-team canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/team-2.jpg" />
                    <span class="site-play-btn ai-font-play-button-a"></span>
                </a>
                <div class="team-content">
                    <em>Nataly Yarina</em>
                    <span>Operations Manager</span>
                </div>
                <div class="team-content-hover">
                    <em>Nataly Yarina</em>
                    <span>Operations Manager</span>
                    <div class="team-contact-item">
                        <span class="ai-font-phone"></span>
                        <?php echo do_shortcode('[ai_phone href="+1.206.331.2927"] 206.331.2927[/ai_phone]')?>
                    </div>
                    <a href="[blogurl]" aria-label="More Info" class="site-btn">More Info</a>
                </div>
            </div>
            <div class="team-item">
                <a href="[blogurl]" aria-label="team" class="team-img canvas-wrapper">
                    <canvas width="282" height="331"></canvas>
                    <img alt="team" class="img-team canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/team-3.jpg" />
                    <span class="site-play-btn ai-font-play-button-a"></span>
                </a>
                <div class="team-content">
                    <em>Aaron Alan</em>
                    <span>Broker</span>
                </div>
                <div class="team-content-hover">
                    <em>Aaron Alan</em>
                    <span>Broker</span>
                    <div class="team-contact-item">
                        <span class="ai-font-phone"></span>
                        <?php echo do_shortcode('[ai_phone href="+1.206.331.2927"] 206.331.2927[/ai_phone]')?>
                    </div>
                    <a href="[blogurl]" aria-label="More Info" class="site-btn">More Info</a>
                </div>
            </div>
            <div class="team-item">
                <a href="[blogurl]" aria-label="team" class="team-img canvas-wrapper">
                    <canvas width="282" height="331"></canvas>
                    <img alt="team" class="img-team canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/team-4.jpg" />
                    <span class="site-play-btn ai-font-play-button-a"></span>
                </a>
                <div class="team-content">
                    <em>Krystle Alan</em>
                    <span>Broker</span>
                </div>
                <div class="team-content-hover">
                    <em>Krystle Alan</em>
                    <span>Broker</span>
                    <div class="team-contact-item">
                        <span class="ai-font-phone"></span>
                        <?php echo do_shortcode('[ai_phone href="+1.206.331.2927"] 206.331.2927[/ai_phone]')?>
                    </div>
                    <a href="[blogurl]" aria-label="More Info" class="site-btn">More Info</a>
                </div>
            </div>
            <div class="team-item">
                <a href="[blogurl]" aria-label="team" class="team-img canvas-wrapper">
                    <canvas width="282" height="331"></canvas>
                    <img alt="team" class="img-team canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/team-1.jpg" />
                    <span class="site-play-btn ai-font-play-button-a"></span>
                </a>
                <div class="team-content">
                    <em>Dane Andersen</em>
                    <span>Broker</span>
                </div>
                <div class="team-content-hover">
                    <em>Dane Andersen</em>
                    <span>Broker</span>
                    <div class="team-contact-item">
                        <span class="ai-font-phone"></span>
                        <?php echo do_shortcode('[ai_phone href="+1.206.331.2927"] 206.331.2927[/ai_phone]')?>
                    </div>
                    <a href="[blogurl]" aria-label="More Info" class="site-btn">More Info</a>
                </div>
            </div>
            <div class="team-item">
                <a href="[blogurl]" aria-label="team" class="team-img canvas-wrapper">
                    <canvas width="282" height="331"></canvas>
                    <img alt="team" class="img-team canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/team-1.jpg" />
                    <span class="site-play-btn ai-font-play-button-a"></span>
                </a>
                <div class="team-content">
                    <em>Dane Andersen</em>
                    <span>Broker</span>
                </div>
                <div class="team-content-hover">
                    <em>Dane Andersen</em>
                    <span>Broker</span>
                    <div class="team-contact-item">
                        <span class="ai-font-phone"></span>
                        <?php echo do_shortcode('[ai_phone href="+1.206.331.2927"] 206.331.2927[/ai_phone]')?>
                    </div>
                    <a href="[blogurl]" aria-label="More Info" class="site-btn">More Info</a>
                </div>
            </div>
        </div>
        <div class="team-slick-arrow">
            <div class="slick-arrow prev">
                <span class="ai-font-arrow-i-p "></span>
                prev
            </div>
            <a href="[blogurl]" class="site-btn" aria-label="VIEW ALL team">VIEW ALL team</a>
            <div class="slick-arrow next">
                next
                <span class="ai-font-arrow-i-n "></span>
            </div>
        </div>
    </div>
    <div class="site-bg">
        <canvas class="lazyload" width="1600" height="1058"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/team-bg.jpg"></canvas>
    </div>
    <div class="site-bg dot-accent">
        <canvas class="lazyload" width="123" height="131"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/team-accent.png"></canvas>
    </div>
</section>
<!-- team end -->_

<!-- work -->
<section class="hp-work">
    <div class="region-work-container">
        <div class="site-title">
            <div class="site-title-group">
                <span>Why</span>
                <em>Work With Us
                    <img alt="logo" class="img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/line-logo.png" width="27"
                        height="27" />
                </em>
            </div>
            <img alt="logo" class="img-responsive"
                src="<?php echo get_stylesheet_directory_uri() ?>/images/title-leaf.png" width="195" height="219" />
        </div>
        <div class="work-content">
            <div class="work-item">
                <em><i class="count">500</i>+</em>
                <span>happy clients
                </span>
            </div>
            <div class="work-item">
                <em><i class="count">445</i>+</em>
                <span>home sold
                </span>
            </div>
            <div class="work-item">
                <em> $<i class="count">360 </i>M</em>
                <span>since 2018
                </span>
            </div>
            <div class="work-item">
                <em><i class="count">20</i>+</em>
                <span>Years of
                    experience
                </span>
            </div>

        </div>
    </div>
    <div class="site-bg">
        <canvas class="lazyload" width="651" height="652"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/work-bg.jpg"></canvas>
    </div>
    <div class="site-bg accent site-bg-grayscale">
        <canvas class="lazyload" width="1070" height="652"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/work-accent.jpg"></canvas>
    </div>
</section>
<!-- work end -->
<!--  -->
<!--  -->
<!-- communities -->
<section class="hp-communities">
    <div class="region-communities-container">
        <div class="site-title">
            <img alt="logo" class="img-responsive"
                src="<?php echo get_stylesheet_directory_uri() ?>/images/team-leaf.png" width="157" height="151" />
            <div class="site-title-group">
                <span>Featured</span>
                <em>Communities
                    <img alt="logo" class="img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/line-logo.png" width="27"
                        height="27" />
                </em>
            </div>
        </div>
        <div class="communities-slick">
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper">
                    <canvas width="476" height="333"></canvas>
                    <img alt="communities" class="img-communities canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-1.jpg" />
                </div>
                <div class="communities-content">
                    <div class="communities-content-hover">
                        <img alt="communities" class="communities-logo img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-logo.png" width="175"
                            height="175" />
                        <span>Current Listings</span>
                        <span>Market Reports</span>
                        <em>Bellevue</em>
                    </div>
                    <em>Bellevue</em>
                </div>


            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper">
                    <canvas width="424" height="282"></canvas>
                    <img alt="communities" class="img-communities canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-2.jpg" />
                </div>
                <div class="communities-content">
                    <div class="communities-content-hover">
                        <img alt="communities" class="communities-logo img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-logo.png" width="175"
                            height="175" />
                        <span>Current Listings</span>
                        <span>Market Reports</span>
                        <em>North Bend</em>
                    </div>
                    <em>North Bend</em>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper">
                    <canvas width="458" height="283"></canvas>
                    <img alt="communities" class="img-communities canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-3.jpg" />
                </div>
                <div class="communities-content">
                    <div class="communities-content-hover">
                        <img alt="communities" class="communities-logo img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-logo.png" width="175"
                            height="175" />
                        <span>Current Listings</span>
                        <span>Market Reports</span>
                        <em>Issaquah</em>
                    </div>
                    <em>Issaquah</em>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper">
                    <canvas width="442" height="295"></canvas>
                    <img alt="communities" class="img-communities canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-4.jpg" />
                </div>
                <div class="communities-content">
                    <div class="communities-content-hover">
                        <img alt="communities" class="communities-logo img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-logo.png" width="175"
                            height="175" />
                        <span>Current Listings</span>
                        <span>Market Reports</span>
                        <em>Renton</em>
                    </div>
                    <em>Renton</em>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper">
                    <canvas width="380" height="285"></canvas>
                    <img alt="communities" class="img-communities canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-5.jpg" />
                </div>
                <div class="communities-content">
                    <div class="communities-content-hover">
                        <img alt="communities" class="communities-logo img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-logo.png" width="175"
                            height="175" />
                        <span>Current Listings</span>
                        <span>Market Reports</span>
                        <em>Kent</em>
                    </div>
                    <em>Kent</em>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper">
                    <canvas width="442" height="296"></canvas>
                    <img alt="communities" class="img-communities canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-6.jpg" />
                </div>
                <div class="communities-content">
                    <div class="communities-content-hover">
                        <img alt="communities" class="communities-logo img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-logo.png" width="175"
                            height="175" />
                        <span>Current Listings</span>
                        <span>Market Reports</span>
                        <em>Sammamish</em>
                    </div>
                    <em>Sammamish</em>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper">
                    <canvas width="501" height="282"></canvas>
                    <img alt="communities" class="img-communities canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-7.jpg" />
                </div>
                <div class="communities-content">
                    <div class="communities-content-hover">
                        <img alt="communities" class="communities-logo img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-logo.png" width="175"
                            height="175" />
                        <span>Current Listings</span>
                        <span>Market Reports</span>
                        <em>Mapple <br> Valley</em>
                    </div>
                    <em>Mapple <br> Valley</em>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper">
                    <canvas width="421" height="279"></canvas>
                    <img alt="communities" class="img-communities canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-8.jpg" />
                </div>
                <div class="communities-content">
                    <div class="communities-content-hover">
                        <img alt="communities" class="communities-logo img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-logo.png" width="175"
                            height="175" />
                        <span>Current Listings</span>
                        <span>Market Reports</span>
                        <em>Snoqualmie</em>
                    </div>
                    <em>Snoqualmie</em>
                </div>
            </a>
            <a href="[blogurl]" aria-label="communities" class="communities-item">
                <div class="communities-img canvas-wrapper">
                    <canvas width="476" height="333"></canvas>
                    <img alt="communities" class="img-communities canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-1.jpg" />
                </div>
                <div class="communities-content">
                    <div class="communities-content-hover">
                        <img alt="communities" class="communities-logo img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/communities-logo.png" width="175"
                            height="175" />
                        <span>Current Listings</span>
                        <span>Market Reports</span>
                        <em>Bellevue</em>
                    </div>
                    <em>Bellevue</em>
                </div>
            </a>
        </div>
        <div class="communities-slick-arrow">
            <div class="slick-arrow prev">
                <span class="ai-font-arrow-h-p "></span>
                prev
            </div>
            <a href="[blogurl]" class="site-btn" aria-label="VIEW ALL communities">VIEW ALL communities</a>
            <div class="slick-arrow next">
                next
                <span class="ai-font-arrow-h-n "></span>
            </div>
        </div>
    </div>
    <div class="site-bg site-bg-rgba">
        <canvas class="lazyload" width="1603" height="1216"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/comnunities-bg.jpg"></canvas>
    </div>
</section>
<!-- communities end -->

<!-- properties -->
<section class="hp-properties">
    <div class="region-properties-container">
        <div class="site-title">
            <div class="site-title-group">
                <span>Featured</span>
                <em>
                    <div class="site-line">
                        <img alt="logo" class="img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/line-logo.png" width="27"
                            height="27" />
                    </div>
                    Properties

                </em>
            </div>
            <img alt="logo" class="img-responsive"
                src="<?php echo get_stylesheet_directory_uri() ?>/images/title-leaf.png" width="195" height="219" />
        </div>
        <div class="properties-slick">
            <a href="[blogurl]" aria-label="properties" class="properties-item">
                <div class="properties-img canvas-wrapper">
                    <canvas width="1140" height="761"></canvas>
                    <img alt="properties" class="img-properties canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-1.jpg" />
                </div>
                <div class="properties-content">
                    <img alt="properties" class="properties-logo"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-logo.png" width="321"
                        height="370" />
                    <em>$17,200,000</em>
                    <p>1450 Maple Valley <br> Washington 98038, USA</p>
                    <span class="site-btn">View Details</span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="properties" class="properties-item">
                <div class="properties-img canvas-wrapper">
                    <canvas width="1140" height="761"></canvas>
                    <img alt="properties" class="img-properties canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-2.jpg" />
                </div>
                <div class="properties-content">
                    <img alt="properties" class="properties-logo"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-logo.png" width="321"
                        height="370" />
                    <em>$17,200,000</em>
                    <p>1450 Maple Valley <br> Washington 98038, USA</p>
                    <span class="site-btn">View Details</span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="properties" class="properties-item">
                <div class="properties-img canvas-wrapper">
                    <canvas width="1140" height="761"></canvas>
                    <img alt="properties" class="img-properties canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-3.jpg" />
                </div>
                <div class="properties-content">
                    <img alt="properties" class="properties-logo"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-logo.png" width="321"
                        height="321" />
                    <em>$17,200,000</em>
                    <p>1450 Maple Valley <br> Washington 98038, USA</p>
                    <span class="site-btn">View Details</span>
                </div>
            </a>
        </div>


        <div class="properties-slick-arrow">
            <!-- <span class="ai-font-arrow-h-p prev"></span> -->
            <a href="[blogurl]" class="site-btn" aria-label="VIEW ALL properties">VIEW ALL properties</a>
            <span class="ai-font-arrow-h-n next"></span>
        </div>
    </div>

    <div class="site-bg">
        <canvas class="lazyload" width="1600" height="1078"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/properties-bg.jpg"></canvas>
    </div>
    <div class="site-bg accent">
        <canvas class="lazyload" width="123" height="131"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/team-accent.png"></canvas>
    </div>
</section>
<!-- properties end -->

<!-- testimonials -->
<section class="hp-testimonials">
    <div class="region-testimonials-container">
        <div class="site-title">
            <div class="site-title-group">
                <span>What Are</span>
                <em>Clients Says
                    <img alt="logo" class="img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/line-logo.png" width="27"
                        height="27" />
                </em>
            </div>
        </div>

        <span class="testi-top"> "Helped 500+ families just like yours"</span>
        <div class="testimonials-slick">
            <div class="testimonials-content bg-orange">
                <p>"We can't thank Laura enough for helping us find our dream home in Washington. It's exactly what we
                    dreamed it would be - and didn't go over our budget! Laura's local market knowledge..."</p>
                <em>JANE DOE</em>
                <span class="arrow-next"></span>
            </div>
            <div class="testimonials-content bg-white">
                <p>"At first I thought my property was ready to sell, Laura conviced me otherwise, and I'm really happy
                    that I listened. Without her help, I wouldn't have been able to sell my property for more..."
                </p>
                <em>CHRIS SMITH</em>
                <span class="arrow-next"></span>
            </div>
            <div class="testimonials-content">
                <p>We never really believed in
                    so-called real estate experts until
                    we were introduced to Laura. Like
                    magicians, they made all of our
                    Washington real estate dreams
                    come true. Aside from being...</p>
                <em>JANE DOE</em>
                <span class="arrow-next"></span>
            </div>
            <div class="testimonials-content">
                <p>"We can't thank Laura enough for helping us find our dream home in Washington. It's exactly what we
                    dreamed it would be - and didn't go over our budget! Laura's local market knowledge..."</p>
                <em>CLAIRE DOE</em>
                <span class="arrow-next"></span>
            </div>
        </div>
    </div>
    <div class="site-bg site-bg-rgba">
        <canvas class="lazyload" width="1600" height="573"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/testi-bg.jpg"></canvas>
    </div>
</section>
<!-- testimonials end -->
<!-- cta -->
<section class="hp-cta">
    <div class="region-cta-container">
        <div class="cta-gallery-image-container">
            <a href="[blogurl]" aria-label="cta-image" class="cta-image">
                <div class="cta-item canvas-wrapper"> <canvas width="715" height="480"></canvas> <img alt="cta-image"
                        class="canvas-img img-responsive"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/cta-1.jpg">
                    <em>Buyers</em>
                </div>
            </a>
            <a href="[blogurl]" aria-label="cta-image" class="cta-image">
                <div class="cta-item canvas-wrapper"> <canvas width="715" height="480"></canvas> <img alt="cta-image"
                        class="canvas-img img-responsive"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/cta-2.jpg">
                    <em>Sellers</em>
                </div>
            </a>
            <a href="[blogurl]" aria-label="cta-image" class="cta-image">
                <div class="cta-item canvas-wrapper"> <canvas width="715" height="480"></canvas> <img alt="cta-image"
                        class="canvas-img img-responsive"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/cta-3.jpg">
                    <em>Home <br> Evaluation</em>
                </div>
            </a>
            <a href="[blogurl]" aria-label="cta-image" class="cta-image">
                <div class="cta-item canvas-wrapper"> <canvas width="715" height="480"></canvas> <img alt="cta-image"
                        class="canvas-img img-responsive"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/cta-4.jpg">
                    <em>Newsletter</em>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- cta end -->

<!-- news -->
<section class="hp-news">
    <div class="region-news-container">
        <div class="news-header">
            <a href="[blogurl]" class="site-btn" aria-label="More Blogs">More Blogs</a>
            <div class="site-title">
                <div class="site-title-group">
                    <span>Latest</span>
                    <em>News
                        <img alt="logo" class="img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/line-logo.png" width="27"
                            height="27" />
                    </em>
                </div>
                <img alt="logo" class="img-responsive"
                    src="<?php echo get_stylesheet_directory_uri() ?>/images/title-leaf.png" width="195" height="219" />
            </div>
        </div>
        <div class="news-gallery-image-container">
            <a href="[blogurl]" aria-label="news-image" class="news-image">
                <div class="news-item canvas-wrapper"> <canvas width="468" height="397"></canvas> <img alt="news-image"
                        class="canvas-img img-responsive"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/news-1.jpg">
                    <em>Tips for First-Time <br> Homebuyers</em>
                </div>
            </a>
            <a href="[blogurl]" aria-label="news-image" class="news-image">
                <div class="news-item canvas-wrapper"> <canvas width="468" height="453"></canvas> <img alt="news-image"
                        class="canvas-img img-responsive"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/news-2.jpg">
                    <em>Signs that Now is the <br> Time to Sell Your Home</em>
                </div>
            </a>
            <a href="[blogurl]" aria-label="news-image" class="news-image">
                <div class="news-item canvas-wrapper"> <canvas width="468" height="397"></canvas> <img alt="news-image"
                        class="canvas-img img-responsive"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/news-3.jpg">
                    <em>Home Prices are <br> on the Rise</em>
                </div>
            </a>
        </div>
    </div>
    <div class="site-bg">
        <canvas class="lazyload" width="1600" height="475"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/news-bg.jpg"></canvas>
    </div>
</section>
<!-- news end -->

<!-- videos -->
<section class="hp-videos">
    <div class="region-videos-container">
        <div class="videos-header">
            <div class="site-title">
                <img alt="logo" class="img-responsive"
                    src="<?php echo get_stylesheet_directory_uri() ?>/images/videos-leaf.png" width="201"
                    height="222" />
                <div class="site-title-group">
                    <span>Featured</span>
                    <em>Videos
                        <img alt="logo" class="img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/line-logo.png" width="27"
                            height="27" />
                    </em>
                </div>
            </div>
            <a href="[blogurl]" class="site-btn" aria-label="More Videos">More Videos</a>
        </div>
        <div class="videos-slick">
            <a href="[blogurl]" aria-label="videos" class="videos-item">
                <div class="videos-img canvas-wrapper">
                    <canvas width="969" height="545"></canvas>
                    <img alt="videos" class="img-videos canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/videos-1.jpg" />
                </div>
                <span class="site-play-btn ai-font-play-button-a"></span>
            </a>
            <a href="[blogurl]" aria-label="videos" class="videos-item">
                <div class="videos-img canvas-wrapper">
                    <canvas width="969" height="545"></canvas>
                    <img alt="videos" class="img-videos canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/videos-2.jpg" />
                </div>
                <span class="site-play-btn ai-font-play-button-a"></span>
            </a>
            <a href="[blogurl]" aria-label="videos" class="videos-item">
                <div class="videos-img canvas-wrapper">
                    <canvas width="969" height="545"></canvas>
                    <img alt="videos" class="img-videos canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/videos-3.jpg" />
                </div>
                <span class="site-play-btn ai-font-play-button-a"></span>
            </a>
        </div>
    </div>
</section>
<!-- videos end -->

<!-- social -->
<section class="hp-social">
    <div class="region-social-container">
        <div class="social-header">
            <ul class="social-smi">
                <li>
                    <a href="[ai_client_facebook]" target="_blank" aria-label="facebook">
                        <span class="ai-font-facebook"></span>
                    </a>
                </li>
                <li>
                    <a href="[ai_client_instagram]" target="_blank" aria-label="instagram">
                        <span class="ai-font-instagram"></span>
                    </a>
                </li>
            </ul>
            <div class="site-title">
                <div class="site-title-group">
                    <span>Follow Us On</span>
                    <em>Social Media
                        <img alt="logo" class="img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/line-logo.png" width="27"
                            height="27" />
                    </em>
                </div>
                <img alt="logo" class="img-responsive"
                    src="<?php echo get_stylesheet_directory_uri() ?>/images/welcome-leaf.png" width="168"
                    height="197" />
            </div>
        </div>
        <div class="social-gallery-image-container">
            <a href="[blogurl]" aria-label="social-image" class="social-image">
                <div class="social-item canvas-wrapper"> <canvas width="281" height="298"></canvas> <img
                        alt="social-image" class="canvas-img img-responsive"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/social-1.jpg">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="social-image" class="social-image">
                <div class="social-item canvas-wrapper"> <canvas width="281" height="298"></canvas> <img
                        alt="social-image" class="canvas-img img-responsive"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/social-2.jpg">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="social-image" class="social-image">
                <div class="social-item canvas-wrapper"> <canvas width="281" height="298"></canvas> <img
                        alt="social-image" class="canvas-img img-responsive"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/social-3.jpg">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="social-image" class="social-image">
                <div class="social-item canvas-wrapper"> <canvas width="281" height="298"></canvas> <img
                        alt="social-image" class="canvas-img img-responsive"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/social-4.jpg">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
            <a href="[blogurl]" aria-label="social-image" class="social-image">
                <div class="social-item canvas-wrapper"> <canvas width="281" height="298"></canvas> <img
                        alt="social-image" class="canvas-img img-responsive"
                        src=" <?php echo get_stylesheet_directory_uri() ?>/images/social-5.jpg">
                    <span class="ai-font-instagram"></span>
                </div>
            </a>
        </div>
    </div>
    <div class="site-bg accent">
        <canvas class="lazyload" width="123" height="131"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/team-accent.png"></canvas>
    </div>
    <div class="site-bg site-bg-rgba">
        <canvas class="lazyload" width="1600" height="668"
            data-bgset="<?php echo get_stylesheet_directory_uri(); ?>/images/social-bg.png"></canvas>
    </div>
</section>
<!-- social end -->
<!-- contact -->
<section class="hp-contact">
    <div class="region-contact-container">
        <div class="site-title">
            <div class="site-title-group">
                <span>Connect</span>
                <em>With Us
                    <img alt="logo" class="img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/line-logo.png" width="27"
                        height="27" />
                </em>
            </div>
        </div>
        <div class="contact-form ">
            <?php echo do_shortcode('[contact-form-7 html_class="use-floating-validation-tip" id="34" title="hp template form 2"]')?>
        </div>
    </div>
</section>
<!-- contact end -->
<div class="hp-sidebar">
    <div id="scroll-down">
        <ul class="aios-section-nav"></ul>
        <ul class="comp-social-sidebar">
            <li class="side-smi"> <a href="[ai_client_facebook]" target="_blank" aria-label="facebook"> <span
                        class="ai-font-facebook"></span> </a> </li>
            <li class="side-smi"> <a href="[ai_client_instagram]" target="_blank" aria-label="instagram"> <span
                        class="ai-font-instagram"></span> </a> </li>
            <li class="side-smi">
                <div class="phone">
                    <?php echo do_shortcode('[ai_phone href="+1.407.415.9484"]
                            <span class="ai-font-phone">
                                <span class="font-zero">phone</span>
                            </span>
                            [/ai_phone]')?>
                </div>
            </li>
            <li class="side-smi">
                <div class="email">
                    <?php echo do_shortcode('[mail_to email="sellingwithstacy@gmail.com"]
                        <span class="ai-font-envelope-o">
                            <span class="font-zero">email</span>
                        </span>
                        [/mail_to]')?>
                </div>
            </li>
        </ul>
    </div>
</div>
<?php get_footer(); ?>