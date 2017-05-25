<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();
?> 
<div class=""><img src="<?php echo get_template_directory_uri(); ?>/imgs/topo_parceiros.png"></img></div>
<br><br>

    <div class="row">
      <div class="large-8 columns">
          <div class="txt_parceiro">
            Conheça alguns de nossos parceiros:<br>
            Nossa empresa sempre teve um objetivo muito claro, que é oferecer aos
            nossos clientes soluções para agilizar e tornar profissional seus serviços.<br>
            Por isso contamos com parceiros que mantêm o mesmo método de trabalho de nossa empresa.
          </div>
      </div>
      <div class="large-4 columns"><img src="<?php echo get_template_directory_uri(); ?>/imgs/pic_parceiro.jpg"></img></div>
</div>
<br>
<br>
<div class="row">
      <div class="small-12 meidum-12 large-6 columns txt_perceiros_int">
        <h4><strong>SigaConsult</strong></h4>
        Software de Gestão | E-commerce | CRM<br>
      <i class="fa fa-phone"></i>&nbsp; Mobile: (11) 3978-9339 <br>
      <i class="fa fa-whatsapp"></i>&nbsp;WhastApp: (11) 9.9638-4994<br>
      <i class="fa fa-desktop"></i>&nbsp; www.sigaconsult.com.br<br>
      <i class="fa fa-envelope"></i>&nbsp;E-mail: nar@sigaconsult.com.br
     </div>

     <div class="small-12 meidum-12 large-6 columns txt_perceiros_int">
        <h4><strong>Aizu Consultoria Digital</strong></h4>
          Sua agência de projetos digitais com soluções criativas.<br>
      <i class="fa fa-phone"></i>&nbsp; Mobile: (11) 96069-1450<br>
      <i class="fa fa-whatsapp"></i>&nbsp;WhastApp: (16) 99795-6858<br>
      <i class="fa fa-desktop"></i>&nbsp; www.aizuconsultoria.com.br<br>
      <i class="fa fa-envelope"></i>&nbsp;contato@aizuconsultoria.com.br
      </div>
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