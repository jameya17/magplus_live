<?php
/**
 * Template Name: Services Template New
 *
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
     <div class="container">

        <div class="l-section">
            <div class="l-section-wrap breadcrumb services-breadcrumb">
                <ul>
                    <li class="breadcrumb-item"><a href="<?php echo get_permalink(29200); ?>">mag+</a></li>
                    <li class="breadcrumb-item">Services</li>
                </ul>
            </div>
            <div class="sticky-nav-block white-bg"> 
                <ul class="nav sticky-sidebar" >
                    <li><a class="nav-link" title="Creative Services" data-scroll="creative-services">Creative Services</a></li>
                    <li><a class="nav-link" title="App Submission" data-scroll="app-submission">App Submission</a></li>
                    <li><a class="nav-link" title="App Updation" data-scroll="app-updation">App Updation</a></li> 
                </ul>
            </div>
        </div>
        
        <section id="creative-services" class="l-section sec-pad white-bg pad-top0 scrrol-sec">
            <div class="l-section-wrap">
                <div class="l-sub-section-pad">
                    <div class="g-col">
                        <div class="one-half">
                            <h3>Creative Services</h3>
                            <p>Taking advantage of their rich experience and unlimited creativity, our designers can help blow your customers away by ensuring the best integration of text, audio, and video with HTML interactivity, tailored to your business needs.</p>
                            <a href="<?php echo get_permalink(9057); ?>" class="primary-btn" title="Know More">Know More
                                <span class="span1">Know More</span>
                                <span class="span2">Know More</span>
                            </a>
                        </div>    
                        <div class="one-half image-block">
                            <img src="<?php bloginfo('template_directory'); ?>/images/creative-services.png" alt="Creative Services" />
                        </div>    
                    </div>    
                </div>    
            </div>
        </section>
        <section id="app-submission" class="l-section sec-pad grey-bg scrrol-sec">
            <div class="l-section-wrap">
                <div class="l-sub-section-pad">
                    <div class="g-col row-reverse">
                        <div class="one-half" data-aos="fade-left">
                            <h3>App Submission</h3>
                            <p>We own the entire app submission process for you to ensure that your apps are published on the iOS and Google play stores in a swift and hassle-free manner. Your branded apps are created from scratch and distributed across all marketplaces, including Apple app store, Google play store, Amazon store.</p>
                            <a href="<?php echo get_permalink(31538); ?>" class="primary-btn" title="Know More">Know More
                                <span class="span1">Know More</span>
                                <span class="span2">Know More</span>
                            </a>
                        </div>    
                        <div class="one-half image-block" data-aos="fade-right">
                            <img src="<?php bloginfo('template_directory'); ?>/images/app-submission-services.png" alt="App Submission Services" />
                        </div>    
                    </div> 
                </div>    
            </div>
        </section>
        <section id="app-updation" class="l-section sec-pad white-bg scrrol-sec">
            <div class="l-section-wrap">
                <div class="l-sub-section-pad">
                    <div class="g-col">
                        <div class="one-half" data-aos="fade-right">
                            <h3>App Updation</h3>
                            <p>We do it all. Your existing mag+ apps are upgraded to the latest version and published to the marketplaces of your choice. Choose to customise your app with new features, modify app content, or make it compatible to the latest OS versions.</p>
                            <a href="<?php echo get_permalink(31540); ?>" class="primary-btn" title="Know More">Know More
                                <span class="span1">Know More</span>
                                <span class="span2">Know More</span>
                            </a>
                        </div>    
                        <div class="one-half image-block" data-aos="fade-left">
                            <img src="<?php bloginfo('template_directory'); ?>/images/app-update-services.png" alt="App Update Services" />  
                        </div>    
                    </div>    
                </div>    
            </div>
        </section>
    </div>
	

<?php
get_footer();
