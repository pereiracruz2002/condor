<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>
<br />
<br />

  <?php
      global $wp_query;
      $args = array_merge( array( 'post_type' => 'novidades' ) );
      query_posts( $args );
      $i = 0;
      ?>
      <?php while ( have_posts() ) : the_post();?>
      <?php $banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>
      <?php if($i==0){?>
      <div class="row">
      <?php }?>
          <div class="large-2 columns"> <img src="<?php echo $banner[0];?>" class="" alt=""></div>
          <div class="large-4 columns txt_blog">
               <?php the_content(); ?>
              <span class="bt_saiba"><a href="<?php the_permalink();?>">saiba mais</a></span>
          </div>

             
        
        <?php if($i==1){?>

      </div>
      <br>
      <br>
      <?php }?>
       <?php
          $i++;
          endwhile;
          if($i==2){
            $i=0;
          }
          // Reset Query
          wp_reset_query();
        ?>


<div class="fundo_rodape">

  <div class="row">

  <div class="large-4 columns">
    <h4 class="tit_rodape_endereco">Endereço<hr></h4>
        <div class="txt_rodape_endereco">
          <i class="fa fa-map-marker"></i>
          Rua Liliental 572 , conjunto 7<br>
          Parque Edu Chaves<br>
          CEP: 02231-000<br>
          São Paulo / SP<br>
        </div>

  </div>

  <div class="large-4 columns">
    <h4 class="tit_rodape_info">+ Info<hr></h4>
        <div class="txt_rodape_endereco">
          <i class="fa fa-envelope-o"></i>
          contato@condorassessoria.com.br
          <br>
          CENTRAL DE ATENDIMENTO:<br> +55 11 2901-3004 | 9.4032-7465
        </div>

  </div>

  <div class="large-4 columns">
    <h4 class="tit_rodape_face">Facebook<hr></h4>
    <div class="fb-page" data-href="https://www.facebook.com/Condor-Assessoria-Empresarial-Cont%C3%A1bil-1006161822836078/" data-tabs="timeline" data-width="300" data-height="150" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Condor-Assessoria-Empresarial-Cont%C3%A1bil-1006161822836078/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Condor-Assessoria-Empresarial-Cont%C3%A1bil-1006161822836078/">Condor Assessoria Empresarial Contábil</a></blockquote></div>
    </div>
  </div>
<div class="linha_branca"></div>
<div class="txt_rodape_direitos">Condor Assessoria Contábil, Jurídica & Tributária - Todos os direitos reservados</div><br>
<div class="aizu"><img src="<?php echo get_template_directory_uri(); ?>/imgs/logo_aizu.png"></img></div>
<br>

</div>


    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/what-input.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

  </body>
</html>