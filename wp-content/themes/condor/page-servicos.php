<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();
?> 
<div class=""><img src="<?php echo get_template_directory_uri(); ?>/imgs/topo_servicos.png"></img></div>
<br><br>


<div class="row">
  <div class="large-12 columns txt_pag_interno">
    Confira os serviços que disponibilizamos para você.
  </div>
</div>


<div class="row">

  <div class="small-12 medium-12 large-12 columns">
    <div class="main">
        <ul id="cbp-ntaccordion" class="cbp-ntaccordion">

           <li>
             <h3 class="cbp-nttrigger">Serviços executados na Prefeitura</h3>

             <div class="cbp-ntcontent">
               <p>
                 - Constituição, Alteração, Regularização e Baixa de CCM<br>
                 - Licença de Funcionamento<br>
                 - Cadan (Cadastro de Anuncio)<br>
                 - Defesas e Recursos em Multas, Auto de Infrações (AIM)<br>
                 - Revisão de IPTU e do ISS de obras e Construções em geral<br>
                 - Suspensão da exigibilidade do credito tributário
               </p>
             </div>
           </li>

           <li>
             <h3 class="cbp-nttrigger">Serviços Executados na Receita Federal do Brasil</h3>
             <div class="cbp-ntcontent">
               <p>
                 - Inscrição, alteração e baixa no CNPJ<br>
                 - Regularização do Quadro Societário<br>
                 - CND (positiva com efeito negativo)<br>
                 - Parcelamentos Especiais<br>
                 - Suspensão da exigibilidade do crédito tributário<br>
                 - Enquadramento Simples Nacional<br>
                 - Impugnações de Autos de Infrações e Multas (AIM)<br>
                 - Recuperação de impostos recolhidos indevidamente.<br>
                 - Licença para importação Simples e Normal<br>
                 - Planejamento Tributário<br>
                 - Regularização de Contabilidade em atraso.<br>
                 - Redarf, Perdcomp, DCTF, DIPJ e DIPF<br>
                 - Posição fiscal RFB/INSS

               </p>
             </div>
           </li>

           <li>
             <h3 class="cbp-nttrigger">Serviços Executados na Receita Estadual</h3>
             <div class="cbp-ntcontent">
               <p>
                 - Inscrição, alteração baixa de I.E.<br>
                  - Cassada, Inapta, Nula e Suspensa<br>
                  - Exclusão do ICMS na base de cálculo do PIS e da COFINS<br>
                  - Planejamento Tributário<br>
                  - Recursos e Impugnação de Auto de Infração e Multa (AIM)<br>
                  - Regularização de escrituração livros fiscais em atraso
               </p>
             </div>
           </li>
    </ul>
  </div>
</div>
</div>

<?php //get_sidebar('right'); ?> 
<?php get_footer(); ?> 