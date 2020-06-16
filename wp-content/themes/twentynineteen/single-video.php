<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<?php 
    $term_id = "";
	if(have_posts()): while(have_posts()): the_post(); 
        $thumb = get_post_meta($post->ID, '_mag_video_thumbnail', true);
        $video_id = get_post_meta($post->ID, '_mag_video_id', true);
        $service = get_post_meta($post->ID, '_mag_video_service', true);
        if ($service == 'vimeo') {
            $video = 'https://player.vimeo.com/video/' . $video_id . '?title=0&amp;byline=0&amp;portrait=0';
        } elseif ($service == 'youtube') {
            $video = 'https://www.youtube.com/embed/' . $video_id . '?rel=0';
        }
	endwhile; endif;
?>

    <div class="container casestudiesPg casestudiesdtlPg"> 
        <section id="tutorials" class="l-section sec-pad pad-top0">
            <div class="l-section-wrap">
                <div class="breadcrumb">
                    <ul>
                        <li class="breadcrumb-item"><a href="<?php echo get_permalink(29200); ?>">mag+</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo get_permalink(31519); ?>">Support</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo get_permalink(31525); ?>">Case Studies</a></li>
                        <li class="breadcrumb-item"><?php the_title(); ?></li>
                    </ul>
                </div>
                <div class="g-col offset_default">
                    <div class="main one-third">
                        <article class="type-post">
                            <header class="entry-header">
                                <div class="post-meta h-entry"> 
                                    <?php 
                                        $categoryObj = get_the_terms($post->ID, 'video_cat');
                                        foreach($categoryObj as $categoryKey => $category){
                                            $term_id = $category->term_taxonomy_id;
                                    ?>
                                        <a href="" class="category-name"><?php echo $category->name; ?></a>
                                    <?php
                                        }
                                    ?>
                                    <span class="publish-details">
                                        <time class="dt-published" datetime="19-09-12"><?php the_time('F d, Y'); ?></time>, by <span class="author vcard h-card p-author"><?php the_author(); ?>, </span> 
                                    </span>
                                </div> 
                                <h1 class="entry-title"><?php the_title(); ?></h1> 
                            </header>

                            <div class="entry-content">
                                <p><?php the_content(); ?></p>
                                <div>
                                    <div class="item">
                                        <a href="<?php echo $video; ?>" data-fancybox title="">
                                            <!-- <span class="card-img-top img-fluid" style="display: block;"></span> -->
                                            <img src="<?php echo $thumb; ?>" alt="" class="card-img-top img-fluid"/>
                                            <span class="video-play-btn"></span>
                                            <span class="play-text">Watch Tutorial</span>
                                        </a>
                                    </div>    
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="sidebar post-sidebar one-cal">
                        <div class="sidebar-section-listing">
                            <h3 class="sec-title">Categories</h3>
                            <ul class="sidebar-listing">
                                <?php 
                                    $categories = get_terms([
                                        'taxonomy' => 'video_cat',
                                    ]);
                                    foreach($categories as $categoryKey => $category){
                                    $link = get_category_link($category->term_id);

                                ?>
                                    <li><a href="<?php echo $link; ?>"><?php echo $category->name ?><span class="count"> (<?php echo $category->count ?>)</span></a></li>
                                <?php } ?>
                            </ul>
                        </div>                                             
                        <div class="sidebar-section-listing">
                            <h3 class="sec-title">Latest Post</h3>
                            <?php
                                $args = array(
                                    'post_type' => 'video',
                                    'post_status' => 'publish',
                                    'orderby' => 'publish_date',
                                    'order' => 'DESC',
                                    'posts_per_page' => 4,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'video_cat',
                                            'field' => 'id',
                                            'terms' => array($term_id)
                                        )
                                    )
                                );
                                $the_query = new WP_Query( $args );

                            ?>
                            <ul class="sidebar-listing">
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                                <?php endwhile; ?>
                            </ul>
                        </div>                                             
                        <div class="sidebar-section-listing">
                            <h3 class="sec-title">Tags</h3>
                            <ul class="sidebar-listing tags-listing">
                                <li class="tag-link"><a href="" title="">Marketing</a></li>
                                <li class="tag-link"><a href="" title="">logo</a></li>
                                <li class="tag-link"><a href="" title="">Cars</a></li>
                                <li class="tag-link"><a href="" title="">design</a></li>
                                <li class="tag-link"><a href="" title="">A4</a></li>
                                <li class="tag-link"><a href="" title="">Apps</a></li>
                                <li class="tag-link"><a href="" title="">print</a></li>
                            </ul>
                        </div>  
                        <div class="sidebar-section-listing">
                            <h3 class="sec-title">Share</h3>
                            <?php echo do_shortcode("[do_widget id=a2a_share_save_widget-2]"); ?>
                        </div> 
                        <div class="sidebar-section-listing">
                            <?php echo do_shortcode("[do_widget id=wp_subscribe-2]"); ?>
                        </div>                                             
                    </div>
                </div>            
            </div>   
        </section>

        <section class="l-section fiveCol-slider sec-pad pad-top0">
            <div class="l-section-wrap">
                <div class="sec-holder">
                    <h3>More Case Studies</h3>     
                    <div class="slider-container">
                        <div class="nonloop owl-carousel col-carousel out-of-nav five-col-carousel"> 
                            <?php
                                $args = array(
                                    'post_type' => 'video',
                                    'post_status' => 'publish',
                                    'orderby' => 'publish_date',
                                    'order' => 'DESC',
                                    'posts_per_page' => 7
                                );
                                $the_query = new WP_Query( $args );
                                while ( $the_query->have_posts() ) : $the_query->the_post();
                                $thumb = get_post_meta($post->ID, '_mag_video_thumbnail', true);
                                $text = get_the_excerpt();
                                $text = preg_replace('#\[vc_row\](.*?)\[vc_column_text\]#ims', '', $text);
                            ?>
                                <div class="card card-with-image item">
                                    <div class="card-body">
                                        <div class="card-image" style="max-height: 260px; background-image: url(<?php echo $thumb; ?>); background-size: cover; background-repeat: no-repeat; border-radius: 18px 18px 0 0;">
                                        </div>
                                        <div class="card-body-con">
                                            <span class="publish-date"><?php the_time('F d, Y'); ?> </span>
                                            <h5 class="card-title two-ellipsis"><?php the_title(); ?></h5>
                                            <p class="card-discp block-ellipsis"><?php the_excerpt(); ?></p>
                                            <a href="<?php the_permalink(); ?>" class="text-link">Read More +</a>
                                        </div>    
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div> 
                        <div class="slider-counter">1/5</div>
                    </div>                                                             
                </div>    
            </div>    
        </section>
    </div>	

<?php
get_footer();
