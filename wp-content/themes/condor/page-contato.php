<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();
?> 
    <div class=""><img src="<?php echo get_template_directory_uri(); ?>/imgs/topo_contato.png"></img></div>
<br><br>
<div class="row">
  <div class="small-12 medium-12 large-6 columns">
    <h5>Preencha o formulário de contato</h5>
      <br>
        <!--   <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="contact-form" class="form-horizontal" role="form" method="post">
            <div class="form-group">
              <label for="name" class="col-lg-2 control-label">Nome</label>
              <div class="col-lg-10">
                 <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Nome" required>
              </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                  <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group">
                <label for="tel" class="col-lg-2 control-label">Telefone</label>
                <div class="col-lg-10">
                    <input type="tel" class="form-control" id="form-tel" name="form-tel" placeholder="Telefone">
                </div>
            </div>
            <div class="form-group">
                <label for="assunto" class="col-lg-2 control-label">Assunto</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-assunto" name="form-assunto" placeholder="Assunto" required>
                </div>
            </div>
            <div class="form-group">
                <label for="mensagem" class="col-lg-2 control-label">Mensagem</label>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="3" id="form-mensagem" name="form-mensagem" placeholder="Mensagem" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default button">Enviar</button>
                </div>
            </div>
        </form> -->
         <?php 
        while (have_posts()) {
          the_post();
        ?>
         
          <?php the_content(); ?>

          <?php
        } //endwhile;
        ?> 
  </div>


  <div class="small-12 medium-12 large-6 columns hide-for-small-only">
    <h5>Telefones</h5>
    <div class="ahref"><i class="fa fa-phone"></i>&nbsp;11  2901-3004<br><i class="fa fa-whatsapp"></i>&nbsp;11 9.4032-7465</div>
    <br>

    <h5>E-mail</h5>
    <div class="row">
      <div class="small-12 medium-12 large-6 columns txt_emails"><i class="fa fa-envelope-o">
      <a href="#" class="ahref">contato@condorassessoria.com.br</a></i>
    </div>
    </div>

    <br>
    <div class="google-maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.560655795816!2d-46.567071585560235!3d-23.476307084725214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef5900306317b%3A0xb5cb7812e0ebb31!2sR.+Liliental%2C+572+-+Parque+Edu+Chaves%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1495126602362" width="560" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>

<br>
<br>

<?php //get_sidebar('right'); ?> 
<?php get_footer(); ?> 