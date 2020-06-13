<?php
/**
 * Template Name: Download New Template
 *
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

//Set version of download to be passed to google analytics for tracking.

$path = get_stylesheet_directory();
require_once($path.'/logged-in/functions.php');


if(!isset($_COOKIE['mg_version'])){

    $mpUpdate='./magplus/mpidupdate.txt';

    if(file_exists($mpUpdate)){
        $version = file_get_contents($mpUpdate);

        $versionSlicer = explode(substr($version, 1, 1), $version);

        $versiontrk = $versionSlicer[0].'.'.$versionSlicer[1].'.'.$versionSlicer[2];

        setcookie('mg_version', $versiontrk, time()+3600, "/");/* Passes the mag+ version to my-magplus for tracking when downloadinf */
    }

}


$nowFormat = date('Y-m-d'); $timeFormat = date('H:i:s'); 
$ipaddress = $_SERVER['REMOTE_ADDR']; 
$data = magplus_logged_in_check();

if (empty($data)) { 
    //header("location:https://www.magplus.com/signup/");
    //exit;
} 

get_header();
?>
    <div class="container downloal-page">
        <section  class="l-section sec-pad">
            <div class="l-section-wrap">
                <h3>Download the<br/> mag+ Creative Tools</h3>
                <div class="g-col offset_default flex-start">
                    <div class="one-half">
                        <form id="form1" action="https://download.magplus.com/" class="magplus-download magform" method="get">
                            <div class="ps-split">
                                <!-- <select name="cs_version" id="cs_version" class="cs_version">
                                    <option value="">Select your Adobe InDesign version</option>
                                    <option value="CC_2020" id="cs_version_CC_2020">CC 2020</option>
                                    <option value="CC_2019" id="cs_version_CC_2019">CC 2019</option>
                                    <option value="CC_2018" id="cs_version_CC_2018">CC 2018</option>
                                    <option value="CS6" id="cs_version_CS6">CS6</option>    
                                </select> -->

                                <div class="download-ver-select"> 
                                    <div class="selected">
                                        <a href="javascript:void"><span> CC 2020</span></a>
                                    </div>
                                    <div class="options">
                                        <ul name="cs_version" id="cs_version" class="cs_version"> 
                                            <li><a href="javascript:void" id="cs_version_CC_2020"> CC 2020</a></li>
                                            <li><a href="javascript:void" id="cs_version_CC_2019" > CC 2019</a></li>
                                            <li><a href="javascript:void" id="cs_version_CC_2018"> CC 2018</a></li>
                                            <li><a href="javascript:void" id="cs_version_CS6"> CS6</a></li>
                                        </ul>
                                    </div>    
                                </div>
                                        
                                <p style="margin-bottom: 15px;">Shown above is the latest InDesign version. To select a different version, choose from the drop-down menu. </p>
                            </div>


                            <div class="radio-button-block tmc-block ps-split">
                                <label class="ps-split-label radio-container" for="osMac">Mac OS X
                                    <input name="os" tabindex="8" id="osMac" value="MacOS" type="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container" for="osWin">Windows
                                    <input name="os" tabindex="9" id="osWin" value="Win" type="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>    

                            <div class="btn-block">
                                <!-- <a href="" class="primary-btn" title="Download">Download
                                    <span class="span1">Download</span>
                                    <span class="span2">Download</span>
                                    <span class="span3">Download</span>
                                </a> -->
                                <input name="submit" id="download-designd-tools-submit-button" class="primary-btn download" tabindex="7" value="Download" type="submit">
                            </div>    
                        </form>
                        <!--
                        <div style="display: none !important;">
                            <form id="form2">
                                <input id="text0" name="text0" type="hidden" value="<?php echo $data->user_id; ?>" /><br />
                                <input id="text1" name="text1" type="hidden" value="<?php echo $data->name; ?>" /><br />
                                <input name="text2" type="hidden" value="<?php echo $data->email; ?>"/><br />
                                <input name="phone" type="hidden" value="<?php echo $data->phone; ?>"/><br />
                                <input id="text3" name="text3" type="hidden" value="<?php echo $nowFormat; ?>"/><br />
                                <input id="time31" name="text31" type="hidden" value="<?php echo $timeFormat; ?>"/><br />
                                <input id="text5" name="text5" type="hidden" value=""/><br />
                                <input id="text4" name="text4" type="hidden" value=""/><br />
                                <input id="text6" name="text6" type="hidden" value="<?php echo $ipaddress; ?>"/><br />
                            </form>
                        </div>
                        -->
                        <!--
                        <div class="download-ver-select"> 
                            <div class="selected">
                                <a href="javascript:void"><span> CC 2020</span></a>
                            </div>
                            <div class="options">
                                <ul>
                                    <li><a href="javascript:void" id="ver20"> CC 2020</a></li>
                                    <li><a href="javascript:void" id="ver19" > CC 2019</a></li>
                                    <li><a href="javascript:void" id="ver18"> CC 2018</a></li>
                                </ul>
                            </div>    
                        </div>
                        <div class="version-block ver20">
                            
                            <p>Shown above is the latest InDesign version. To select a different version, choose from the drop-down menu.</p>
                            
                            <div class="radio-button-block tmc-block">
                                <label class="radio-container">Mac OS X
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Windows
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <div class="btn-block">
                                <a href="" class="primary-btn" title="Download">Download
                                    <span class="span1">Download</span>
                                    <span class="span2">Download</span>
                                    <span class="span3">Download</span>
                                </a>
                            </div>
                        </div>
                        <div class="version-block ver19" style="display: none;">
                            
                            <p>Shown above is the latest InDesign version. To select a different version, choose from the drop-down menu.</p>
                            
                            <div class="radio-button-block tmc-block">
                                <label class="radio-container">Mac OS X
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Windows
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <div class="btn-block">
                                <a href="" class="primary-btn" title="Download">Download
                                    <span class="span1">Download</span>
                                    <span class="span2">Download</span>
                                    <span class="span3">Download</span>
                                </a>
                            </div>
                        </div>
                        <div class="version-block ver18" style="display: none;">
                            
                            <p>Shown above is the latest InDesign version. To select a different version, choose from the drop-down menu.</p>
                            
                            <div class="radio-button-block tmc-block">
                                <label class="radio-container">Mac OS X
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Windows
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <div class="btn-block">
                                <a href="" class="primary-btn" title="Download">Download
                                    <span class="span1">Download</span>
                                    <span class="span2">Download</span>
                                    <span class="span3">Download</span>
                                </a>
                            </div>
                        </div>   
                        -->
                        <p class="tmc-text">By downloading I am agreeing to the  <a href="?page_id=31545" class="link" title="mag+ Designd Terms & Conditions">mag+ Designd Terms & Conditions</a></p>
                        
                    </div>
                    <div class="one-half">
                        <div class="tools-download-info-holder">
                            <div class="tools-download-info-block">
                                <h5>Your Tools download will contain:</h5>
                                <ul class="bullet-list">
                                    <li>InDesign templates for all supported devices</li>
                                    <li>The mag+ InDesign Plugin to create your interactive documents</li>
                                    <li>The Production Tool to assemble your pages and create your mag+ file</li>
                                </ul>
                            </div>
                        </div>    
                        <h6 class="text-link">Get Started Guide</h6>
                        <p>See the latest release notes for the <a href="#" class="text-link link" title="mag+ Creative Tools">mag+ Creative Tools</a>.</p>
                    </div>
                </div>
            </div>
        </section> 
    </div>
	

<?php
get_footer();
