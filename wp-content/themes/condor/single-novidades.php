<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
get_header();?>
<div class="row">

           
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" class="central">
					<h1><?php the_title(); ?></h1>
            <div class="info-post">
              <span class="data-post">Data da Publicação: <?php the_time('j \d\e F \d\e Y') ?></span>
              - <span class="categoria-post">Categoria: <a href="#">Novidades</a></span>
            </div>
            
            <div class="row" style="margin-top: 20px;">
              <div class="col-md-12">
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>
                <img src="<?php echo $image[0]; ?>"  title="<?php the_title(); ?>" class="img-responsive flutuar-img"/>
					       <?php the_content(); ?>
              </div>
            </div>
</div>
 
<?php endwhile; ?>

<?php get_footer(); ?>
