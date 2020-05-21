<?php
/**
 * Template Name: Sign In New Template
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
                    <h5>You’re Just One Step away from Getting the Tools</h5>
                    <form action="https://login.magplus.com/auth/identity/callback" onsubmit="return validateSignInForm();" method="post" class="form-block" id="sign-in-form">
                        <h2 class="form-block-title">Sign In</h2>

                        <div class="styled-input">
                            <input type="text" name="auth_key" id="email" />
                            <label>Email</label>
                            <span class="error">Welcome to Magplus</span>
                        </div>
                        <div class="styled-input">
                            <div class="group-field hide">
                                <input type="password" name="password" autocomplete="off" id="registration_password" />
                                <label>password</label>
                                <strong class="eye-icon"></strong>
                            </div>    
                            <span class="error">Atleast 1 uppercase & numerical</span>
                        </div>

                        <div class="form-field-group">
                            <div class="group-field">
                                <label class="checkbox-container" for="remember-me">
                                    <input type="checkbox" id="remember-me">
                                    <span class="checkmark"></span>Remember Me
                                </label>
                                <span class="error">Atleast 1 uppercase & numerical</span>
                            </div>    
                            <a href="#" class="forgot-password-link" title="Forgot Password?">Forgot Password?</a>    
                        </div>

                        <div class="btn-block align-center">
                            <input type="hidden" name="origin" value="<?php echo $origin; ?>" />
                            <input type="submit" name="commit" class="btn form-btn" value="Sign In" />
                            <!-- <a href="#" class="primary-btn" title="Sign In">
                                <span class="span1">Sign In</span>
                                <span class="span2">Sign In</span>
                                <span class="span3">Sign In</span>
                            </a> -->
                        </div>
                        <!-- <div class="form-field-group">
                            <span class="divider-text">Or, Sign In with</span>
                        </div>    
                        <div class="form-field-group">
                            <a class="btn-link apple-link" href="https://www.magplus.com/social-login/microsoft/live_login.php" title="Sign In with Microsoft"><img src="<?php bloginfo('template_directory'); ?>/images/icons/apple-icon.svg" alt=""> Sign In with Microsoft</a>
                        </div>    
                        <div class="form-field-group form-field-icon-group">
                            <a href="https://www.magplus.com/social-login/google/google_login.php" title="Google" class="google-logo" ><img src="<?php bloginfo('template_directory'); ?>/images/icons/google-logo.svg" alt="Google"></a>
                            <a href="https://www.magplus.com/social-login/facebook/" title="Facebook" class="fb-logo"><img src="<?php bloginfo('template_directory'); ?>/images/icons/fb-logo.svg" alt="Facebook"></a>
                        </div>     -->
                        <p class="tmc-text">Don’t have an account?  <a href="?page_id=31549" title="Sign Up">Sign Up</a></p>
                    </form>
                </div>
            </div>    
        </div>
    <div>
        
<?php get_footer(); ?>