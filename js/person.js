function so_numero(a,b){if(document.all)var c=event.keyCode;else var c=a.charCode;var d="1234567890"+b,e=String.fromCharCode(c);return d.indexOf(e)>-1?!0:d.indexOf(e)>-1||9>c?!0:!1}function sem_acento(a,b){if(document.all)var c=event.keyCode;else var c=a.charCode;var d="\xe1\xe0\xe2\xe3\xe9\xe8\xea\xed\xef\xf3\xf4\xf5\xf6\xfa\xe7\xf1abcdefghijlmnopqrstuvxzwyk\xc1\xc0\xc2\xc3\xc9\xc8\xca\xcd\xcc\xd3\xd2\xd5\xd4\xda\xc7\xd1ABC\xc7DEFGHIJLMNOPQRSTUVXZWYK-_ "+b,e=String.fromCharCode(c);return d.indexOf(e)>-1?!0:d.indexOf(e)>-1||9>c?!0:!1}function go_step(a){1>=a&&(a=1,inicial=1,jQuery("input#btn_passoprev").css("visibility","hidden")),a>=2&&jQuery("input#btn_passoprev").css("visibility","visible"),a>=5?(jQuery("input#btn_passonext").hide(),jQuery("input#btn_passofim").show()):(jQuery("input#btn_passonext").show(),jQuery("input#btn_passofim").hide()),inicial=a,jQuery(".nextfield").each(function(){var b=jQuery(this).data("id");b==a?jQuery(this).slideDown("slow"):jQuery(this).slideUp("slow")}),jQuery("#progressbar li").removeClass("active"),jQuery("#progressbar .pa"+a).addClass("active")}function resultados(a,b){if(inicial=b,1>b)return b=1,inicial=1,!1;if(b>6)return b=6,inicial=5,!1;var c=0,d=1,e=jQuery("#idade").val(),f=jQuery("#passo2").val(),g=jQuery("#passo3").val(),h=jQuery("#passo4").val(),i=jQuery("#passo5").val();if(jQuery(".resultado_s").css("border","1px solid #9e9e9e"),jQuery(".modal-input-error").slideUp("slow").remove(),2==b){if(""==e||0>=e)return jQuery("#idade").css("border","1px solid red"),jQuery("#pergunta1").after('<span class="modal-input-error" style="display:none;color: red;width: 100%;float: left;font-size: 15px;margin-bottom: 10px;">Informe sua idade!</span>'),jQuery(".modal-input-error").slideDown("slow"),inicial=1,!1;go_step(2)}if(3==b){if(""==f)return jQuery("#pergunta2").after('<span class="modal-input-error" style="display:none;color: red;width: 100%;float: left;font-size: 15px;margin-bottom: 10px;">Escolha uma op\xe7\xe3o!</span>'),jQuery(".modal-input-error").slideDown("slow"),inicial=2,!1;go_step(3)}if(4==b){if(""==g)return jQuery("#pergunta3").after('<span class="modal-input-error" style="display:none;color: red;width: 100%;float: left;font-size: 15px;margin-bottom: 10px;">Escolha uma op\xe7\xe3o!</span>'),jQuery(".modal-input-error").slideDown("slow"),inicial=3,!1;go_step(4)}if(5==b){if(""==h)return jQuery("#pergunta4").after('<span class="modal-input-error" style="display:none;color: red;width: 100%;float: left;font-size: 15px;margin-bottom: 10px;">Escolha uma op\xe7\xe3o!</span>'),jQuery(".modal-input-error").slideDown("slow"),inicial=4,!1;go_step(5)}if(6==b){if(""==i)return jQuery("#pergunta5").after('<span class="modal-input-error" style="display:none;color: red;width: 100%;float: left;font-size: 15px;margin-bottom: 10px;">Escolha uma op\xe7\xe3o!</span>'),jQuery(".modal-input-error").slideDown("slow"),inicial=5,!1;go_step(6),d=0}jQuery("#passo1").val(e),e>0&&""!=e&&(59>=e&&(c=0),e>=60&&69>=e&&(c=1),e>=70&&(c=4)),""!=f&&(1==f&&(c+=4),2==f&&(c+=2),3==f&&(c+=0)),""!=g&&(2==g&&(c+=10),1==g&&(c+=0)),""!=h&&(4==h&&(c+=10),3==h&&(c+=8),2==h&&(c+=4),1==h&&(c+=0)),""!=i&&(2==i&&(c+=0),1==i&&(c+=5)),console.log(c),0==busyresultado&&0==d&&(busyresultado=1,d=1,jQuery(".r_risco").hide("slow"),jQuery.ajax({type:"POST",url:urlplug+"telehelp_ajax.php",data:{acao:"salvar-resultado",passo1:e,passo2:f,passo3:g,passo4:h,passo5:i,total:c},dataType:"json",success:function(a){a.status&&(jQuery(".rowno").slideUp("slow"),jQuery(".rowsi").slideDown("slow"),8>=c&&(jQuery(".r_riscob").show(),1==i&&(jQuery(".r_risco5id").show(),jQuery(".r_risco5cel").hide())),c>=9&&15>=c&&(jQuery(".r_riscom").show(),1==i&&(jQuery(".r_risco5id").hide(),jQuery(".r_risco5cel").show())),c>=16&&(jQuery(".r_riscoa").show(),1==i&&(jQuery(".r_risco5id").show(),jQuery(".r_risco5cel").show()))),busyresultado=0,d=1}}))}function update_views(a){jQuery.ajax({type:"POST",url:urlplug+"telehelp_ajax.php",data:{acao:"update_views",video:a},dataType:"json",success:function(a){a.status}})}function ValidateEmail(a){var b=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;return a.match(b)?!0:!1}function validacpf(a){for(a=jQuery.trim(a),a=a.replace(".",""),a=a.replace(".",""),cpf=a.replace("-","");cpf.length<11;)cpf="0"+cpf;var b=/^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/,c=[],d=new Number,e=11;for(i=0;i<11;i++)c[i]=cpf.charAt(i),i<9&&(d+=c[i]*--e);for((x=d%11)<2?c[9]=0:c[9]=11-x,d=0,e=11,y=0;y<10;y++)d+=c[y]*e--;(x=d%11)<2?c[10]=0:c[10]=11-x;var f=!0;return(cpf.charAt(9)!=c[9]||cpf.charAt(10)!=c[10]||cpf.match(b))&&(f=!1),f}function send_ce(e,f,l){e.preventDefault(),local=void 0!=l?l:"";var erro=0;if(jQuery("#erro_cv_e").slideUp().remove(),10!=f){if(""==jQuery("#"+local+"nome").val())return jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigat\xf3rio informar seu nome!</span>'),!1;var regnome=/^[a-z\xe1\xe0\xe2\xe3\xe9\xe8\xea\xed\xef\xf3\xf4\xf5\xf6\xfa\xe7\xf1 ]+$/gi,regn=jQuery("#"+local+"nome").val();if(!regn.match(regnome))return jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Permitido o uso apenas de letras!</span>'),!1}if(6!=f){if(""==jQuery("#"+local+"email").val())return 10==f?jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="    margin-bottom: 10px;    width: 100%;    float: left;    text-align: center;padding:5px;border:1px white solid;color: white;font-size: 15px;">Erro no e-mail!</span>'):jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigat\xf3rio informar seu e-mail!</span>'),!1;if(!ValidateEmail(jQuery("#"+local+"email").val()))return 10==f?jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="    margin-bottom: 10px;    width: 100%;    float: left;    text-align: center;padding:5px;border:1px white solid;color: white;font-size: 15px;">E-mail inv\xe1lido!</span>'):jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Informe um e-mail v\xe1lido!</span>'),!1}if(10==f&&""==jQuery("#"+local+"senha").val()&&jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="    margin-bottom: 10px;    width: 100%;    float: left;    text-align: center;padding:5px;border:1px white solid;color: white;font-size: 15px;">Erro senha!</span>'),"opo"==local&&""==jQuery("#curriculo").val()&&jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="    margin-bottom: 10px;    width: 100%;    float: left;    text-align: center;padding:5px;border:1px white solid;color: white;font-size: 15px;">Necess\xe1rio selecionar um arquivo!</span>'),50==f){var telefone=jQuery("#"+local+"cpf").val();if(telefone=telefone.replace(".","").replace(".","").replace(".","").replace("-",""),telefone.length<11)return jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigat\xf3rio Informar um cpf!</span>'),!1;if(!validacpf(telefone))return jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Informar um cpf v\xe1lido!</span>'),!1}if(1==f||2==f||3==f||6==f||7==f||50==f|40==f){var telefone=jQuery("#"+local+"telefone").val();if(telefone=telefone.replace("(","").replace(")","").replace("-","").replace(" ",""),"9999999999"==telefone||"99999999999"==telefone||"8888888888"==telefone||"88888888888"==telefone||"7777777777"==telefone||"77777777777"==telefone||"6666666666"==telefone||"66666666666"==telefone||"5555555555"==telefone||"55555555555"==telefone||"4444444444"==telefone||"44444444444"==telefone||"3333333333"==telefone||"33333333333"==telefone||"2222222222"==telefone||"22222222222"==telefone||"1111111111"==telefone||"11111111111"==telefone||"1234567890"==telefone||"12345678901"==telefone||"0123456789"==telefone||"01234567890"==telefone)return jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigat\xf3rio Informar um telefone v\xe1lido!</span>'),!1;if(telefone.length<10)return jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigat\xf3rio Informar um telefone!</span>'),!1}if(40==f){var errodata=0;if(jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px #155c92 solid;color: #155c92;font-size: 15px;">Processando...!</span>'),""==jQuery("#agddata").val())return jQuery("#erro_cv_e").slideUp().remove(),jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigat\xf3rio uma data!</span>'),!1;var data=jQuery("#agddata").val();if(data.indexOf("/")>=0){data=data.split("/");var ny=data[2],nm=data[1],nd=data[0]}else{data=data.split("-");var ny=data[0],nm=data[1],nd=data[2]}var n=new Date,n_y=n.getFullYear(),n_m=n.getMonth()+1,n_d=n.getDate()+1;if(void 0==nd||void 0==nm||void 0==ny||ny.length>4)return jQuery("#erro_cv_e").slideUp().remove(),jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Data inv\xe1lida!</span>'),!1;var hj=n_y+""+(10>n_m?"0":"")+n_m+(10>n_d?"0":"")+n_d,ha=ny+""+nm+nd;if(hj>ha&&(errodata=1),1==errodata)return jQuery("#erro_cv_e").slideUp().remove(),jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Data deve ser maior que hoje!</span>'),!1;if(""==jQuery("#agdhora").html()||"Selecione"==jQuery("#agdhora").html())return jQuery("#erro_cv_e").slideUp().remove(),jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Informe um hor\xe1rio!</span>'),!1;var hora=jQuery("#agdhora").html();jQuery("#horagenda").val(hora)}if(50==f){if(""==jQuery("#"+local+"senha").val())return jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Informe sua senha!</span>'),!1;if(jQuery("#"+local+"senha").val()!=jQuery("#"+local+"senhac").val())return jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Erro ao confirmar senha!</span>'),!1}if(1==f){if(""==jQuery("#interesse").val())return jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigat\xf3rio selecionar interesse!</span>'),!1;if(""==jQuery("#comoconheceu").val())return jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigat\xf3rio selecionar como conheceu!</span>'),!1}if(2==f){if(""==jQuery("#nomec").val())return jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigat\xf3rio informar o nome do contratante!</span>'),!1;if(""==jQuery("#cpf").val())return jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigat\xf3rio informar CPF do contratante!</span>'),!1;if(!validacpf(jQuery("#cpf").val()))return jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigat\xf3rio informar um CPF v\xe1lido!</span>'),!1}if(7!=f&&""==jQuery("#"+local+"txtarea").val())return jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigat\xf3rio preencher sua mensagem!</span>'),!1;if(3==f){var check=jQuery("#arquivos").val();if("false"==check)return jQuery("#"+local+"botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Escolha um arquivo .doc, .pdf ou .rtf!</span>'),!1;jQuery("#central-vendas").submit(),jQuery("#central-vendas").submit(),jQuery("#central-vendas").submit(function(event){event.preventDefault();var formData=new FormData(jQuery(this)[0]);return 0==busyupload&&(busyupload=1,jQuery.ajax({url:urlplug+"telehelp_ajax.php",type:"POST",data:formData,async:!1,cache:!1,contentType:!1,processData:!1,success:function(msg){msg.status&&(eval(msg.acao),busyupload=0)}})),!1})}else console.log(jQuery("#"+local+"central-vendas").serialize()),jQuery.ajax({type:"POST",url:urlplug+"telehelp_ajax.php",data:jQuery("#"+local+"central-vendas").serialize(),dataType:"json",success:function(msg){msg.status&&eval(msg.acao)}})}function getUserLogin(){FB.api("/me?fields=id,name,email",function(response){console.log(response),void 0!=response.email&&jQuery.ajax({type:"POST",url:urlplug+"telehelp_ajax.php",data:{acao:"login-facebook",email:response.email},dataType:"json",success:function(msg){msg.status&&eval(msg.acao)}})})}function getUserData(){FB.api("/me?fields=id,name,email",function(a){console.log(a),1==vez&&("cadastro"==local?(void 0!=a.email&&jQuery("#form-email").val(a.email),void 0!=a.name&&jQuery("#form-nome").val(a.name)):"cad"==local?(void 0!=a.email&&(jQuery("#cademail").val(a.email),jQuery(".email-signup").show(),jQuery(".simple-signup").hide()),void 0!=a.name&&(jQuery("#cadnome").val(a.name),jQuery(".email-signup").show(),jQuery(".simple-signup").hide())):""==local?(void 0!=a.email&&(jQuery("#email").val(a.email),jQuery("#tplogin").val("face")),void 0!=a.name&&(jQuery("#nome").val(a.name),jQuery("#tplogin").val("face"))):(void 0!=a.email&&(jQuery("#"+local+"email").val(a.email),jQuery("#"+local+"tplogin").val("face")),void 0!=a.name&&(jQuery("#"+local+"nome").val(a.name),jQuery("#"+local+"tplogin").val("face"))))})}function modalsface(a,b){vez=1,local=b,FB.login(function(a){console.log(a),a.authResponse&&("top"==b?getUserLogin():getUserData())},{scope:"email,public_profile",return_scopes:!0})}function fechadepo(){jQuery("#soap-popupbox").hide(),jQuery("#modal_envia_depo").modal()}function recover_pass(a){a.preventDefault();var b=jQuery("#rmform-email").val();return jQuery(".modal-input").css("border","1px solid #475b9b"),jQuery(".modal-input-error").remove(),""==b?(jQuery("#rmform-email").focus(),jQuery("#rmform-email").css("border","1px solid red"),jQuery("#rmform-email").after('<span class="modal-input-error mensagens-modal" style="color:red;padding-bottom: 15px;">Por favor informe seu email!</span>'),!1):void jQuery.ajax({type:"POST",url:urlplug+"telehelp_ajax.php",data:{acao:"recover",value:b},dataType:"json",success:function(a){a.status&&("noexist"==a.resultado?(jQuery("#rmform-email").focus(),jQuery("#rmform-email").css("border","1px solid red"),jQuery("#rmform-email").after('<span class="modal-input-error mensagens-modal" style="color:red;padding-bottom: 15px;">N\xe3o encontramos este email!</span>')):(jQuery("#Modal-Senha").modal("hide"),jQuery("#abrirmodalsenhacomsucesso").modal("show"),limpa_form("#pedidos-recover-modal-form")))}})}jQuery(function(a){a("#idade").setMask("999"),a("#agddata").setMask("99/99/9999"),a(".cpf").setMask("999.999.999-99"),a("audio").on("play",function(){var b=a(this);a("audio").each(function(c,d){a(d).is(b)||a(d).get(0).pause()})}),a("#accordionnovo .panel-collapse").on("shown.bs.collapse",function(){a(this).prev().find(".glyphicon").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up")}),a("#accordionnovo .panel-collapse").on("hidden.bs.collapse",function(){a(this).prev().find(".glyphicon").removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down")}),a(".telefone").on("input propertychange paste",function(b){var c=/^0+/gi;this.value.match(c)&&(this.value=this.value.replace(c,"")),a(".telefone").setMask("(99) 9999-99999").ready(function(b){var c,d,e;c=b.currentTarget?b.currentTarget:b.srcElement,d=c.value.replace(/\D/g,""),e=a(c),e.unsetMask(),d.length>10?e.setMask("(99) 99999-9999"):e.setMask("(99) 9999-99999")})}),a("#banbotcentral button").click(function(b){var c=a(this);a.post("http://jsfiddle.net/echo/jsonp/",{delay:3}).complete(function(){c.prop("disabled",!1)}),c.prop("disabled",!0)}),a("#meecentral-vendas button").click(function(b){var c=a(this);a.post("http://jsfiddle.net/echo/jsonp/",{delay:3}).complete(function(){c.prop("disabled",!1)}),c.prop("disabled",!0)}),a("#agdcentral-vendas button").click(function(b){var c=a(this);a.post("http://jsfiddle.net/echo/jsonp/",{delay:3}).complete(function(){c.prop("disabled",!1)}),c.prop("disabled",!0)}),a("#attcentral-vendas button").click(function(b){var c=a(this);a.post("http://jsfiddle.net/echo/jsonp/",{delay:3}).complete(function(){c.prop("disabled",!1)}),c.prop("disabled",!0)}),a("#ccvcentral-vendas button").click(function(b){var c=a(this);a.post("http://jsfiddle.net/echo/jsonp/",{delay:3}).complete(function(){c.prop("disabled",!1)}),c.prop("disabled",!0)}),a("#pedidos-cadastro-usuario button").click(function(b){a(this)})});var busyresultado=0,busyupload=0;jQuery("#curriculo").change(function(){console.log(jQuery(this));var a=jQuery(this)[0].files[0].name,b=a.split("."),c=b.length,d=b[c-1];return"doc"!=d.toLowerCase()&&"docx"!=d.toLowerCase()&&"pdf"!=d.toLowerCase()&&"rtf"!=d.toLowerCase()?(jQuery(".fileUpload.btn.btn-primary span").html("Selecionar Arquivo ("+a+")"),jQuery("#arquivos").val("false"),jQuery("#erro_cv_e").slideUp().remove(),jQuery("#botcentral").prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Escolha um arquivo .doc, .pdf ou .rtf!</span>'),!1):(jQuery(".fileUpload.btn.btn-primary span").html("Arquivo Anexado ("+a+")"),void jQuery("#arquivos").val("true"))});var vez=0,local="",faceinit=0;window.fbAsyncInit=function(){FB.init({appId:"901806783237809",xfbml:!0,version:"v2.2"}),FB.getLoginStatus(function(a){faceinit=1,console.log(a),"connected"===a.status?getUserData():jQuery("#"+local+"tplogin").val("email")})},function(a,b,c){var d,e=a.getElementsByTagName(b)[0];a.getElementById(c)||(d=a.createElement(b),d.id=c,d.src="//connect.facebook.net/pt_BR/sdk.js",e.parentNode.insertBefore(d,e))}(document,"script","facebook-jssdk"),document.querySelector("loginBtn")&&document.getElementById("loginBtn").addEventListener("click",function(){vez=1,local="",FB.login(function(a){console.log(a),a.authResponse&&(document.getElementById("loginBtn").style.display="none",getUserData())},{scope:"email,public_profile",return_scopes:!0})},!1);