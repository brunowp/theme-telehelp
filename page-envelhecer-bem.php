<?php
  $idpos_t = get_the_ID();
  get_header (); ?>


  <div id="corpopage">

	<div id="titulopagegeral">
    	<div id="titulopagegeralmeio">
        	<div style="float:left">
            <div id="caminhosdemigalhas">

            <?php

function the_breadcrumb() {

if (!is_home()) {

echo '<a href="';

echo get_option('home');

echo '">';

echo "Página Inicial";

echo "</a> » ";

if (is_category() || is_single()) {

the_category('title_li=');

if (is_single()) {

echo " » ";

the_title();

}

} elseif (is_page()) {

echo the_title();

}

}

}

 ?>



<?php if (have_posts()): the_post(); ?>
 <?php the_breadcrumb(); ?>

            </div>
            <div id="titulodapagina">

           <h1> <?php the_title(); ?></h1>
            </div>

            </div>

            <div id="subtitulopgaina">
            	Como preservar sua autonomia e independência?
            </div>

            <div style="clear:both"></div>
        </div>
    </div>



  	<div id="corpopagemeio" class="atendimentos-reias">
   <?php the_content(); ?>
 <?php endif; ?>

<div id="menuleft">
 <?php include(TEMPLATEPATH .'/menu-blog.php');  ?>
</div>

<div id="contedorigth">
	<div id="terceirotitulo">
    	<h2 class="title-default"><?php the_field('titulo',$idpos_t) ?></h2>
    </div>

<div id="conteudoenvelhecerbem">

	<div id="primeiralinhaenvelhecerbem">
    	<div id="textoprimeiralinhaenvelhecerbem">
 <?php
    $li_sta = explode("<br />",get_field('texto_sobre_imagem',$idpos_t));
    foreach($li_sta as $lt){
        if(rtrim($lt)<>""){
            echo '
            <p>
            '.$lt.'
            </p>';

        }
    }
    ?>


        </div>

    <img src="<?php the_field('imagem',$idpos_t) ?>" alt="banner-envelhecer-bem" title="banner-envelhecer-bem" />


    </div>

</div>

 <div id="textobannerprimeiralinhaenvelhecerbem">
 <?php the_field('texto_abaixo_imagem',$idpos_t) ?>
 </div>


 <div id="terceiralinhaenvelhecerbem">
 <div id="segundalinhablogeatividades">

<div class="row">
  <div class="col-md-6">
  	<h2></h2>

    <li>
    <span>guia</span>
    	<h3>Tudo<br />
Sobre<br />
Quedas
</h3>
    </li>

    <div>
    <?php the_field('texto_abaixo_box_esquerda',$idpos_t) ?>


    <a href="<?php echo site_url()?>/tudo-sobre-quedas/">Saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </div>
  </div>


  <div class="col-md-6">
    	<h2></h2>

    <li>
    <span>guia</span>
    	<h3>Morar<br />
 Sozinho
</h3>
    </li>
    <div>
<?php the_field('texto_abaixo_box_direita',$idpos_t) ?>

    <a href="<?php echo site_url()?>/guia-morar-sozinho/">Saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </div>

  </div>



</div>


</div>
 </div>


<div id="vejanossosplanos">

<div class="row">
  <div class="col-md-6">

  </div>
  <div class="col-md-6">
  	<h2>Contrate agora o TeleHelp Aviso</h2>
   <a href="<?php echo site_url()?>/telehelpaviso">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>

  </div>
</div>

</div>





<div id="clear"></div>
</div>





<div id="vejatabem">
	<h2>Veja também</h2>

<div class="row">


  <div class="col-md-6">

<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb12.png" alt="Serviços" /><br />
Serviços</li>
    <li>

    Confira os serviços oferecidos pela TeleHelp para a sua segurança dentro e fora de casa.

    <a href="<?php echo site_url()?>/servicos/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


  <div class="col-md-6">

    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb11.png" alt="Como-Funciona" /><br />
Como Funciona</li>
    <li>

  Entenda melhor como funcionam os serviços de teleassistência da TeleHelp e veja como conseguir ajuda imediata ao simples toque de um botão.

    <a href="<?php echo site_url()?>/como-funciona/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


</div>


</div>



<div id="clear"></div>



</div>

</div>



    <?php get_footer (); ?>
    <div id='sm-bounce' data-scope='email' style='display:none' ></div>