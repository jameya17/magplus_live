<?php
/**
 * Template Name: Sign Up New Template
 *
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

define('MAGPLUS_REGISTER_URL', "https://staging-publish.magplus.com/registration");
define('MAGPLUS_REGISTER_REDIRECT', "https://www.magplus.com/thank-you-for-registering-with-magplus/");
define('MAGPLUS_VERIFY_REDIRECT', "https://www.magplus.com/thank-you-for-registering-with-magplus/");
define('MAGPLUS_FAILED_REDIRECT', "http://d3v.magplus.com/signup/");
define('MAGPLUS_DOWNLOAD_URL', "https://download.magplus.com/");


$ipaddress = $_SERVER['REMOTE_ADDR'];


$data_org = get_user_country_by_ip();
$number_prefix = '';
$reginfo = '';
if( $data_org ){
    $data = json_decode($data_org);
    if(isset($data->countryCode)){
        $countryCode = strtolower($data->countryCode);
        $number_prefix = country_number_codes($countryCode);
        if($number_prefix){
            $number_prefix = '+'. $number_prefix .' ';
        }
    }

    $reginfo = '{"ipinfo":{"ip_address":"'.$data->ipAddress.'","ip_type":"Mapped","Location":{"continent":"N/A","latitude":'.$data->latitude.',"longitude":'.$data->longitude.',"CountryData":{"country":"'.strtolower($data->countryName).'","country_code":"'.strtolower($data->countryCode).'"},"region":"N/A","StateData":{"state":"'.strtolower($data->regionName).'","state_code":"'.strtolower($data->regionCode).'"},"dma":"N/A","msa":"N/A","CityData":{"city":"'.strtolower($data->cityName).'","postal_code":"'.$data->zipCode.'","time_zone":"'.$data->timeZone.'","area_code":" "}}}}';
}

$referral = unserialize(stripcslashes($_COOKIE['mp_referral']));
$referral = json_encode($referral);

function country_select($country_code){
    $countries = country_number_codes();
    $country_list = country_list();
    $out = '<select type="hidden" name="registration[country_code]" class="mag-customselect" style="display:none;">';
    foreach($countries as $country => $number_prefix){
        $out .= '<option value="'. $country .'"';
            if(strtoupper($country_code) == $country) $out .= ' selected="selected"';
        $out .= ' data-alternative-spellings="'. $country .'">'.
            $country_list[$country] .' (+'. $number_prefix .')</option>';
    }
    $out .= '</select>';
    return $out;
}

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
                <form class="form-block magform magplus-half-form magplus-signup" autocomplete="off" id="magplus_signup2" action="<?php echo MAGPLUS_REGISTER_URL ?>" method="post">
                    <input type="hidden" name="utf8" value="âœ“">
                    <input type="hidden" id="redirect_to" name="redirect_to" value="<?php echo MAGPLUS_REGISTER_REDIRECT ?>">
                    <input type="hidden" id="verify_redirect_to" name="verify_redirect_to" value="<?php echo MAGPLUS_VERIFY_REDIRECT ?>">
                    <input type="hidden" name="failed_redirect_to" value="<?php echo MAGPLUS_FAILED_REDIRECT ?>">
                    <!--<input id="00N7F00000HNBcC" maxlength="100" name="00N7F00000HNBcC" class="00N7F00000HNBcC" size="20" type="hidden" value="">-->
                    <input  id="sf_00N7F00000HNBcC" maxlength="100" name="00N7F00000HNBcC" size="20" type="hidden" value="<?php echo $ipaddress ?>" />
                    <input  id="00N7F00000HNBcC" maxlength="100" name="00N7F00000HNBcC" size="20" type="hidden" value="<?php echo $ipaddress ?>" />
                    
                    <h2 class="form-block-title">Sign Up</h2>

                    <div class="styled-input error-block">
                        <input class="input-field" type="text" name="registration[first_name]" required pattern="[a-zA-Z]+" />
                        <label class="input-lbl">First name</label>
                        <span class="error">Welcome to Magplus</span>
                    </div>
                    <div class="styled-input">
                        <input class="input-field" type="text" name="registration[name]" required pattern="[a-zA-Z]+" />
                        <label class="input-lbl">Last name</label>
                        <span class="error">Welcome to Magplus</span>
                    </div>
                    <div class="styled-input">
                        <input class="input-field" type="email" name="registration[email]" required />
                        <label class="input-lbl email-filed">Email</label>
                        <span class="error">Welcome to Magplus</span>
                    </div>
                    <div class="styled-input">
                        <div class="group-field hide">
                            <input class="input-field" type="password" id="registration_password" name="registration[password]" pattern=".{6,}[^' ']+" required autocomplete="off" />
                            <label class="input-lbl">Password</label>
                            <strong class="eye-icon"></strong>
                        </div>    
                        <span class="error">Atleast 1 uppercase & numerical</span>
                    </div>
                    <?php echo country_select($countryCode); ?>
                    <div class="styled-input">
                        <input class="input-field" type="tel" name="registration[phone]" required autocomplete="off" pattern="[0-9]+"/>
                        <label class="input-lbl">Phone number</label>
                        <span class="error">This is secure with us</span>
                    </div>
                    <div class="styled-input">
                        <input class="input-field" type="text" name="registration[company]" required autocomplete="off"/>
                        <label class="input-lbl">Company</label>
                        <span class="error">Please feed in the code you have</span>
                    </div>
                    <div class="form-field-group">
                        <div class="group-field">
                            <label class="checkbox-container" for="accept_terms_0">
                                <input type="checkbox" name="accept_terms_0" id="accept_terms_0" checked />
                                <input name="registration[accept_terms]" id="accept_terms" type="hidden" type="text" value="true" />
                                <span class="checkmark"></span>
                                By clicking “Sign Up” you agree to the <a href="/mega-plus/www/license-agreement.php" title="Terms of Service">Terms of Service</a>
                            </label>    
                            <span class="error">Please feed in the code you have</span>
                        </div>
                    </div>    
                    
                    <div class="form-field-group">
                        <div class="group-field">
                            <label class="checkbox-container" for="gdpr_0">
                                <input type="checkbox" name="gdpr_0" id="gdpr_0" checked />
                                <input name="registration[gdpr]" id="gdpr" type="hidden" type="text" value="true" />
                                <span class="checkmark"></span>Yes I would like mag+ to contact me based on the information provided
                            </label>    
                            <span class="error">Please feed in the code you have</span>
                        </div>
                    </div>
                    
                    <div style="dispaly:none;">
                        <textarea  style="display:none;" id="sf_descriptions" name="registration[description]" placeholder=""> &nbsp;  &nbsp;</textarea>
                        <input type="hidden" id="sf_street" class="w2linput hidden street_sf" name="street" value="">
                        <input type="hidden" id="sf_city" class="w2linput hidden city_sf" name="city" value="">
                        <input type="hidden" id="sf_state"  class="w2linput hidden state_sf" name="registration[state]" value="">
                        <input type="hidden" id="sf_zip" class="w2linput hidden zip_sf" name="zip" value=" ">
                        <input type="hidden" id="sf_country" class="w2linput hidden country_sf" name="country" value="">
                        <input type="hidden" id="sf_Form_Name__c" class="w2linput hidden" name="Form_Name__c" value="">
                        <input type="hidden" id="registration_url" class="register-new-form-where" name="registration[from_where]" value="Url - ">
                        <input type="hidden" name="registration[ip_info]" value=<?php echo $reginfo; ?>>
                        <input type="hidden" name="registration[traffic]" value=<?php echo $referral; ?>>
                     </div>

                    <div class="btn-block align-center">
                        <input name="commit" id="pr_button" class="form-btn" type="submit" value="Sign Up">
                        <!-- <a href="#" class="primary-btn" title="Sign Up">
                            <span class="span1">Sign Up</span>
                            <span class="span2">Sign Up</span>
                            <span class="span3">Sign Up</span>
                        </a> -->
                    </div>
                    <p class="tmc-text">By clicking “Sign Up” you agree to the <a href="/mega-plus/www/license-agreement.php" title="Terms of Service">Terms of Service</a></p>
                </form>
            </div>
        </div>    
    </div>
<div>
<?php get_footer(); ?>