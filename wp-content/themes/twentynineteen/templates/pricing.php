<?php
/**
 * Template Name: Pricing New Template
 *
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
    <div class="container pricing-pg">
        <div class="l-section" style="position: relative;z-index: 0;">
            <div class="l-section-wrap breadcrumb">
                <ul>
                    <li class="breadcrumb-item"><a href="<?php echo get_permalink(29200); ?>">mag+</a></li>
                    <li class="breadcrumb-item">Pricing</li>
                </ul>
            </div>
        </div>
        
        <section class="l-section sec-pad white-bg pad-top0 ">
            <div class="l-section-wrap">
                <div class="g-col align-center">
                    <h3>Our Subscription Plans</h3>
                    <p class="small-wrap">mag+ makes it easy to publish your content to your own mobile app. From text to video to interactive elements, no matter the source, the mag+ software</p>

                    <div class="tab-section pricing-tab">
                        <ul class="tab-head">
                            <li class="tab-item"><a href="javascript:void(0);" class="tab-link active" title="uk" data-id="monthly">Monthly</a></li>
                            <li class="tab-item"><a href="javascript:void(0);" class="tab-link" title="Annually" data-id="annually">Annually</a></li>
                            <li class="tab-item"><a href="javascript:void(0);" class="tab-link" title="For UK" data-id="uk">For UK</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="monthly" class="tab-sec" style="display: block;">
                                <!-- <div class="pricing-switcher">
                                    <div class="pricing-fieldset">
                                        <input type="radio" name="duration-1" value="monthly" id="monthly" checked="">
                                        <label for="monthly">Monthly</label>
                                        <input type="radio" name="duration-1" value="yearly" id="yearly">
                                        <label for="yearly">Yearly</label>
                                        <span class="switch"></span>
                                    </div>
                                </div>     -->

                                <div class="pricing-body">
                                    <div class="align-right">
                                        <div class="drop-down">
                                            <div class="selected">
                                                <a href="javascript:void"><span>&#36;</em> Usd</span></a>
                                            </div>
                                            <div class="options">
                                                <ul>
                                                    <li><a href="javascript:void" id="usd"><em class="currency">&#36;</em> Usd</a></li>
                                                    <li><a href="javascript:void" id="pound" ><em class="currency">&#163;</em> Pound</a></li>
                                                    <li><a href="javascript:void" id="eur"><em class="currency">&#128;</em> EUR</a></li>
                                                </ul>
                                            </div>    
                                        </div>    
                                    </div>    

                                    <div class="pricing-chart usd">
                                        <div id="monthly">
                                            <div class="pricing-chart-table">
                                                <div class="mob-view select-field">
                                                    <div class="mob-select">
                                                        <div class="selected">
                                                            <a href="javascript:void"><span>Select</span></a>
                                                        </div>
                                                        <div class="options">
                                                            <ul>
                                                                <li><a href="javascript:void" id="publish">Publish</a></li>
                                                                <li><a href="javascript:void" id="multi">Multi</a></li>
                                                                <li><a href="javascript:void" id="multi-pro">Multi-Pro</a></li>
                                                                <li><a href="javascript:void" id="unlimited">Unlimited</a>
                                                            </li>
                                                            </ul>
                                                        </div>    
                                                    </div> 
                                                </div>
                                                <div class="plan-th">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>&nbsp;</strong>
                                                            <strong class="plan-price">&nbsp;</strong>
                                                        </li>
                                                        <li>Number of Apps for iOS, Android & Kindle</li>
                                                        <li>Number of Issues</li>
                                                        <li>Enterprise Builds for iOS</li>
                                                        <li>Publish Adobe Indesign Content</li>
                                                        <li>App Monetization</li>
                                                        <li>Analytics Support</li>
                                                        <li>Publish PDF Files</li>
                                                        <li>Publish HTML Content</li>
                                                        <li>Unlimited Push Notifications</li>
                                                        <li>Social Sign-in</li>
                                                        <li>Publish AR Packages in iOS</li>
                                                        <li>User management/Role based access</li>
                                                        <li>Customer Support</li>
                                                        <li class="btn-block">&nbsp;</li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td publish" style="display: block;">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Pay As you Publish</strong>
                                                            <strong class="plan-price">2099&#36;</strong>
                                                        </li>
                                                        <li><span>1 Each</span></li>
                                                        <li><span>1</span></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi popular">
                                                    <ul>
                                                        <li class="lbl-popular">Most Popular</li>
                                                        <li class="plan-head">
                                                            <strong>Multi</strong>
                                                            <strong class="plan-price">499&#36;</strong>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>2 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi-pro">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Multi-Pro</strong>
                                                            <strong class="plan-price">699&#36;</strong>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>4 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td unlimited">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Unlimited</strong>
                                                            <a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>Unlimited</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>  

                                    <div class="pricing-chart pound" style="display: none">
                                        <div id="monthly">
                                            <div class="pricing-chart-table">
                                                <div class="mob-view select-field">
                                                    <div class="mob-select">
                                                        <div class="selected">
                                                            <a href="javascript:void"><span>Select</span></a>
                                                        </div>
                                                        <div class="options">
                                                            <ul>
                                                                <li><a href="javascript:void" id="publish">Publish</a></li>
                                                                <li><a href="javascript:void" id="multi">Multi</a></li>
                                                                <li><a href="javascript:void" id="multi-pro">Multi-Pro</a></li>
                                                                <li><a href="javascript:void" id="unlimited">Unlimited</a></li>
                                                            </ul>
                                                        </div>    
                                                    </div> 
                                                </div>
                                                <div class="plan-th">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>&nbsp;</strong>
                                                            <strong class="plan-price">&nbsp;</strong>
                                                        </li>
                                                        <li>Number of Apps for iOS, Android & Kindle</li>
                                                        <li>Number of Issues</li>
                                                        <li>Enterprise Builds for iOS</li>
                                                        <li>Publish Adobe Indesign Content</li>
                                                        <li>App Monetization</li>
                                                        <li>Analytics Support</li>
                                                        <li>Publish PDF Files</li>
                                                        <li>Publish HTML Content</li>
                                                        <li>Unlimited Push Notifications</li>
                                                        <li>Social Sign-in</li>
                                                        <li>Publish AR Packages in iOS</li>
                                                        <li>User management/Role based access</li>
                                                        <li>Customer Support</li>
                                                        <li class="btn-block">&nbsp;</li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td publish" style="display: block;">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Pay As you Publish</strong>
                                                            <strong class="plan-price">1672&#163;</strong>
                                                        </li>
                                                        <li><span>1 Each</span></li>
                                                        <li><span>1</span></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi popular">
                                                    <ul>
                                                        <li class="lbl-popular">Most Popular</li>
                                                        <li class="plan-head">
                                                            <strong>Multi</strong>
                                                            <strong class="plan-price">398&#163;</strong>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>2 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi-pro">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Multi-Pro</strong>
                                                            <strong class="plan-price">557&#163;</strong>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>4 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td unlimited">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Unlimited</strong>
                                                            <a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>Unlimited</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block">
                                                            <a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>  

                                    <div class="pricing-chart eur" style="display: none">
                                        <div id="monthly">
                                            <div class="pricing-chart-table">
                                                <div class="mob-view select-field">
                                                    <div class="mob-select">
                                                        <div class="selected">
                                                            <a href="javascript:void"><span>Select</span></a>
                                                        </div>
                                                        <div class="options">
                                                            <ul>
                                                                <li><a href="javascript:void" id="publish">Publish</a></li>
                                                                <li><a href="javascript:void" id="multi">Multi</a></li>
                                                                <li><a href="javascript:void" id="multi-pro">Multi-Pro</a></li>
                                                                <li><a href="javascript:void" id="unlimited">Unlimited</a></li>
                                                            </ul>
                                                        </div>    
                                                    </div> 
                                                </div>
                                                <div class="plan-th">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>&nbsp;</strong>
                                                            <strong class="plan-price">&nbsp;</strong>
                                                        </li>
                                                        <li>Number of Apps for iOS, Android & Kindle</li>
                                                        <li>Number of Issues</li>
                                                        <li>Enterprise Builds for iOS</li>
                                                        <li>Publish Adobe Indesign Content</li>
                                                        <li>App Monetization</li>
                                                        <li>Analytics Support</li>
                                                        <li>Publish PDF Files</li>
                                                        <li>Publish HTML Content</li>
                                                        <li>Unlimited Push Notifications</li>
                                                        <li>Social Sign-in</li>
                                                        <li>Publish AR Packages in iOS</li>
                                                        <li>User management/Role based access</li>
                                                        <li>Customer Support</li>
                                                        <li class="btn-block">&nbsp;</li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td publish" style="display: block;">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Pay As you Publish</strong>
                                                            <strong class="plan-price">1864&#128;</strong>
                                                        </li>
                                                        <li><span>1 Each</span></li>
                                                        <li><span>1</span></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi popular">
                                                    <ul>
                                                        <li class="lbl-popular">Most Popular</li>
                                                        <li class="plan-head">
                                                            <strong>Multi</strong>
                                                            <strong class="plan-price">443&#128;</strong>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>2 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi-pro">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Multi-Pro</strong>
                                                            <strong class="plan-price">621&#128;</strong>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>4 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td unlimited">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Unlimited</strong>
                                                            <a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>Unlimited</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>  
                                    
                                    <a href="/" class="primary-btn" title="Full Specs and Pricing">Full Specs and Pricing
                                        <span class="span1">Full Specs and Pricing</span>
                                        <span class="span2">Full Specs and Pricing</span>
                                    </a>
                                </div>
                            </div>
                            <div id="annually" class="tab-sec">
                                <div class="pricing-body">
                                    <div class="align-right">
                                        <div class="drop-down">
                                            <div class="selected">
                                                <a href="javascript:void"><span>&#36;</em> Usd</span></a>
                                            </div>
                                            <div class="options">
                                                <ul>
                                                    <li><a href="javascript:void" id="usd"><em class="currency">&#36;</em> Usd</a></li>
                                                    <li><a href="javascript:void" id="pound" ><em class="currency">&#163;</em> Pound</a></li>
                                                    <li><a href="javascript:void" id="eur"><em class="currency">&#128;</em> EUR</a></li>
                                                </ul>
                                            </div>    
                                        </div>    
                                    </div>    

                                    <div class="pricing-chart usd">
                                        <div id="monthly">
                                            <div class="pricing-chart-table">
                                                <div class="mob-view select-field">
                                                    <div class="mob-select">
                                                        <div class="selected">
                                                            <a href="javascript:void"><span>Select</span></a>
                                                        </div>
                                                        <div class="options">
                                                            <ul>
                                                                <li><a href="javascript:void" id="publish">Publish</a></li>
                                                                <li><a href="javascript:void" id="multi">Multi</a></li>
                                                                <li><a href="javascript:void" id="multi-pro">Multi-Pro</a></li>
                                                                <li><a href="javascript:void" id="unlimited">Unlimited</a>
                                                            </li>
                                                            </ul>
                                                        </div>    
                                                    </div> 
                                                </div>
                                                <div class="plan-th">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>&nbsp;</strong>
                                                            <strong class="plan-price">&nbsp;</strong>
                                                        </li>
                                                        <li>Number of Apps for iOS, Android & Kindle</li>
                                                        <li>Number of Issues</li>
                                                        <li>Enterprise Builds for iOS</li>
                                                        <li>Publish Adobe Indesign Content</li>
                                                        <li>App Monetization</li>
                                                        <li>Analytics Support</li>
                                                        <li>Publish PDF Files</li>
                                                        <li>Publish HTML Content</li>
                                                        <li>Unlimited Push Notifications</li>
                                                        <li>Social Sign-in</li>
                                                        <li>Publish AR Packages in iOS</li>
                                                        <li>User management/Role based access</li>
                                                        <li>Customer Support</li>
                                                        <li class="btn-block">&nbsp;</li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td publish" style="display: block;">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Pay As you Publish</strong>
                                                            <strong class="plan-price">2099&#36;</strong>
                                                        </li>
                                                        <li><span>1 Each</span></li>
                                                        <li><span>1</span></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi popular">
                                                    <ul>
                                                        <li class="lbl-popular">Most Popular</li>
                                                        <li class="plan-head">
                                                            <strong>Multi</strong>
                                                            <strong class="plan-price">5389&#36;</strong>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>2 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi-pro">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Multi-Pro</strong>
                                                            <strong class="plan-price">7549&#36;</strong>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>4 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td unlimited">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Unlimited</strong>
                                                            <a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>Unlimited</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>  

                                    <div class="pricing-chart pound" style="display: none">
                                        <div id="monthly">
                                            <div class="pricing-chart-table">
                                                <div class="mob-view select-field">
                                                    <div class="mob-select">
                                                        <div class="selected">
                                                            <a href="javascript:void"><span>Select</span></a>
                                                        </div>
                                                        <div class="options">
                                                            <ul>
                                                                <li><a href="javascript:void" id="publish">Publish</a></li>
                                                                <li><a href="javascript:void" id="multi">Multi</a></li>
                                                                <li><a href="javascript:void" id="multi-pro">Multi-Pro</a></li>
                                                                <li><a href="javascript:void" id="unlimited">Unlimited</a></li>
                                                            </ul>
                                                        </div>    
                                                    </div> 
                                                </div>
                                                <div class="plan-th">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>&nbsp;</strong>
                                                            <strong class="plan-price">&nbsp;</strong>
                                                        </li>
                                                        <li>Number of Apps for iOS, Android & Kindle</li>
                                                        <li>Number of Issues</li>
                                                        <li>Enterprise Builds for iOS</li>
                                                        <li>Publish Adobe Indesign Content</li>
                                                        <li>App Monetization</li>
                                                        <li>Analytics Support</li>
                                                        <li>Publish PDF Files</li>
                                                        <li>Publish HTML Content</li>
                                                        <li>Unlimited Push Notifications</li>
                                                        <li>Social Sign-in</li>
                                                        <li>Publish AR Packages in iOS</li>
                                                        <li>User management/Role based access</li>
                                                        <li>Customer Support</li>
                                                        <li class="btn-block">&nbsp;</li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td publish" style="display: block;">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Pay As you Publish</strong>
                                                            <strong class="plan-price">1672&#163;</strong>
                                                        </li>
                                                        <li><span>1 Each</span></li>
                                                        <li><span>1</span></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi popular">
                                                    <ul>
                                                        <li class="lbl-popular">Most Popular</li>
                                                        <li class="plan-head">
                                                            <strong>Multi</strong>
                                                            <strong class="plan-price">4294&#163;</strong>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>2 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi-pro">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Multi-Pro</strong>
                                                            <strong class="plan-price">6014&#163;</strong>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>4 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td unlimited">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Unlimited</strong>
                                                            <a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>Unlimited</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>  

                                    <div class="pricing-chart eur" style="display: none">
                                        <div id="monthly">
                                            <div class="pricing-chart-table">
                                                <div class="mob-view select-field">
                                                    <div class="mob-select">
                                                        <div class="selected">
                                                            <a href="javascript:void"><span>Select</span></a>
                                                        </div>
                                                        <div class="options">
                                                            <ul>
                                                                <li><a href="javascript:void" id="publish">Publish</a></li>
                                                                <li><a href="javascript:void" id="multi">Multi</a></li>
                                                                <li><a href="javascript:void" id="multi-pro">Multi-Pro</a></li>
                                                                <li><a href="javascript:void" id="unlimited">Unlimited</a></li>
                                                            </ul>
                                                        </div>    
                                                    </div> 
                                                </div>
                                                <div class="plan-th">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>&nbsp;</strong>
                                                            <strong class="plan-price">&nbsp;</strong>
                                                        </li>
                                                        <li>Number of Apps for iOS, Android & Kindle</li>
                                                        <li>Number of Issues</li>
                                                        <li>Enterprise Builds for iOS</li>
                                                        <li>Publish Adobe Indesign Content</li>
                                                        <li>App Monetization</li>
                                                        <li>Analytics Support</li>
                                                        <li>Publish PDF Files</li>
                                                        <li>Publish HTML Content</li>
                                                        <li>Unlimited Push Notifications</li>
                                                        <li>Social Sign-in</li>
                                                        <li>Publish AR Packages in iOS</li>
                                                        <li>User management/Role based access</li>
                                                        <li>Customer Support</li>
                                                        <li class="btn-block">&nbsp;</li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td publish" style="display: block;">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Pay As you Publish</strong>
                                                            <strong class="plan-price">1864&#128;</strong>
                                                        </li>
                                                        <li><span>1 Each</span></li>
                                                        <li><span>1</span></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi popular">
                                                    <ul>
                                                        <li class="lbl-popular">Most Popular</li>
                                                        <li class="plan-head">
                                                            <strong>Multi</strong>
                                                            <strong class="plan-price">4785&#128;</strong>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>2 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi-pro">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Multi-Pro</strong>
                                                            <strong class="plan-price">6703&#128;</strong>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>4 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td unlimited">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Unlimited</strong>
                                                            <a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>Unlimited</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>  
                                    
                                    <a href="/" class="primary-btn" title="Full Specs and Pricing">Full Specs and Pricing
                                        <span class="span1">Full Specs and Pricing</span>
                                        <span class="span2">Full Specs and Pricing</span>
                                    </a>
                                </div>
                            </div>
                            <div id="uk" class="tab-sec uk-section">
                                <div class="pricing-body">
                                    <div class="align-right">
                                        <div class="drop-down">
                                            <div class="selected">
                                                <a href="javascript:void"><span>&#36;</em> Usd</span></a>
                                            </div>
                                            <div class="options">
                                                <ul>
                                                    <li><a href="javascript:void" id="usd"><em class="currency">&#36;</em> Usd</a></li>
                                                    <li><a href="javascript:void" id="pound" ><em class="currency">&#163;</em> Pound</a></li>
                                                    <li><a href="javascript:void" id="eur"><em class="currency">&#128;</em> EUR</a></li>
                                                </ul>
                                            </div>    
                                        </div>    
                                    </div>    

                                    <div class="pricing-chart usd">
                                        <div id="monthly">
                                            <div class="pricing-chart-table">
                                                <div class="mob-view select-field">
                                                    <div class="mob-select">
                                                        <div class="selected">
                                                            <a href="javascript:void"><span>Select</span></a>
                                                        </div>
                                                        <div class="options">
                                                            <ul>
                                                                <li><a href="javascript:void" id="publish">Publish</a></li>
                                                                <li><a href="javascript:void" id="multi">Multi</a></li>
                                                                <li><a href="javascript:void" id="multi-pro">Multi-Pro</a></li>
                                                                <li><a href="javascript:void" id="unlimited">Unlimited</a>
                                                            </li>
                                                            </ul>
                                                        </div>    
                                                    </div> 
                                                </div>
                                                <div class="plan-th">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>&nbsp;</strong>
                                                            <strong class="plan-price">&nbsp;</strong>
                                                        </li>
                                                        <li>Number of Apps for iOS, Android & Kindle</li>
                                                        <li>Number of Issues</li>
                                                        <li>Enterprise Builds for iOS</li>
                                                        <li>Publish Adobe Indesign Content</li>
                                                        <li>App Monetization</li>
                                                        <li>Analytics Support</li>
                                                        <li>Publish PDF Files</li>
                                                        <li>Publish HTML Content</li>
                                                        <li>Unlimited Push Notifications</li>
                                                        <li>Social Sign-in</li>
                                                        <li>Publish AR Packages in iOS</li>
                                                        <li>User management/Role based access</li>
                                                        <li>Customer Support</li>
                                                        <li class="btn-block">&nbsp;</li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td publish" style="display: block;">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Pay As you Publish</strong>
                                                            <strong class="plan-price">1799&#36;</strong>
                                                            <span class="lbl-annually">Annually</span>
                                                        </li>
                                                        <li><span>1 Each</span></li>
                                                        <li><span>1</span></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi popular">
                                                    <ul>
                                                        <li class="lbl-popular">Most Popular</li>
                                                        <li class="plan-head">
                                                            <strong>Multi</strong>
                                                            <strong class="plan-price">3999&#36;</strong>
                                                            <span class="lbl-annually">Annually</span>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>2 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi-pro">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Multi-Pro</strong>
                                                            <strong class="plan-price">4999&#36;</strong>
                                                            <span class="lbl-annually">Annually</span>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>4 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td unlimited">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Unlimited</strong>
                                                            <a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>Unlimited</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>  

                                    <div class="pricing-chart pound" style="display: none">
                                        <div id="monthly">
                                            <div class="pricing-chart-table">
                                                <div class="mob-view select-field">
                                                    <div class="mob-select">
                                                        <div class="selected">
                                                            <a href="javascript:void"><span>Select</span></a>
                                                        </div>
                                                        <div class="options">
                                                            <ul>
                                                                <li><a href="javascript:void" id="publish">Publish</a></li>
                                                                <li><a href="javascript:void" id="multi">Multi</a></li>
                                                                <li><a href="javascript:void" id="multi-pro">Multi-Pro</a></li>
                                                                <li><a href="javascript:void" id="unlimited">Unlimited</a></li>
                                                            </ul>
                                                        </div>    
                                                    </div> 
                                                </div>
                                                <div class="plan-th">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>&nbsp;</strong>
                                                            <strong class="plan-price">&nbsp;</strong>
                                                        </li>
                                                        <li>Number of Apps for iOS, Android & Kindle</li>
                                                        <li>Number of Issues</li>
                                                        <li>Enterprise Builds for iOS</li>
                                                        <li>Publish Adobe Indesign Content</li>
                                                        <li>App Monetization</li>
                                                        <li>Analytics Support</li>
                                                        <li>Publish PDF Files</li>
                                                        <li>Publish HTML Content</li>
                                                        <li>Unlimited Push Notifications</li>
                                                        <li>Social Sign-in</li>
                                                        <li>Publish AR Packages in iOS</li>
                                                        <li>User management/Role based access</li>
                                                        <li>Customer Support</li>
                                                        <li class="btn-block">&nbsp;</li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td publish" style="display: block;">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Pay As you Publish</strong>
                                                            <strong class="plan-price">1434&#163;</strong>
                                                            <span class="lbl-annually">Annually</span>
                                                        </li>
                                                        <li><span>1 Each</span></li>
                                                        <li><span>1</span></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi popular">
                                                    <ul>
                                                        <li class="lbl-popular">Most Popular</li>
                                                        <li class="plan-head">
                                                            <strong>Multi</strong>
                                                            <strong class="plan-price">3187&#163;</strong>
                                                            <span class="lbl-annually">Annually</span>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>2 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi-pro">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Multi-Pro</strong>
                                                            <strong class="plan-price">3984&#163;</strong>
                                                            <span class="lbl-annually">Annually</span>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>4 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td unlimited">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Unlimited</strong>
                                                            <a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>Unlimited</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>  

                                    <div class="pricing-chart eur" style="display: none">
                                        <div id="monthly">
                                            <div class="pricing-chart-table">
                                                <div class="mob-view select-field">
                                                    <div class="mob-select">
                                                        <div class="selected">
                                                            <a href="javascript:void"><span>Select</span></a>
                                                        </div>
                                                        <div class="options">
                                                            <ul>
                                                                <li><a href="javascript:void" id="publish">Publish</a></li>
                                                                <li><a href="javascript:void" id="multi">Multi</a></li>
                                                                <li><a href="javascript:void" id="multi-pro">Multi-Pro</a></li>
                                                                <li><a href="javascript:void" id="unlimited">Unlimited</a></li>
                                                            </ul>
                                                        </div>    
                                                    </div> 
                                                </div>
                                                <div class="plan-th">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>&nbsp;</strong>
                                                            <strong class="plan-price">&nbsp;</strong>
                                                        </li>
                                                        <li>Number of Apps for iOS, Android & Kindle</li>
                                                        <li>Number of Issues</li>
                                                        <li>Enterprise Builds for iOS</li>
                                                        <li>Publish Adobe Indesign Content</li>
                                                        <li>App Monetization</li>
                                                        <li>Analytics Support</li>
                                                        <li>Publish PDF Files</li>
                                                        <li>Publish HTML Content</li>
                                                        <li>Unlimited Push Notifications</li>
                                                        <li>Social Sign-in</li>
                                                        <li>Publish AR Packages in iOS</li>
                                                        <li>User management/Role based access</li>
                                                        <li>Customer Support</li>
                                                        <li class="btn-block">&nbsp;</li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td publish" style="display: block;">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Pay As you Publish</strong>
                                                            <strong class="plan-price">1597&#128;</strong>
                                                            <span class="lbl-annually">Annually</span>
                                                        </li>
                                                        <li><span>1 Each</span></li>
                                                        <li><span>1</span></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi popular">
                                                    <ul>
                                                        <li class="lbl-popular">Most Popular</li>
                                                        <li class="plan-head">
                                                            <strong>Multi</strong>
                                                            <strong class="plan-price">3550&#128;</strong>
                                                            <span class="lbl-annually">Annually</span>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>2 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td multi-pro">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Multi-Pro</strong>
                                                            <strong class="plan-price">4438&#128;</strong>
                                                            <span class="lbl-annually">Annually</span>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>4 per month</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="plan-td unlimited">
                                                    <ul>
                                                        <li class="plan-head">
                                                            <strong>Unlimited</strong>
                                                            <a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a>
                                                        </li>
                                                        <li>1 Each</li>
                                                        <li>Unlimited</li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                                        <li><span>Standard</span></li>
                                                        <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>  
                                    
                                    <a href="/" class="primary-btn" title="Full Specs and Pricing">Full Specs and Pricing
                                        <span class="span1">Full Specs and Pricing</span>
                                        <span class="span2">Full Specs and Pricing</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="pricing-switcher">
                        <div class="pricing-fieldset">
                            <input type="radio" name="duration-1" value="monthly" id="monthly" checked="">
                            <label for="monthly">Monthly</label>
                            <input type="radio" name="duration-1" value="yearly" id="yearly">
                            <label for="yearly">Yearly</label>
                            <span class="switch"></span>
                        </div>
                    </div>    

                    <div class="pricing-body">
                        <div class="align-right">
                            <div class="drop-down">
                                <div class="selected">
                                    <a href="javascript:void"><span>&#36;</em> Usd</span></a>
                                </div>
                                <div class="options">
                                    <ul>
                                        <li><a href="javascript:void" id="usd"><em class="currency">&#36;</em> Usd</a></li>
                                        <li><a href="javascript:void" id="pound" ><em class="currency">&#163;</em> Pound</a></li>
                                        <li><a href="javascript:void" id="eur"><em class="currency">&#128;</em> EUR</a></li>
                                    </ul>
                                </div>    
                            </div>    
                        </div>    

                        <div class="pricing-chart usd">
                            <div id="monthly">
                                <div class="pricing-chart-table">
                                    <div class="mob-view select-field">
                                        <div class="mob-select">
                                            <div class="selected">
                                                <a href="javascript:void"><span>Select</span></a>
                                            </div>
                                            <div class="options">
                                                <ul>
                                                    <li><a href="javascript:void" id="publish">Publish</a></li>
                                                    <li><a href="javascript:void" id="multi">Multi</a></li>
                                                    <li><a href="javascript:void" id="multi-pro">Multi-Pro</a></li>
                                                    <li><a href="javascript:void" id="unlimited">Unlimited</a></li>
                                                </ul>
                                            </div>    
                                        </div> 
                                    </div>
                                    <div class="plan-th">
                                        <ul>
                                            <li class="plan-head">
                                                <strong>&nbsp;</strong>
                                                <strong class="plan-price">&nbsp;</strong>
                                            </li>
                                            <li>Number of Apps for iOS, Android & Kindle</li>
                                            <li>Number of Issues</li>
                                            <li>Enterprise Builds for iOS</li>
                                            <li>Publish Adobe Indesign Content</li>
                                            <li>App Monetization</li>
                                            <li>Analytics Support</li>
                                            <li>Publish PDF Files</li>
                                            <li>Publish HTML Content</li>
                                            <li>Unlimited Push Notifications</li>
                                            <li>Social Sign-in</li>
                                            <li>Publish AR Packages in iOS</li>
                                            <li>User management/Role based access</li>
                                            <li>Customer Support</li>
                                            <li class="btn-block">&nbsp;</li>
                                        </ul>
                                    </div>
                                    <div class="plan-td publish" style="display: block;">
                                        <ul>
                                            <li class="plan-head">
                                                <strong>Pay As you Publish</strong>
                                                <strong class="plan-price">50 &#36;</strong>
                                            </li>
                                            <li><span>1 Each</span></li>
                                            <li><span>1</span></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><span>Standard</span></li>
                                            <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="plan-td multi popular">
                                        <ul>
                                            <li class="lbl-popular">Most Popular</li>
                                            <li class="plan-head">
                                                <strong>Multi</strong>
                                                <strong class="plan-price">90 &#36;</strong>
                                            </li>
                                            <li>1 Each</li>
                                            <li>2 per month</li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><span>Standard</span></li>
                                            <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="plan-td multi-pro">
                                        <ul>
                                            <li class="plan-head">
                                                <strong>Multi-Pro</strong>
                                                <strong class="plan-price">250 &#36;</strong>
                                            </li>
                                            <li>1 Each</li>
                                            <li>4 per month</li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><span>Standard</span></li>
                                            <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="plan-td unlimited">
                                        <ul>
                                            <li class="plan-head">
                                                <strong>Unlimited</strong>
                                                <strong class="plan-price">500 &#36;</strong>
                                            </li>
                                            <li>1 Each</li>
                                            <li>Unlimited</li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><span>Standard</span></li>
                                            <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>     
                            </div>
                        </div>  

                        <div class="pricing-chart pound" style="display: none">
                            <div id="monthly">
                                <div class="pricing-chart-table">
                                    <div class="mob-view select-field">
                                        <div class="mob-select">
                                            <div class="selected">
                                                <a href="javascript:void"><span>Select</span></a>
                                            </div>
                                            <div class="options">
                                                <ul>
                                                    <li><a href="javascript:void" id="publish">Publish</a></li>
                                                    <li><a href="javascript:void" id="multi">Multi</a></li>
                                                    <li><a href="javascript:void" id="multi-pro">Multi-Pro</a></li>
                                                    <li><a href="javascript:void" id="unlimited">Unlimited</a></li>
                                                </ul>
                                            </div>    
                                        </div> 
                                    </div>
                                    <div class="plan-th">
                                        <ul>
                                            <li class="plan-head">
                                                <strong>&nbsp;</strong>
                                                <strong class="plan-price">&nbsp;</strong>
                                            </li>
                                            <li>Number of Apps for iOS, Android & Kindle</li>
                                            <li>Number of Issues</li>
                                            <li>Enterprise Builds for iOS</li>
                                            <li>Publish Adobe Indesign Content</li>
                                            <li>App Monetization</li>
                                            <li>Analytics Support</li>
                                            <li>Publish PDF Files</li>
                                            <li>Publish HTML Content</li>
                                            <li>Unlimited Push Notifications</li>
                                            <li>Social Sign-in</li>
                                            <li>Publish AR Packages in iOS</li>
                                            <li>User management/Role based access</li>
                                            <li>Customer Support</li>
                                            <li class="btn-block">&nbsp;</li>
                                        </ul>
                                    </div>
                                    <div class="plan-td publish" style="display: block;">
                                        <ul>
                                            <li class="plan-head">
                                                <strong>Pay As you Publish</strong>
                                                <strong class="plan-price">50 &#163;</strong>
                                            </li>
                                            <li><span>1 Each</span></li>
                                            <li><span>1</span></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><span>Standard</span></li>
                                            <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="plan-td multi popular">
                                        <ul>
                                            <li class="lbl-popular">Most Popular</li>
                                            <li class="plan-head">
                                                <strong>Multi</strong>
                                                <strong class="plan-price">90 &#163;</strong>
                                            </li>
                                            <li>1 Each</li>
                                            <li>2 per month</li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><span>Standard</span></li>
                                            <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="plan-td multi-pro">
                                        <ul>
                                            <li class="plan-head">
                                                <strong>Multi-Pro</strong>
                                                <strong class="plan-price">250 &#163;</strong>
                                            </li>
                                            <li>1 Each</li>
                                            <li>4 per month</li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><span>Standard</span></li>
                                            <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="plan-td unlimited">
                                        <ul>
                                            <li class="plan-head">
                                                <strong>Unlimited</strong>
                                                <strong class="plan-price">500 &#163;</strong>
                                            </li>
                                            <li>1 Each</li>
                                            <li>Unlimited</li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><span>Standard</span></li>
                                            <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>     
                            </div>
                        </div>  

                        <div class="pricing-chart eur" style="display: none">
                            <div id="monthly">
                                <div class="pricing-chart-table">
                                    <div class="mob-view select-field">
                                        <div class="mob-select">
                                            <div class="selected">
                                                <a href="javascript:void"><span>Select</span></a>
                                            </div>
                                            <div class="options">
                                                <ul>
                                                    <li><a href="javascript:void" id="publish">Publish</a></li>
                                                    <li><a href="javascript:void" id="multi">Multi</a></li>
                                                    <li><a href="javascript:void" id="multi-pro">Multi-Pro</a></li>
                                                    <li><a href="javascript:void" id="unlimited">Unlimited</a></li>
                                                </ul>
                                            </div>    
                                        </div> 
                                    </div>
                                    <div class="plan-th">
                                        <ul>
                                            <li class="plan-head">
                                                <strong>&nbsp;</strong>
                                                <strong class="plan-price">&nbsp;</strong>
                                            </li>
                                            <li>Number of Apps for iOS, Android & Kindle</li>
                                            <li>Number of Issues</li>
                                            <li>Enterprise Builds for iOS</li>
                                            <li>Publish Adobe Indesign Content</li>
                                            <li>App Monetization</li>
                                            <li>Analytics Support</li>
                                            <li>Publish PDF Files</li>
                                            <li>Publish HTML Content</li>
                                            <li>Unlimited Push Notifications</li>
                                            <li>Social Sign-in</li>
                                            <li>Publish AR Packages in iOS</li>
                                            <li>User management/Role based access</li>
                                            <li>Customer Support</li>
                                            <li class="btn-block">&nbsp;</li>
                                        </ul>
                                    </div>
                                    <div class="plan-td publish" style="display: block;">
                                        <ul>
                                            <li class="plan-head">
                                                <strong>Pay As you Publish</strong>
                                                <strong class="plan-price">50 &#128;</strong>
                                            </li>
                                            <li><span>1 Each</span></li>
                                            <li><span>1</span></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><span>Standard</span></li>
                                            <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="plan-td multi popular">
                                        <ul>
                                            <li class="lbl-popular">Most Popular</li>
                                            <li class="plan-head">
                                                <strong>Multi</strong>
                                                <strong class="plan-price">90 &#128;</strong>
                                            </li>
                                            <li>1 Each</li>
                                            <li>2 per month</li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/cross-icon.svg" alt=""></li>
                                            <li><span>Standard</span></li>
                                            <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="plan-td multi-pro">
                                        <ul>
                                            <li class="plan-head">
                                                <strong>Multi-Pro</strong>
                                                <strong class="plan-price">250 &#128;</strong>
                                            </li>
                                            <li>1 Each</li>
                                            <li>4 per month</li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><span>Standard</span></li>
                                            <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="plan-td unlimited">
                                        <ul>
                                            <li class="plan-head">
                                                <strong>Unlimited</strong>
                                                <strong class="plan-price">500 &#128;</strong>
                                            </li>
                                            <li>1 Each</li>
                                            <li>Unlimited</li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><img src="<?php bloginfo('template_directory'); ?>/images/icons/checkmark-icon.svg" alt=""></li>
                                            <li><span>Standard</span></li>
                                            <li class="btn-block"><a href="javascript:void()" class="btn sec-btn home-contact-click" title="Contact Us">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>     
                            </div>
                        </div>  
                        
                        <a href="/" class="primary-btn" title="Full Specs and Pricing">Full Specs and Pricing
                            <span class="span1">Full Specs and Pricing</span>
                            <span class="span2">Full Specs and Pricing</span>
                        </a>
                    </div> -->
                </div>    
            </div>
        </section>
    </div>
	

<?php
get_footer();
