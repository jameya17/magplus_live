<?php
/**
 * Template Name: Thank You SignUp New Template
 *
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

$args = array();

$default = array(
    'origin' => get_bloginfo('url') .'/my-magplus/?message=new-user',
    'title' => '',
    'text' => '',
    'submit' => 'Login',
    'class' => ''
);
extract(array_merge($default, $args));

get_header();
?>

<div class="container tutorialPg"> 
        <section id="tutorials" class="l-section sec-pad grey-bg pad-top0 form-pg ">
            <div class="l-section-wrap pos-rel">
                <div class="breadcrumb">
                    <ul>
                        <li class="breadcrumb-item"><a href="#">Magpplus</a></li>
                        <li class="breadcrumb-item"><a href="#">Try For Free</a></li>
                        <li class="breadcrumb-item"><a href="#">Sign Up</a></li>
                    </ul>
                </div>
                <div class="form-section form-container sign-up-form">
                    <!-- <h5>You’re Just One Step away from Getting the Tools</h5> -->
                    <div class="form-block">
                        <img src="<?php bloginfo('template_directory'); ?>/images/thank-you-signup.svg" alt="" />

                        <h2>Thanks for signing up!</h2>
                        <p>We're excited to have you check out all the things you can do with Magplus, and start publishing your App.</p>
                        
                        <a href="/" class="primary-btn" title="Explore Mag+">Explore Mag+
                            <span class="span1">Explore Mag+</span>
                            <span class="span2">Explore Mag+</span>
                            <span class="span3">Explore Mag+</span> 
                        </a>
                    </div>
                </div>
            </div>    
        </div>
    <div>
        
<?php get_footer(); ?>