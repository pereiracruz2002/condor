<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();
?> 
<div class=""><img src="<?php echo get_template_directory_uri(); ?>/imgs/topo_empresa.png"></img></div>
<br><br>
    <div class="row">
      <div class="large-8 columns">
        <h2 class="tit_empresa">Sobre a <span class="txt_laranja">CONDOR ASSESSORIA</span></h2>
        <br>
        <?php 
        while (have_posts()) {
          the_post();
        ?>
          <div class="txt_empresa">
          <?php the_content(); ?>
          </div>
          <?php
        } //endwhile;
        ?> 
      </div>

      <div class="large-4 columns">
          <div class="fundo_cinza"><br>
            <span class="txt_area_atuacao">Áreas de atuação:<br><br></span>
            <span class="txt_quadro_atuacao">Serviços executados na Prefeitura [+] <br><br></span>
            <div class="linha_empresa"></div><br>
            <span class="txt_quadro_atuacao">Serviços Executados na Receita Federal do Brasil [+] <br><span class="txt_quadro_atuacao">
            <div class="linha_empresa"></div><br>
            <span class="txt_quadro_atuacao">Serviços Executados na Receita Estadual [+] <br> <span class="txt_quadro_atuacao">

          </div>

      </div>
      </div>

<div class="fx_preta"><br>

  <div class="row">
    <div class="large-5 columns">
      <div class="txt_fx_preta">Interessado em nossos serviços?<br>
            Entre em contato e faça uma parceria de sucesso!</div>
    </div>

    <div class="large-4 columns">
      <div class="tel_fx_preta">11 2901-3004 |  9.4032-7465</div>
    </div>

    <div class="large-3 columns">
      <div class="hora_fx_preta">seg a sexta<br>das 9:00h as 18:00h</div>
    </div>
  </div>
<br>
</div>

<?php //get_sidebar('right'); ?> 
<?php get_footer(); ?> 