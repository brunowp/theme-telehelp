<?php 
  
  
function applynews($email = ""){
    
    
    if($email<>""){
        
        $rows = mysql_query("
		SELECT * from wp_posts WHERE post_type = 'newsletter' and 
        UPPER(post_title) = '".strtoupper($email)."'
        limit 1
		");
        
        if(mysql_num_rows($rows)==0){
                wp_insert_post(
                array(
                    'comment_status'  => 'closed',
                    'ping_status'   => 'closed',
                    'post_author'   => 1,
                    'post_title'    => $email,
                    'post_status'   => 'publish',
                    'post_type'   => 'newsletter'
                )
                );  
        }
  }
    
}
  
  $erro = 0;
  $mensagem = "";  
  
  if(isset($_POST['acao'])){
    
    if($_POST["nome"]==""){
        $erro = 1;
        $mensagem = ($mensagem == "" ? '<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigatório informar seu nome!</span>' : $mensagem );
    }
    
    if($_POST["email"]==""){
        $erro = 1;
        $mensagem = ($mensagem == "" ? '<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Informe um e-mail válido!</span>' : $mensagem );
    }
    
    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false){
        $erro = 1;
        $mensagem = ($mensagem == "" ? '<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Informe um e-mail válido!</span>' : $mensagem );
    }
    
    $telefone = $_POST["telefone"];
    $telefone = str_replace(array("(",")","-"," ")," ",$telefone);
    
    if(strlen($telefone)<10){
        $erro = 1;
        $mensagem = ($mensagem == "" ? '<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigatório Informar um telefone!</span>' : $mensagem );
    }    
    
	/*INCLUSÃO CAMPO ÁREA DESEJADA*/
	if($_POST["areadesejada"]==""){
		$erro = 1;
        $mensagem = ($mensagem == "" ? '<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigatório escolher a área desejada!</span>' : $mensagem );
	}
	/*INCLUSÃO CAMPO ÁREA DESEJADA*/
	
	
	
	/*EXCLUSÃO CAMPO MENSAGEM*/
    //if($_POST["txtarea"]==""){
        //$erro = 1;
        //$mensagem = ($mensagem == "" ? '<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigatório preencher sua mensagem!</span>' : $mensagem );
    //} 
	/*EXCLUSÃO CAMPO MENSAGEM*/

    
    /*
    UPLOAD ARQUIVO QUANDO HOUVER
    */
    
    $target_file = "";
    
    if (isset($_FILES['curriculo'])) {
        
        $uploadOk = 1;
        
        $extensoes = array('doc', 'docx', 'pdf', 'rtf');
        
        if ($_FILES["curriculo"]["size"] > (1024 * 1024 * 5)) {
            $erro = 1;
            $mensagem = ($mensagem == "" ? '<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Tamanho máximo do upload é 5Mb!</span>' : $mensagem );
            $uploadOk = 0;
        }
        
        $extensao = strtolower(end(explode('.', $_FILES['curriculo']['name'])));
        if (array_search($extensao, $extensoes) === false) {
            $erro = 1;
            $mensagem = ($mensagem == "" ? '<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Extensões permitidas: doc(x), pdf ou rtf.!</span>' : $mensagem );
            $uploadOk = 0;
        }
        
        if($uploadOk==1){
    
            /*$target_dir = $target_dir = $_SERVER["DOCUMENT_ROOT"] . "\\newtelehelp\\wp-content\\plugins\\telehelp\\uploads\\curriculos\\";
            $target_file = $target_dir . md5(time()) . "." . $extensao;
    
            if (move_uploaded_file($_FILES["curriculo"]["tmp_name"], $target_file)) {
               
            } else {
                $erro = 1;
                $mensagem = ($mensagem == "" ? '<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Erro '.$_FILES["curriculo"]["error"].' no upload do arquivo!</span>' : $mensagem );
                $uploadOk = 0;
            }*/
            
        }
    
    }
    
    if($erro==0){
        
        
        
        mysql_query("INSERT INTO
		wp_calltoaction
		SET
        Tipo_do_call_to_action = 'Formulário Trabalhe Conosco',
        E_mail = '".$_POST["email"]."',
        CPF ='',
        Nome = '".$_POST["nome"]."',
        Idade ='',
        Sexo ='',
        Telefone = '".$_POST["telefone"]."',
        Celular ='',
        CEP ='',
        Endereco ='',
        Numero ='',
        Complemento ='',
        Bairro ='',
        Cidade ='',
        Estado ='',
        Cidade_Origem ='".$_SESSION["C_TLHP"]."',
        Estado_Origem ='".$_SESSION["E_TLHP"]."',
        Bairro_Origem ='',
        Página_Call_To_Action = 'Página Oportunidade',
        Data_Acesso = '".date('Y-m-d H:i')."',
        Hora_Acesso = '".date('H:i:s')."',
        E_mail_Facebook = '".($_POST["login"] == "face" ? $_POST["email"] : "")."',
        Data_Visita = '',
        Horario_Visita =''
		");
        
        
        
        $post_id = wp_insert_post(
        array(
                'comment_status'  => 'closed',
                'ping_status'   => 'closed',
                'post_author'   => 1,
                'post_title'    => $_POST["nome"] . " || " . $_POST["email"] . " || " .$_POST["telefone"],
                'post_excerpt' => $_POST["areadesejada"],
                'post_status'   => 'pending',
                'post_type'   => 'curriculo'
        )
            );
            
            if(isset($_POST['news'])){applynews($_POST['email']);}
           

$get_link = "";
            
if($uploadOk==1){            
            

    require_once( ABSPATH . 'wp-admin/includes/post.php' );
    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
    require_once( ABSPATH . 'wp-admin/includes/media.php' );


    $attachment_id = media_handle_upload( 'curriculo', $post_id );
    //set_post_thumbnail( $post_id, $attachment_id );
    

    $dds = get_post_meta( $attachment_id);

    $upload_dir = wp_upload_dir();
    $target_dir = $upload_dir['baseurl'] ;    
    add_post_meta( $post_id, 'lnk_pdf', $target_dir . "/" . $dds["_wp_attached_file"][0], true );
    
    $get_link = $target_dir . "/" . $dds["_wp_attached_file"][0];

    $attachments = array($upload_dir['basedir']."/".$dds["_wp_attached_file"][0]);

}
        
        $to = array(
            "Setor RH <rh@telehelp.com.br>"
		);
		$subject = "Área " . $_POST["areadesejada"];

		$headers[] = 'Content-Type: text/html; charset=UTF-8';
		$headers[] = 'From: Trabalhe na TeleHelp <interno@meutelehelp.hospedagemdesites.ws> ' . "\r\n";
		if($get_link<>""){
			/*
            Remover comentário se teste não der certo
            $content = "<br>Olá<br><br>Envio formulário Trabalhe na TeleHelp<br><br>Nome: ".$_POST["nome"]."<br>E-mail: ".$_POST["email"]."<br>Telefone:".$_POST["telefone"]."<br><br>Opção Selecionada:".$_POST["areadesejada"]."<br><br>Link:".$get_link." ";
			wp_mail( $to, $subject, $content, $headers);
            */
            /*
            Comentar se teste não der certo
            */
            $content = "<br>Olá<br><br>Envio formulário Trabalhe na TeleHelp<br><br>Nome: ".$_POST["nome"]."<br>E-mail: ".$_POST["email"]."<br>Telefone:".$_POST["telefone"]."<br><br>Opção Selecionada:".$_POST["areadesejada"]."<br>";
            wp_mail( $to, $subject, $content, $headers, $attachments);
            @unlink($attachments[0]);
            /* Comentar até aqui */  		
		}else{
			$content = "<br>Olá<br><br>Envio formulário Trabalhe na TeleHelp<br><br>Nome: ".$_POST["nome"]."<br>E-mail: ".$_POST["email"]."<br>Telefone:".$_POST["telefone"]."<br><br>Opção Selecionada:".$_POST["areadesejada"]."";
			wp_mail( $to, $subject, $content, $headers);  		
		}
        
        
        
        $rows = mysql_query("INSERT INTO
		  wp_contatos
		  SET
		  wp_data = '".time()."',
		  wp_pagina = '2',
		  wp_tipo = '".($_POST["login"] == "face" ? 1 : 0)."',
		  wp_nome = '".$_POST["nome"]."',
		  wp_email = '".$_POST["email"]."',
		  wp_telefone = '".$_POST["telefone"]."',
		  wp_link = '".site_url() . "/" . $target_file."',
          wp_cpfc = '".$_POST["cpf"]."',
          wp_txtarea = '".$_POST["areadesejada"]."',
          wp_news = '".(isset($_POST["news"]) ? 1 : 0)."'
		");
        header('Location:' . site_url() . '/oportunidades-de-trabalho-sucesso'); exit;
    }
        
		



    
  }
  
  
  $idpos_t = get_the_ID();
  get_header (); ?>
  
  <style>
  #header{
	  box-shadow:1px 2px 10px -4px #ABAAAA;}
  </style>
  
  <div id="corpopage" > 
  
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
            	Bem-vindo à página de Recursos Humanos da TeleHelp
            </div>
            
            <div style="clear:both"></div>
        </div>
    </div>
    
    
  
  	<div id="corpopagemeio" class="atendimentos-reias">   
   <?php the_content(); ?>
 <?php endif; ?>    



	<div id="terceirotitulo" class="titulocantraldevendas">
    	<h2 class="title-default">Preencha o formulário abaixo:

        	<span>* campos obrigatórios</span>
        </h2>
    </div>




<div id="formulariocentraldeatendimento">
	<div class="login-social">
    <a href="#" onclick="modalsface('loginBtncvv','opo')" id="loginBtn" class="button login-facebook"><i class="soap-icon-facebook"></i>Acesse Com <strong>Facebook</strong></a>
	</div>
    

<form method="post" id="opotrabalhe-conosco" action="<?php echo site_url()?>/oportunidades-de-trabalho" enctype="multipart/form-data">

<?php echo ($mensagem<>"" ? "<li>" . $mensagem . "</li>" : ""); ?>

<input type="hidden" name="pagina" value="trabalhe-conosco">
<input type="hidden" name="acao" value="form-site">
<input type="hidden" name="url" value="<?php echo site_url()?>">
<input type="hidden" name="login" id="opotplogin" value="email">
<input type="hidden" name="arquivos" id="arquivos" value="false">

<li>
<label>Nome Completo*</label>
<input class="cv_e" type="text" name="nome" id="oponome" value="<?php echo $_POST['nome']?>" required>
</li>

<li>
<label>E-mail*</label>
<input class="cv_e" type="text" name="email" id="opoemail" value="<?php echo $_POST['email']?>" required>
</li>


<li>
<label>Telefone:*</label>
<input class="cv_e telefone" type="text" name="telefone" id="opotelefone" value="<?php echo $_POST['telefone']?>" placeholder="( ) ____-____" required>
</li>

<li id="minhafoto">
<label>Anexe seu Currículo:*</label>
<div class="fileUpload btn btn-primary">
<span>Selecionar Arquivo</span>
<input type="file" id="curriculo" name="curriculo" class="upload">
</div>                   
<strong>Formatos aceitos: .doc, .pdf, .rtf</strong>                         
</li>

<li>
<label>Qual a área desejada:*</label>
<select class="cv_sel" name="areadesejada" id="areadesejada">
	<option <?php echo ($_POST['areadesejada']=="RH" ? 'selected="selected"' : "")?>>RH</option>
	<option <?php echo ($_POST['areadesejada']=="Vendas" ? 'selected="selected"' : "")?>>Vendas</option>
	<option <?php echo ($_POST['areadesejada']=="Marketing" ? 'selected="selected"' : "")?>>Marketing</option>
	<option <?php echo ($_POST['areadesejada']=="Financeiro" ? 'selected="selected"' : "")?>>Financeiro</option>
	<option <?php echo ($_POST['areadesejada']=="Central de Atendimento" ? 'selected="selected"' : "")?>>Central de Atendimento</option>
	<option <?php echo ($_POST['areadesejada']=="Call Center" ? 'selected="selected"' : "")?>>Call Center</option>
	<option <?php echo ($_POST['areadesejada']=="Pós Vendas" ? 'selected="selected"' : "")?>>Pós Vendas</option>
	<option <?php echo ($_POST['areadesejada']=="Cobrança" ? 'selected="selected"' : "")?>>Cobrança</option>
	<option <?php echo ($_POST['areadesejada']=="TI" ? 'selected="selected"' : "")?>>TI</option>
</select>
</li>

<!--
<li id="textareacentral">
<label>Mensagem:*</label>
<textarea class="cv_e" name="txtarea" id="opotxtarea"><?php echo $_POST['txtarea']?></textarea>
</li>
-->

<div class="form-group">
<div class="checkbox">
<input name="news" <?php echo (isset($_POST['news']) ? 'checked' : "")?> type="checkbox"> Gostaria de receber novidades sobre a Telehelp.
</div>
</div>


<li id="opobotcentral">
<input type="submit" name="" value="ENVIAR >">
</li>
</form>
</div>

</div>
  
  
  
    <?php get_footer (); ?>
    <div id='sm-bounce' data-scope='email' style='display:none' ></div>