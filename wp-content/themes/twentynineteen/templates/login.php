<?php
/**
 * Template Name: Login New Template
 *
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
    <div class="container tutorialPg"> 
        <section id="tutorials" class="l-section sec-pad grey-bg pad-top0 form-pg">
            <div class="l-section-wrap pos-rel">
                <div class="breadcrumb">
                    <ul>
                        <li class="breadcrumb-item"><a href="<?php echo get_permalink(29200); ?>">mag+</a></li>
                        <li class="breadcrumb-item">Try For Free</li>
                    </ul>
                </div>
                <div class="form-section form-container">
                    <h5>You’re Just One Step away from Getting the Tools</h5>
                    <div class="form-block">
                        <h4>Create your mag+ account</h4>
                        <a class="btn-link google-link" href="https://www.magplus.com/social-login/google/google_login.php" title="Login with Google"><span class="btn-link-ico"><img src="<?php bloginfo('template_directory'); ?>/images/icons/google-icon.svg" alt=""></span> <span class="btn-link-text">Login with Google</span></a>
                        <a class="btn-link fb-link" href="https://www.magplus.com/social-login/facebook/" title="Login with Facebook"><span class="btn-link-ico"><img src="<?php bloginfo('template_directory'); ?>/images/icons/fb-icon.svg" alt=""></span><span class="btn-link-text">Login with Facebook</span></a>
                        <a class="btn-link microsoft-link" href="https://www.magplus.com/social-login/microsoft/live_login.php" title="Login with Microsoft"><span class="btn-link-ico"><img src="<?php bloginfo('template_directory'); ?>/images/icons/microsoft-icon.svg" alt=""></span><span class="btn-link-text">Login with Microsoft</span></a>
                        <span class="text-or">Or</span>
                        <a class="btn-link email-link" href="<?php echo get_permalink(31545); ?>" title="Sign Up with Email"><span class="btn-link-ico"><img src="<?php bloginfo('template_directory'); ?>/images/icons/email-icon.svg" alt=""></span><span class="btn-link-text">Sign Up with Email</span></a>
                        <p class="already-acc-text">Already have an account? <a href="<?php echo get_permalink(31535); ?>" title="Log in">Log in</a></p>
                        <p class="tmc-text">By clicking “Sign Up” you agree to the <br/><a href="<?php echo get_permalink(867); ?>" title="Terms of Service">Terms of Service</a></p>
                    </div>
                </div>
            </div>    
        </div>
    <div>       

<?php get_footer(); ?>