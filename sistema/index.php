<?php
//SISTEMA
$titulo = 'Sistema - Programa Futuro Cientista®';
$descricao = 'Sistema oficial do Programa Futuro Cientista.';
$img = 'facebook/sistema';
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include '../web/seguranca.php';
include '../web/script.php';
include '../web/header.php';

?>


<?php if ($_SESSION): ?>


<div id="menu1">
    <div class="container " >
        <?php if ($_SESSION['h'] === '1'): ?>
            <span style="display:inline-block; vertical-align:middle"><i class="fa fa-gear fa-1x"></i> Sistema EAD - Aprendizado Pela Descoberta - Visão do Aluno </span>
        <?php elseif ($_SESSION['h'] === '2'): //MENU EQUIPE ?>
            <span style="display:inline-block; vertical-align:middle"><i class="fa fa-gear fa-1x"></i> Sistema EAD - Aprendizado pela descoberta - Visão do Professor </span>
        <?php elseif ($_SESSION['h'] === '3'): //MENU EQUIPE ?>
            <span style="display:inline-block; vertical-align:middle"><i class="fa fa-gear fa-1x"></i> Sistema EAD - Aprendizado pela descoberta - Visão da Equipe </span>
        <?php endif; ?>

    </div>
</div>
<div id="corpo">


    <?php if ($_SESSION['h'] === '1'):  //MENU ALUNOS ?>

        <?php
        if (!$mobile) {
            include 'menu_aluno_pc.php';
        } 
        ?>
    
    
        <?php
        if (!$mobile) {
            echo '<div id="corpoEquipe">';
            include 'matriz_aluno_pc.php';
            echo '</div>';
        } else {
            include 'matriz_aluno_mobile.php';
        }
        ?>

        


<?php elseif ($_SESSION['h'] === '2'):  //MENU PROFESSORES  ?> 

        <p align="center">
            Sem op&ccedil;&otilde;es para professores no momento!
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/sair'" class="ob" type="submit"><i class="fa fa-arrow-circle-left fa-1x"></i> Sair</button><br><br>
        </p>

<?php elseif ($_SESSION['h'] === '3'): //MENU EQUIPE  ?>
        <p align="center" style="font-size: 1.3em;">
            Bem vindo(a) <?php
                    $nome = explode(" ", $_SESSION['usuarioNome']);
                    echo $nome[0];
                    ?>!<br><br>
            
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/alunos'" class="ob" type="submit"><i class="fa fa-user fa-1x"></i> Alunos</button> | 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/nucleos'" class="ob" type="submit"><i class="fa fa-building fa-1x"></i> NDCs</button> | 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/cls'" class="ob" type="submit"><i class="fa fa-map-marker fa-1x"></i> Coordenadores Locais</button> | 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/clubes'" class="ob" type="submit"><i class="fa fa-group fa-1x"></i> Clubes de Ciências</button> <br><br>
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/noticias'" class="ob" type="submit"><i class="fa fa-newspaper-o fa-1x"></i> Not&iacute;cias</button> | 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/eventos'" class="ob" type="submit"><i class="fa fa-calendar fa-1x"></i> Eventos</button> | 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/publicacoes'" class="ob" type="submit"><i class="fa fa-book fa-1x"></i> Publica&ccedil;&otilde;es</button> | 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/vestibulares'" class="ob" type="submit"><i class="fa fa-graduation-cap fa-1x"></i> Vestibulares (Guia)</button> <br><br>
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/projetos'" class="ob" type="submit"><i class="fa fa-gears fa-1x"></i> Projetos</button> | 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/equipe'" class="ob" type="submit"><i class="fa fa-user-secret fa-1x"></i> Equipe</button> | 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/conteudo'" class="ob" type="submit"><i class="fa fa-gear fa-1x"></i> Conte&uacute;do EAD</button> | 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/parceiros'" class="ob" type="submit"><i class="fa fa-institution fa-1x"></i> Parceiros</button> <br><br>
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/sair'" class="ob" type="submit"><i class="fa fa-arrow-circle-left fa-1x"></i> Sair</button> 

        </p>
<?php endif; ?>




</div>


<?php
else: ?>

<div id="menu1">
    <div class="container " >
        <span style="display:inline-block; vertical-align:middle"><i class="fa fa-gear fa-1x"></i> Sistema EAD - Aprendizado pela descoberta </span>
    </div>
</div>
<div id="corpo" >


                
    <span style="display:inline-block; vertical-align:middle; width: 100%; text-align: center;"><br><br>
                           <!-- Sistema indispon&iacute;vel no momento!<br><br> --> Fa&ccedil;a seu login!<br><br>
                            <form class="formulario" id="form" action="login.php" method="post"> 

                                <input type="text" name="email" placeholder="Email (exemplo@exemplo.com)" required="required"><br><br>
                                <input type="password" name="senha" maxlength=10 pattern="^.{6,10}$" placeholder="Senha" required="required"><br><br>
                                <button type="submit"><i class="fa fa-send fa-1x"></i> Entrar</button>
                            </form><br><br>
                    </div>

                            </span>

                      
    

                            <?php
                           
endif;
    
 include '../web/footer.php';
                            ?>