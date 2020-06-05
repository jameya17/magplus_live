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
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<div class="container"> 
        <section id="tutorials" class="l-section sec-pad pad-top0 blog-listing-section">
            <div class="l-section-wrap">
                <div class="breadcrumb">
                    <ul>
                        <li class="breadcrumb-item"><a href="<?php echo get_permalink(29200); ?>">Magpplus</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo get_permalink(31519); ?>">Support</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo get_permalink(19); ?>">Blog</a></li>
                    </ul>
                </div>
                <div class="g-col offset_default">
                    <div class="main one-third">
                        <div class="blog-listing">
                        	<?php 
                        		if(have_posts()): while(have_posts()): the_post(); 
                        			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                    $text = get_the_excerpt();
                                    $text = preg_replace('#\[vc_row\](.*?)\[vc_column_text\]#ims', '', $text);
                        	?>
                            <div class="card card-with-image item" data-aos="fade-up">
                                <div class="card-body">
                                    <div class="card-image" style="max-height: 160px; background-image: url(<?php echo $thumb[0]; ?>); background-size: cover; background-repeat: no-repeat; border-radius: 18px 18px 0 0;">
                                    </div>
                                    <div class="card-body-con">
                                        <span class="publish-date"><?php the_time('F d, Y'); ?></span>
                                        <h5 class="card-title two-ellipsis"><?php the_title(); ?></h5>
                                        <p class="card-discp block-ellipsis"><?php the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="text-link">Read More +</a>
                                    </div>    
                                </div>
                            </div>
                            <?php endwhile; endif; ?>
                        </div>

                        <ul class="pagination">
                            <?php wp_pagenavi(); ?>
                        </ul>
                    </div>

                    <?php include("includes/sidebar.php"); ?>
                </div>            
            </div>   
        </section>        
    </div> 

<?php
get_footer();
