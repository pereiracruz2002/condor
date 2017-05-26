<?php
/**
* A Simple Category Template
*/

get_header(); ?> 
<div class="banner">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/banner.png"></img>
    </div>
<div class="row">
<section id="primary" class="site-content">
<div id="content" role="main">

<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>

<header class="archive-header">
<h1 class="archive-title">Category: <?php single_cat_title( '', false ); ?></h1>


<?php
// Display optional category description
 if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>
</header>

<?php

// The Loop
while ( have_posts() ) : the_post(); ?>
<?php $banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<img src="<?php echo $banner[0];?>" class="" alt="">
<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small> 

 <div class="entry">
<?php the_content(); ?>

</div> 
<!-- <div class="large-2 columns"> <img src="<?php echo $banner[0];?>" class="" alt=""></div>
          <div class="large-4 columns txt_blog">
               <?php the_content(); ?>
              <span class="bt_saiba"><a href="<?php the_permalink();?>">saiba mais</a></span>
          </div> -->

<?php endwhile; 

else: ?>
<p>Sorry, no posts matched your criteria.</p>


<?php endif; ?>
</div>
</section>

</div>

<?php get_footer(); ?>