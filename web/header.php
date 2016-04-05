
<?php if (!$mobile): ?>
<body>
    
    <div class="basico"> 
        
        <div id="fixo">
        
        <div id="cabecalho"> 
            <a href="<?php echo $root_html ?>">
                <div class="w-1-2"><div class="container"><img id="logo" style="padding-left: 2%" src="<?php echo $root_html ?>img/logo_mobile.png" width="98%" class="image"></div></div>
            </a>
            <div class="w-1-2" >
            <div class="w-1-3" onclick="window.open('http://fbb.org.br/tecnologiasocial/banco-de-tecnologias-sociais/pesquisar-tecnologias/detalhar-tecnologia-379.htm')"><div class="container"><img class="tecsocial image" src="<?php echo $root_html ?>img/tecsocial.png" width="55%" ></div></div></a>
            <div class="w-1-3" onclick="window.open('http://www.sorocaba.ufscar.br/ufscar/')"><div class="container"><img class="ufscar image" src="<?php echo $root_html ?>img/mec.png" width="55%" ></div></div>
           <div class="w-1-3" onclick="window.open('http://www.brasil.gov.br/')"><div class="container"><img class="governo_federal image" src="<?php echo $root_html ?>img/brasil.png" width="60%" ></div></div>
            
            </div>
            </a> 
        </div>
            <div style="background: black;">
        <div id="menu_cabecalho">
            <div id="menu_estatico">
                 <span class="ajuda_user" style="color: white;">
                      <!--   <button class="inicio" style="background: #006666 ; color: white;"><i class="fa fa-home fa-1x"></i> Inicio</button> | -->
                        <button class="destaques_menu1"><i class="fa fa-star fa-1x"></i> Destaques</button> | 
                        <button class="facebook_menu1"><i class="fa fa-facebook-square fa-1x"></i> Facebook</button> | 
                        <button class="rede_titulo_corpo" style="width: auto; height: auto; border: none; "><i class="fa fa-map-marker fa-1x"></i> Rede</button> | 
                        <button class="youtube_titulo_corpo" style="width: auto; height: auto; border:none;"><i class="fa fa-youtube-play fa-1x"></i> Youtube</button> | 
                        <button class="ajude_corpo" style="height: auto; width: auto; float: none;"><i class="fa fa-heart fa-1x"></i> Ajude </button> | 
                        <button class="conteudo_ead" style="height: auto; width: auto; float: none;"><i class="fa fa-gear fa-1x"></i> Conte&uacute;do EAD </button> | 
                         <button class="parceiros_menu1"><i class="fa fa-institution fa-1x"></i> Parceiros</button> 
                       
                        
                       
                        
                      
                    </span>
            </div>
            <div id="menu_estatico2" class="container"  >
                 <span class="ajuda_user" style="color: white;">
                  <button class="sobre"><i class="fa fa-newspaper-o fa-1x"></i> Sobre</button> | 
                        <button class="equipe"><i class="fa fa-group fa-1x"></i> Equipe</button> | 
                        <button class="eventos"><i class="fa fa-gears fa-1x"></i> Projetos</button> | 
                        <button class="contato"><i class="fa fa-phone fa-1x"></i> Contato</button> | 
                        <button class="sistema"><i class="fa fa-gear fa-1x"></i> Sistema EAD</button>
                       
                         </span>
                         
               
     
    
                
                <!--
                 <small><span class="ajuda_user" style="color: white;">
                        <input id="checkbox" type="checkbox" class="troca_menu" checked="true" > <button onclick="$('#checkbox').change();"> Menu dinâmico </button> |
                 <button class="sobre"><i class="fa fa-newspaper-o fa-1x"></i> Sobre</button> | 
                        <button class="equipe"><i class="fa fa-group fa-1x"></i> Equipe</button> | 
                        <button class="eventos"><i class="fa fa-gears fa-1x"></i> Projetos</button> | 
                        <button class="contato"><i class="fa fa-phone fa-1x"></i> Contato</button> | 
                        <button class="sistema"><i class="fa fa-gear fa-1x"></i> Sistema EAD</button>
                 </span></small>-->
            </div>
        </div>
            </div>
            
            <div style="height: 25.8%; width: 100%"></div>
        <div id="menu_estatico11" >
            <form class="formulario" style=" padding: 0; box-shadow: none; height: 50%; width: 100%; background: transparent; color: white;" id="form" action="../sistema/login.php" method="post">
                <button class="sistema" style="height: 1.5em; font-size: 1em "><i class="fa fa-gear fa-1x"></i> Entrar no Sistema EAD :</button> <input id="login_email" style="width: 25%; height: 1.5em; border-radius: 0.3em; padding-left: 0.2em; font-size: 1em;" type="text" name="email" placeholder="Email (nome@exemplo.com)" required="required"> | 
                <input id="login_senha"  style="width: 25%; height: 1.5em; border-radius: 0.3em; padding-left: 0.2em; font-size: 1em " type="password" name="senha" maxlength=10 pattern="^.{6,10}$" placeholder="Senha" required="required">
                <button id="login_submit" style="height: 1.5em; font-size: 1em " type="submit"><i class="fa fa-send fa-1x"></i> Entrar</button>
                            </form>
        </div>
        <div id="menu_estatico22" >
             <div id="google_search"  ><a href="#" id="google" class="wo" onclick="$('.gsc-input').focus();" ><i class="fa fa-search fa-1x"></i>  Acesso &agrave; informa&ccedil;&atilde;o : </a>  </div>
      
          
        <gcse:search ></gcse:search>
        </div>
            
            </div>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=374421746070266&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));






</script>

<?php else: ?>


<body>
    <div class="basico"> 
        <div id="cabecalho_mobile"> <a href="/">
                <div style="width: 100%; height: 50%;"><div class="container"><img id="brasil" src="<?php echo $root_html ?>img/logo_mobile.png" width="85%" class="image"></div></div>
            </a>
            <div style="width: 100%; height: 50%;">
        <div class="w-1-3" onclick="window.open('http://fbb.org.br/tecnologiasocial/banco-de-tecnologias-sociais/pesquisar-tecnologias/detalhar-tecnologia-379.htm')"><div class="container"><img id="logo" src="<?php echo $root_html ?>img/tecsocial.png" width="40%" class="image"></div></div></a>
            <div class="w-1-3" onclick="window.open('http://www.sorocaba.ufscar.br/ufscar/')"><div class="container"><img  src="<?php echo $root_html ?>img/mec.png" width="40%" class="image"></div></div>
           <div class="w-1-3" onclick="window.open('http://www.brasil.gov.br/')"><div class="container"><img src="<?php echo $root_html ?>img/brasil.png" width="45%" class="image"></div></div>
            </div>   
        </div>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=374421746070266&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        

<?php endif; ?>
