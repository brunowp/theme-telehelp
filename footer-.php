<?php 

global $detect;

if( $detect->isMobile() && !$detect->isTablet() ){
  get_template_part('footermobile');
}else{

?>


       <footer id="footer">
            <div class="footer-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-2">
                            <h2>Como Funciona</h2>
                            <ul class="discover triangle hover ">
































<?php $defaultss = array(
  'theme_location'  => 'como_funciona_rodape',
  'menu'            => '',
  'container'       => '',
  'container_class' => '',
  'container_id'    => '',
  'menu_class'      => 'menu',
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '%3$s',
  'depth'           => 0,
  'walker'          => ''
);

wp_nav_menu( $defaultss );

?>
                            </ul>
                        </div>
                        
                        <div class="col-sm-6 col-md-2">
                            <h2>Serviços</h2>
                            <ul class="discover triangle hover ">


<?php $defaultsss = array(
  'theme_location'  => 'servicos_rodape',
  'menu'            => '',
  'container'       => '',
  'container_class' => '',
  'container_id'    => '',
  'menu_class'      => 'menu',
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '%3$s',
  'depth'           => 0,
  'walker'          => ''
);

wp_nav_menu( $defaultsss );

?>

                            </ul>
                        </div>
                        
                       <div class="col-sm-6 col-md-2">
                            <h2>Sobre nós</h2>
                             <ul class="discover triangle hover ">
<?php $defaultss = array(
  'theme_location'  => 'sobre_nos_rodape',
  'menu'            => '',
  'container'       => '',
  'container_class' => '',
  'container_id'    => '',
  'menu_class'      => 'menu',
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '%3$s',
  'depth'           => 0,
  'walker'          => ''
);

wp_nav_menu( $defaultss );




?>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <h2>Blog Atividade</h2>
              <ul class="discover triangle hover ">
<?php $defaultss = array(
  'theme_location'  => 'blog_rodape',
  'menu'            => '',
  'container'       => '',
  'container_class' => '',
  'container_id'    => '',
  'menu_class'      => 'menu',
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '%3$s',
  'depth'           => 0,
  'walker'          => ''
);

wp_nav_menu( $defaultss );




?>
                            </ul>
                        </div>
                        
                        
                        <div class="col-sm-6 col-md-2" id="contatofooter">
                            <h2>Contato</h2>
                            <ul class="discover triangle hover ">
                                <li id="t0800"><i class="fa fa-phone"></i><strong>0800 014 2001</strong></li>
                                <li id="t011"><i class="fa fa-phone"></i><strong>11 3585-2000</strong></li>
                                <li class="lihover"><a href="<?php echo site_url()?>/central-de-vendas">Central de Vendas</a></li>
                                <li class="lihover"><a href="<?php echo site_url()?>/atendimento-a-clientes">Atendimento ao Cliente</a></li>
                                <li class="lihover"><a href="<?php echo site_url()?>/oportunidades-de-trabalho">Trabalhe na TeleHelp</a></li>
                                <li class="lihover"><a href="http://sistema.telehelp.com.br/login.aspx" target="_blank">Representantes TeleHelp</a></li>
                                

                            </ul>
                            
                            <div id="logogooteredireitos">
                                <a href="http://www.telehelp.com.br" >
                              <img src="<?php echo get_template_directory_uri (); ?>/images/logo-tele.png" alt="telehelp">
                                </a>
                                <br>
                                <span>©TeleHelp . Todos os direitos reservados.</span>
                            </div>
                        </div>
                    </div>
                    
                    <div id="redescosiais">
                      <div id="redescosiaismeio">
                            <h2>Redes sociais</h2>
                            <li><a href="https://www.facebook.com/TelehelpOficial" target="_blank"><img src="<?php echo get_template_directory_uri (); ?>/images/facebook.png" alt="facebook"></a></li>
                            <li><a href="https://www.youtube.com/user/telehelpbrasil" target="_blank"><img src="<?php echo get_template_directory_uri (); ?>/images/youtube.png" alt="Youtube"></a></li>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="footer-wrapper">
              <div class="container">
                <p>* Alguns serviços ou funcionalidades podem não estar disponíveis em sua região ou dependem da condição de sua linha telefônica.</p>
              </div>
            </div>
        </footer>
    </div>
    <div class="pull-right">
    <a id="back-to-top" href="#" class="animated" data-animation-type="bounce"><i class="soap-icon-longarrow-up circle"></i></a>
  </div>
    
  <?php wp_footer(); ?>
<div id="barrafootermaster" style="display:none">
  <div id="barrafootermastermeio">
      <li>Precisando de ajuda ? <img src="<?php echo get_template_directory_uri (); ?>/images/tel-faixafooter.jpg" alt="telefone" /> Ligue agora: <strong>0800 014 2001</strong></li>
       <li class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalchatonline"><img src="<?php echo get_template_directory_uri (); ?>/images/icone-footer-assistente.png?v=10" alt="atendimento-online" />Assistente virtual</li>
       
       
      <li id="modal_agenda_visita" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalagendavisita"><img src="<?php echo get_template_directory_uri (); ?>/images/icone-footer-dois.png" alt="agende-visitas" />Agende uma<br/>Visita</li>
        
        
        
       <li  id="modal_enviar_email" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalenvieemail"><img src="<?php echo get_template_directory_uri (); ?>/images/icone-footer-tres.png" alt="envie-email" />Enviar um<br/>e-mail</li>
       
       
       
       <li  class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalenviawhatsapp"><img src="<?php echo get_template_directory_uri (); ?>/images/icone-footer-quatro.png" alt="whatsapp" />Atendimento<br/>por Whatsapp</li>
       
    
    </div>
  
</div>

<!-- MODAL CHAT ONLINE -->
<div id="modalchatonline" class="modal fade modalfooter" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <img src="<?php echo get_template_directory_uri (); ?>/images/icone-footer-um.png" alt="chat-online" /> <h4 class="modal-title">Bem-vindo ao Chat</h4>
      </div>
      <div class="modal-body">
          <iframe width="100%" height="300px" src="http://app1.xgen.com.br/telehelp/form_chat_cliente.html"></iframe>
      </div>
    </div>

  </div>
</div>





<!-- MODAL ENVIA VISITA -->
<div id="modalagendavisita" class="modal fade modalfooter" role="dialog">
  <div class="modal-dialog">


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <img src="<?php echo get_template_directory_uri (); ?>/images/icone-footer-dois.png" alt="envia-visita" /> <h4 class="modal-title">Agende uma Visita</h4>
      </div>
      <div class="modal-body">
       <div class="login-social">
                    <a href="#" onclick="modalsface('loginBtnagd','agd')" class="button login-facebook"><i class="soap-icon-facebook"></i>Acesse Com <strong>Facebook</strong></a>
        </div>
        
       
       
       <form method="post" id="agdcentral-vendas" action="javascript:void(0)" >
<input type="hidden" name="pagina" value="agdrodape">
<input type="hidden" name="horagenda" id="horagenda" value="">
<input type="hidden" name="acao" value="form-site">
<input type="hidden" name="url" value="<?php echo site_url()?>">
<input type="hidden" name="login" id="agdplogin" value="email">
                        <div class="form-group">
                          <label>Seu Nome:</label>
                            <input type="text" class="input-text full-width" id="agdnome" onkeypress="return sem_acento(event);" name="nome" placeholder="Digite seu Nome" required="">
                        </div>
                        <div class="form-group">
                        <label>Seu E-mail:</label>
                            <input type="text" class="input-text full-width" id="agdemail" name="email" placeholder="Digite seu E-mail" required="">
                        </div>

                        <div class="form-group">
                        <label>Seu Telefone:</label>
                            <input type="text" class="input-text full-width telefone" id="agdtelefone" name="telefone"  maxlength="12" placeholder="( ) ____-____" required="">
                        </div>
                        
                         <div class="form-group">
                         
                         <li>
                         <label>Data da Visita</label>
             <input type="date" class="input-text full-width hasDatepicker" id="agddata" name="agddata" placeholder="dd/mm/aaaa">
                         </li>
                         
                         <li>
                         <label>Horário da Visita</label>
                         <div class="selector">
                                                    <select name="horaagenda" >
                                                    <option value="">Selecione</option>
                                                       <option value="">07:00</option>
                                                        
                                                        <option value="">08:00</option>
                                                        
                                                        <option value="">09:00</option>
                                                        
                                                        <option value="">10:00</option>
                                                        
                                                        <option value="">11:00</option>
                                                        
                                                        <option value="">13:00</option>
                                                        
                                                        <option value="">14:00</option>
                                                        
                                                        <option value="">15:00</option>
                                                        
                                                        <option value="">16:00</option>
                                                        
                                                        <option value="">17:00</option>
                                                        
                                                        <option value="">18:00</option>
                                                        
                                                       
                                                    </select><span id="agdhora" class="custom-select">Selecione</span>
                                                </div>
                         </li>
                         
                         </div>
                        
                        <div style="float:left;" class="form-group">
                            <div class="checkbox">
                                
                                    <input name="news" type="checkbox"> Gostaria de receber novidades sobre a Telehelp.
                                
                            </div>
                        </div>
                        
                        
                        <div id="agdbotcentral">
            <button  onclick="send_ce(event,40,'agd')" style="margin-top: 15px;" type="button" class="full-width btn-medium">AGENDAR ></button>
                         </div>
                    </form>

      </div>

    </div>

  </div>
</div>

<div id="modal_envia_email" class="modal fade Modal-Login" role="dialog">
<div class="vertical-alignment-helper">
<div class="modal-dialog vertical-align-center">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
    <button type="button" class="pull-right" data-dismiss="modal">X</button>
        <h4 class="modal-title">Envie um email</h4>
      </div>
      <div class="modal-body">
<img src="<?php echo get_template_directory_uri (); ?>/images/sucesso-senha.png" alt="Sucesso" />
<h2>Recebemos seu dados<br />com sucesso.</h2>
<h4>Em breve entraremos em contato.</h4>
      </div>
    </div>
  </div>
</div>
</div>

<div id="modal_envia_agenda" class="modal fade Modal-Login abrirmodalsenhacomsucesso" role="dialog">
<div class="vertical-alignment-helper">
<div class="modal-dialog vertical-align-center">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
    <button type="button" class="pull-right" data-dismiss="modal">X</button>
        <h4 class="modal-title">Agendamento</h4>
      </div>
      <div class="modal-body">
<img src="<?php echo get_template_directory_uri (); ?>/images/sucesso-senha.png" alt="Sucesso"  />
<h2>Recebemos sua solicitação<br />com sucesso.</h2>
<h4>Em breve entraremos em contato.</h4>
      </div>
    </div>
  </div>
</div>
</div>

<div id="cupom-sucesso" class="modal fade Modal-Login abrirmodalsenhacomsucesso" role="dialog">
<div class="vertical-alignment-helper">
<div class="modal-dialog vertical-align-center">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
    <button type="button" class="pull-right" data-dismiss="modal">X</button>
        <h4 class="modal-title">Vale Presente / Cupom</h4>
      </div>
      <div class="modal-body">
<img src="<?php echo get_template_directory_uri (); ?>/images/sucesso-senha.png" alt="Sucesso" />
<h2>Desconto incluído<br />com sucesso.</h2>
<h4>Seu desconto foi aplicado.</h4>
      </div>
    </div>
  </div>
</div>
</div>

<div id="cupom-sucesso-retirado" class="modal fade Modal-Login abrirmodalsenhacomsucesso" role="dialog">
<div class="vertical-alignment-helper">
<div class="modal-dialog vertical-align-center">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
    <button type="button" class="pull-right" data-dismiss="modal">X</button>
        <h4 class="modal-title">Vale Presente / Cupom</h4>
      </div>
      <div class="modal-body">
<img src="<?php echo get_template_directory_uri (); ?>/images/sucesso-senha.png" alt="Sucesso" />
<h2>Desconto excluído<br />com sucesso.</h2>
<h4>Seu desconto foi retirado.</h4>
      </div>
    </div>
  </div>
</div>
</div>


<div id="modal_envia_depo" class="modal fade Modal-Login" role="dialog">
<div class="vertical-alignment-helper">
<div class="modal-dialog vertical-align-center">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
    <button type="button" class="pull-right" data-dismiss="modal">X</button>
        <h4 class="modal-title">Depoimentos</h4>
      </div>
      <div class="modal-body">
<img src="<?php echo get_template_directory_uri (); ?>/images/sucesso-senha.png" alt="Sucesso"  />
<h2 style="color:#fff">Recebemos seu depoimento<br />com sucesso.</h2>
<h4>Muito Obrigado.</h4>
      </div>
    </div>
  </div>
</div>
</div>


<div id="modal-login-sucesso" class="modal fade Modal-Login abrirmodalsenhacomsucesso" role="dialog">
<div class="vertical-alignment-helper">
<div class="modal-dialog vertical-align-center">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
    <button type="button" class="pull-right" data-dismiss="modal">X</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <img src="<?php echo get_template_directory_uri (); ?>/images/sucesso-senha.png" alt="Sucesso" />
        <h2>Login Efetuado com sucesso!</h2>
      </div>
    </div>
</div>
</div>
</div>

<div id="modal-cadastro-sucesso" class="modal fade Modal-Login abrirmodalsenhacomsucesso" role="dialog">
<div class="vertical-alignment-helper">
<div class="modal-dialog vertical-align-center">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
    <button type="button" class="pull-right" data-dismiss="modal">X</button>
        <h4 class="modal-title">Cadastro</h4>
      </div>
      <div class="modal-body">
        <img src="<?php echo get_template_directory_uri (); ?>/images/sucesso-senha.png" alt="Sucesso" />
        <h2>Cadastro Efetuado com sucesso!</h2>
      </div>
    </div>
</div>
</div>
</div>
 
<div id="abrirmodalsenhacomsucesso" class="modal fade Modal-Login abrirmodalsenhacomsucesso" role="dialog">
<div class="vertical-alignment-helper">
<div class="modal-dialog vertical-align-center">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
    <button type="button" class="pull-right" data-dismiss="modal">X</button>
        <h4 class="modal-title">Esqueci Minha Senha</h4>
      </div>
      <div class="modal-body">
<img src="<?php echo get_template_directory_uri (); ?>/images/sucesso-senha.png" alt="Sucesso"  />
<h2>A senha foi enviada para <br />
o seu e-mail</h2>
      </div>
    </div>
  </div>
</div>
</div>

<!-- MODAL ENVIA E-MAIL -->
<div id="modalenvieemail" class="modal fade modalfooter" role="dialog">
  <div class="modal-dialog">


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <img src="<?php echo get_template_directory_uri (); ?>/images/icone-footer-tres.png" alt="envie-email" /> <h4 class="modal-title">Envie um e-mail</h4>
      </div>
      <div class="modal-body">
       <div class="login-social">
                    <a href="#" onclick="modalsface('loginBtnmee','mee')" class="button login-facebook"><i class="soap-icon-facebook"></i>Acesse Com <strong>Facebook</strong></a>
        </div>
        
       
       
<form method="post" id="meecentral-vendas" action="javascript:void(0)" >
<input type="hidden" name="pagina" value="meerodape">
<input type="hidden" name="acao" value="form-site">
<input type="hidden" name="url" value="<?php echo site_url()?>">
<input type="hidden" name="login" id="meetplogin" value="email">
    <div class="form-group">
      <label>Seu Nome:</label>
                            <input type="text" class="input-text full-width" name="nome" onkeypress="return sem_acento(event);" id="meenome" placeholder="Digite seu Nome" required="">
                        </div>
                        <div class="form-group">
                        <label>Seu E-mail:</label>
                            <input type="text" class="input-text full-width" name="email" id="meeemail" placeholder="Digite seu E-mail" required="">
                        </div>

                        
                        <div class="form-group">
                            <label>Seu Mensagem:</label>
                            <textarea type="text" class="input-text full-width" name="txtarea" id="meetxtarea" placeholder="Digite sua mensagem" required=""></textarea>
                        </div>
                        
                        <div class="form-group">
                            <div class="checkbox">
                                
                                    <input name="news" type="checkbox"> Gostaria de receber novidades sobre a Telehelp.
                                
                            </div>
                        </div>
            
            <div id="meebotcentral">
            <button style="margin-top: 15px;" type="button" onclick="send_ce(event,5,'mee');" class="full-width btn-medium">ENVIAR MENSAGEM ></button>
                        </div>
                        
                    </form>

      </div>

    </div>

  </div>
</div>



<!-- MODAL ENVIA WHATSAPP -->
<div id="modalenviawhatsapp" class="modal fade modalfooter" role="dialog">
  <div class="modal-dialog">


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <img src="<?php echo get_template_directory_uri (); ?>/images/icone-footer-quatro.png" alt="envie-whatsapp" /> <h4 class="modal-title">Whatsapp</h4>
      </div>
      <div class="modal-body">
       <div class="login-social">
      <a href="#" onclick="modalsface('loginBtnzap','zap')" class="button login-facebook"><i class="soap-icon-facebook"></i>Acesse Com <strong>Facebook</strong></a>
        </div>
        
       
       
<form method="post" id="zapcentral-vendas" action="javascript:void(0)" >
<input type="hidden" name="pagina" value="zaprodape">
<input type="hidden" name="acao" value="form-site">
<input type="hidden" name="url" value="<?php echo site_url()?>">
<input type="hidden" name="login" id="zaptplogin" value="email">
                        
            <div class="form-group">
            <label>Seu Nome:</label>
                            <input type="text" class="input-text full-width" name="nome" onkeypress="return sem_acento(event);" id="zapnome" placeholder="Digite seu Nome" required="">
                        </div>
            
                        <div class="form-group">
                        <label>Seu E-mail:</label>
                            <input type="text" class="input-text full-width" name="email" id="zapemail" placeholder="Digite seu E-mail" required="">
                        </div>

                        <div class="form-group">
                        <label>Seu Telefone:</label>
              <input type="text" class="input-text telefone full-width" name="telefone" id="zaptelefone" placeholder="( ) ____-____"  required="">
                        </div>
                        
                        
                       <div class="form-group">
                            <div class="checkbox">
                                
                                    <input name="news" type="checkbox"> Gostaria de receber novidades sobre a Telehelp.
                                
                            </div>
                        </div>
                        
                        <div id="zapbotcentral">
            <button style="margin-top: 15px;" type="button" onclick="send_ce(event,7,'zap');" class="full-width btn-medium">ENVIAR MENSAGEM ></button>
                        </div>
                    </form>
                    
                    <div id="avisowhatsapp">
                    Nosso horário de atendimento através do WhatsApp é de segunta à sexta, das 9h às 18h.
                    </div>
  

      </div>

    </div>

  </div>
</div>
<script>  
  var urlplug = "<?php echo plugins_url(); ?>/telehelp/";
</script>  
   <!--<script src="<?php echo get_template_directory_uri (); ?>/js/jquery.nicescroll.min.js"></script>-->
   <script src="<?php echo get_template_directory_uri (); ?>/js/jquery.easing.min.js"></script>

 <script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}

jQuery(document).ready(function () {
    //jQuery("html").niceScroll();
});


  
function abriloginmobi() {
  
         jQuery("#ulloginmobile").stop().animate({ height:178  }, 400);

};

function abrimenumobile() {
  
         jQuery("#menumobile").stop().animate({ top:0,opacity:1  }, 200);
         document.getElementById("clicaabre").style.display = "none";
         document.getElementById("clicafecha").style.display = "block";


};

function fechamenumobile() {
  
         jQuery("#menumobile").stop().animate({ top:-570,opacity:0  }, 200);
         document.getElementById("clicaabre").style.display = "block";
         document.getElementById("clicafecha").style.display = "none";

};  
  
  
function abrecomofunciona() {
  
          <!--- Função que mostra os Data e hora --->
        document.getElementById("segundalinhacomofunciona").style.height = "auto";
        document.getElementById("segundalinhacomofunciona").style.opacity = "1";
        document.getElementById("aperteobotaomeio").style.display = "none";
        document.getElementById("aperteobotaomeio2").style.display = "block";


};


 function fechacomofunciona() {
  
          <!--- Função que mostra os Data e hora --->
        document.getElementById("segundalinhacomofunciona").style.height = "0";
        document.getElementById("segundalinhacomofunciona").style.opacity = "0";
        document.getElementById("aperteobotaomeio").style.display = "block";
        document.getElementById("aperteobotaomeio2").style.display = "none";
};




function mostrapuseiradesilicone() {
  
          <!--- Função que mostra os Data e hora --->
        document.getElementById("revocouro").style.left = "-2000px";
        document.getElementById("revosilicone").style.left = "0px";
        document.getElementById("lisilicone").style.border = "1px solid #e93457";
        document.getElementById("licouro").style.border = "1px solid #2a3866";


};


 function mostrapusseiradecouro() {
  
          <!--- Função que mostra os Data e hora --->
        document.getElementById("revocouro").style.left = "0px";
        document.getElementById("revosilicone").style.left = "-2000px";
        document.getElementById("lisilicone").style.border = "1px solid #2a3866";
        document.getElementById("licouro").style.border = "1px solid #e93457";
};
  
  
//jQuery("form").submit(function() {
   // console.log(jQuery(this).serializeArray());
    //return false;
//});

</script>
<script type="text/javascript">
jQuery(document).ready(function(){
   jQuery('#aperteobotao a').click(function(){
      var alvo = jQuery(this).attr('href').split('#').pop();
      jQuery('html, body').animate({scrollTop: jQuery('#'+alvo).offset().top }, 300);
      return false;
   });
    
});
</script>


<!-- Área de Cobertura -->
<div id="modalareadecobertura" class="modal fade modalfooter" role="dialog">
  <div class="modal-dialog">


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Área de Cobertura</h4>
      </div>
      <div class="modal-body">
      <div id="corpomodarea">
        <span>Os tempos listados abaixo são válidos para emergência; Estão expressos em minutos e são uma média podendo assim variar o tempo de acordo com a região.</span>
        <ul>
        <li>São Paulo</li>
        <li>Municípios</li>
        <li>Barueri</li>
        <li>Diadema</li>
        <li>Guarulhos</li>
        <li>Mauá</li>
        <li>Osasco</li>
        <li>Santana de Parnaíba</li>
        <li>Santo André</li>
        <li>São Bernado do Campo</li>
        <li>São Caitano do Sul</li>
        <li>São Paulo</li>
        </ul>
        
        <ul>
        <li>Rio de Janeiro</li>
        <li>Municípios</li>
        <li>Alcântara</li>
        <li>Duque de Caxias</li>
        <li>Nilópolis</li>
        <li>Niterói</li>
        <li>Nova Iguaçu </li>
        <li>Rio de Janeiro</li>
        <li>São Gonçalo</li>
        <li>São João do Meriti</li>

        </ul>
      <div id="clear"></div>
      </div>



      </div>

    </div>

  </div>
</div>

<?php

$newsArgss = array( 
    'post_type' => 'modais', 
    'showposts' => 1, 
    'tax_query' => array(
        array(
            'taxonomy' => 'cat_modal',
            'field'    => 'slug',
            'terms'    => 'termos',
            )
     ),        
    'order' => 'DESC');    
$newsLoops = new WP_Query( $newsArgss );  

while ( $newsLoops->have_posts() ) : $newsLoops->the_post(); 

?>

<!-- Termos de Uso -->
<div id="modaltermos" class="modal fade modalfooter" role="dialog">
  <div class="modal-dialog">


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title"><?php the_title() ?></h4>
      </div>
      <div class="modal-body">
      <div id="corpotermos"><?php the_content() ?></div>



      </div>

    </div>

  </div>
</div>

<?php endwhile; ?>


<?php

$newsArgss = array( 
    'post_type' => 'modais', 
    'showposts' => 1, 
    'tax_query' => array(
        array(
            'taxonomy' => 'cat_modal',
            'field'    => 'slug',
            'terms'    => 'cidades',
            )
     ),        
    'order' => 'DESC');    
$newsLoops = new WP_Query( $newsArgss );  

while ( $newsLoops->have_posts() ) : $newsLoops->the_post(); 

?>

<!-- Área de Cobertura -->
<div id="modalareadecobertura" class="modal fade modalfooter" role="dialog">
  <div class="modal-dialog">


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title"><?php the_title() ?></h4>
      </div>
      <div class="modal-body">
      <div id="corpomodarea">

      <div id="clear"></div>
      </div>

<?php the_content() ?>

      </div>

    </div>

  </div>
</div>

<?php endwhile; ?>

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 970338506;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/970338506/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

</body>
</html>

<?php } ?>