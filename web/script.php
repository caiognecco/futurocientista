
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo ?></title>
        <meta property="og:title" content="<?php echo $titulo ?>"/>
        <meta property="og:url" content="<?php echo $url; ?>"/>
        <meta property="og:image" content="http://futurocientista.net/img/<?php echo $img ?>.png"/>
        <meta property="og:description" content="<?php echo $descricao ?>" />
        <meta name="description" content="<?php echo $descricao ?>" />




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
        <!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />-->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
        <?php echo ''; ?>
        <?php if (!$mobile): ?>
            <link rel="stylesheet" href="<?php echo $root_html ?>web/estilo.css" type="text/css">
        <?php else: ?>
            <link rel="stylesheet" href="<?php echo $root_html ?>web/estilo_mobile.css" type="text/css">
        <?php endif; ?>
        <link rel="stylesheet" href="<?php echo $root_html ?>web/scrollbar.css" type="text/css">
        <link href="<?php echo $root_html ?>img/icone.png" rel="icon" type="image/vnd.microsoft.icon">
        <script src="<?php echo $root_html ?>web/jquery.anyslider.js"></script>
        <script src="<?php echo $root_html ?>web/zepto.min.js"></script>
        <script src="<?php echo $root_html ?>web/mask.js"></script>
        <script type="text/javascript"
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyAuXdngJVRv2ubkds-dWgOavD0rdiEEA">
        </script>
        <link rel="stylesheet" href="<?php echo $root_html ?>web/jquery.tagit.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $root_html ?>web/zoom-fotos.css" type="text/css">

        <script src="<?php echo $root_html ?>web/tag-it.js" type="text/javascript" charset="utf-8"></script>

        <script>

                    function initialize() {
                        var locations = [
                            ['UNISO - Universidade de Sorocaba', -23.50015, -47.39844, 'Parceira do Programa Futuro Cientista', 'http://www.uniso.br/', 'uniso.png'],
                            ['Col&eacute;gio Objetivo Sorocaba', -23.50325, -47.46356, 'Parceiro do Programa Futuro Cientista', 'http://www.objetivosorocaba.com.br/', 'objetivo.png'],
                            ['Sorocaba', -23.50153, -47.45256, 'Prefeitura convenidada ao Programa Futuro Cientista', 'http://www.sorocaba.sp.gov.br/', 'prefsorocaba.png'],
                            ['Salto de Pirapora', -23.64435, -47.57210, 'Prefeitura convenidada ao Programa Futuro Cientista', 'http://www.saltodepirapora.sp.gov.br/', 'prefsaltopirapora.jpg'],
                            ['S&atilde;o Roque', -23.53076, -47.13540, 'Prefeitura convenidada ao Programa Futuro Cientista', 'http://www.saoroque.sp.gov.br/', 'prefsaoroque.jpg'],
                            ['S&atilde;o Miguel Arcanjo', -23.878686, -47.994008, 'Prefeitura convenidada ao Programa Futuro Cientista', 'http://www.saomiguelarcanjo.sp.gov.br/', 'prefsaomiguel.png'],
                            ['Cap&atilde;o Bonito', -24.00216, -48.35026, 'Prefeitura convenidada ao Programa Futuro Cientista', 'http://capaobonito.sp.gov.br/', 'prefcapaobonito.jpg'],
                            ['Pilar do Sul', -23.80787, -47.72324, 'Prefeitura convenidada ao Programa Futuro Cientista', 'http://www.pilardosul.sp.gov.br/', 'prefpilardosul.png'],
                            ['Iper&oacute;', -23.35178, -47.69317, 'Prefeitura convenidada ao Programa Futuro Cientista', 'http://www.ipero.sp.gov.br/', 'prefipero.png'],
                            ['Ces&aacute;rio Lange', -23.22652, -47.95491, 'Prefeitura convenidada ao Programa Futuro Cientista', 'http://www.cesariolange.sp.gov.br/', 'prefcesario.png'],
                            ['Anhembi', -22.78831, -48.13119, 'Prefeitura convenidada ao Programa Futuro Cientista', 'http://www.anhembi.sp.gov.br/', 'prefanhembi.png'],
                            ['UFSCar - Campus Sorocaba', -23.58343, -47.52341, 'Núcleo Central do Programa Futuro Cientista', 'http://sorocaba.ufscar.br', 'ufscar.png']

                        ];

                        var mapOptions = {
                            center: {lat: -23.18343, lng: -47.52341},
                            zoom: 7
                        };
                        var map = new google.maps.Map(document.getElementById('map-canvas'),
                                mapOptions);
                        setMarkers(map, locations);
                    }





                    function setMarkers(map, locations) {

                        var marker, i;

                        for (i = 0; i < locations.length; i++)
                        {

                            var nome = locations[i][0];
                            var lat = locations[i][1];
                            var long = locations[i][2];
                            var descricao = locations[i][3];
                            var site = locations[i][4];
                            var img = locations[i][5];

                            latlngset = new google.maps.LatLng(lat, long);

                            var marker = new google.maps.Marker({
                                map: map, title: nome, position: latlngset
                            });



                            var content = '<h1>' + nome + '</h1><img style="width: 100px; height: 100px;" src="<?php echo $root_html ?>img/parceiros/' + img + '"><br><br>' + descricao + '<a href="' + site + '"><br>' + site + '</a>';

                            var infowindow = new google.maps.InfoWindow();

                            google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
                                return function () {
                                    infowindow.setContent(content);
                                    infowindow.open(map, marker);
                                };
                            })(marker, content, infowindow));

                        }
                    }




                    function show1() {

                        $("#subEquipe1").show();
                        $("#subEquipe2").hide();
                        $("#subEquipe3").hide();
                        $("#subEquipe4").hide();
                        $("#subEquipe5").hide();
                        $("#subEquipe6").hide();
                        $("#subEquipe7").hide();
                    }
                    function show2() {

                        $("#subEquipe2").show();
                        $("#subEquipe1").hide();
                        $("#subEquipe3").hide();
                        $("#subEquipe4").hide();
                        $("#subEquipe5").hide();
                        $("#subEquipe6").hide();
                        $("#subEquipe7").hide();
                    }
                    function show3() {
                        $("#subEquipe3").show();
                        $("#subEquipe2").hide();
                        $("#subEquipe1").hide();
                        $("#subEquipe4").hide();
                        $("#subEquipe5").hide();
                        $("#subEquipe6").hide();
                        $("#subEquipe7").hide();
                    }
                    function show4() {
                        $("#subEquipe4").show();
                        $("#subEquipe2").hide();
                        $("#subEquipe3").hide();
                        $("#subEquipe1").hide();
                        $("#subEquipe5").hide();
                        $("#subEquipe6").hide();
                        $("#subEquipe7").hide();
                    }
                    function show5() {
                        $("#subEquipe5").show();
                        $("#subEquipe2").hide();
                        $("#subEquipe3").hide();
                        $("#subEquipe4").hide();
                        $("#subEquipe1").hide();
                        $("#subEquipe6").hide();
                        $("#subEquipe7").hide();
                    }
                    function show6() {
                        $("#subEquipe6").show();
                        $("#subEquipe2").hide();
                        $("#subEquipe3").hide();
                        $("#subEquipe4").hide();
                        $("#subEquipe5").hide();
                        $("#subEquipe1").hide();
                        $("#subEquipe7").hide();
                    }
                    function show7() {
                        $("#subEquipe7").show();
                        $("#subEquipe2").hide();
                        $("#subEquipe3").hide();
                        $("#subEquipe4").hide();
                        $("#subEquipe5").hide();
                        $("#subEquipe6").hide();
                        $("#subEquipe1").hide();
                    }




                    function mostraAlerta(texto, tempo) {
                        $("#alerta").html('<span style="display: inline-block; vertical-align: middle">' + texto + '</span>');
                        $("#alerta").delay(1000).fadeIn(1000);
                        $("#alerta").delay(tempo).fadeOut(1000);
                    }

                    var show_hide = 0;

                    function show_central_notificacao() {

                        if (show_hide === 0) {
                            $("#central_notificacao").show();
                            var data1 = '';
                            $.ajax({
                                url: '<?php echo $root_html ?>sistema/zera_not.php',
                                type: 'POST',
                                data: data1,
                                success: function (data1) {
                                    $('#botao_notificacao').html(data1);


                                },
                                error: function (e) {
                                    $('#botao_notificacao').html("ERRO");

                                }
                            });
                            $('#botao_notificacao').toggleClass('ativo');
                            show_hide = 1;
                        } else {
                            $("#central_notificacao").hide();
                            var data2 = '';
                            $.ajax({
                                url: '<?php echo $root_html ?>sistema/recarrega_not.php',
                                type: 'POST',
                                data: data2,
                                success: function (data2) {
                                    $('#central_notificacao').html(data2);


                                },
                                error: function (e) {
                                    $('#central_notificacao').html("ERRO");

                                }
                            });
                            $('#botao_notificacao').toggleClass('ativo');
                            show_hide = 0;
                        }



                    }


                    $(window).load(function () {


                        var html = $('.basico').html();

                        if (window.orientation == 90 || window.orientation == -90) { //Landscape Mode
                            $('.basico').html("<div style='width: 100%; height: 100%; background: black; color: white; font-size: 2em'><br><br>Nosso site não suporta essa orientação!<br>Por favor deixe seu dispositivo móvel na posição vertical.<br><br><img id='brasil' src='<?php echo $root_html ?>img/logo_mobile.png' width='90%' class='image'></div></div>");
                        }

                        $(window).on("orientationchange", function (event) {

                            if (window.orientation == 90 || window.orientation == -90) { //Landscape Mode
                                $('.basico').html("<div style='width: 100%; height: 100%; background: black; color: white; font-size: 2em'><br><br>Nosso site não suporta essa orientação!<br>Por favor deixe seu dispositivo móvel na posição vertical.<br><br><img id='brasil' src='<?php echo $root_html ?>img/logo_mobile.png' width='90%' class='image'></div></div>");

                            } else {
                                location.reload();
                            }


                        });
                        




                        var menu = 0;
                        var gatilho = 0;
                        var logoW = $("#logo").width();
                        var logoH = $("#logo").height();
                        var logoW3 = $("#logo").width() / 3;
                        var logoH3 = $("#logo").height() / 3;
                        var brasilmecW = $("#brasil").width();
                        var brasilmecH = $("#brasil").height();
                        var brasilmecW2 = $("#brasil").width() / 2;
                        var brasilmecH2 = $("#brasil").height() / 2;
                        var start_slide = Math.floor(Math.random() * 5);



                        $('.troca_menu').change(function () {
                            if (menu === 0) {
                                $('#menu2').hide();
                                $('#corpo').css('height', '74%');
                                $('#checkbox').prop('checked', false);
                                $('#menu_estatico').css('position', 'absolute');
                                $('#menu_estatico').css('bottom', '0');
                                $('#menu_estatico2').css('position', 'absolute');
                                $('#menu_estatico2').css('bottom', '0');
                                $('#menu_estatico2').css('right', '0');
                                menu = 1;
                            } else {
                                $('#menu2').show();
                                $('#corpo').css('height', '64%');
                                $('#checkbox').prop('checked', true);
                                $('#menu_estatico').css('position', '');
                                $('#menu_estatico').css('bottom', '');
                                $('#menu_estatico2').css('position', '');
                                $('#menu_estatico2').css('bottom', '');
                                menu = 0;
                            }
                        });

                        $('.slider').anyslider({
                            //showControls: false,
                            showBullets: false,
                            interval: 4000,
                            startSlide: start_slide
                        });


                        $("#cabecalho").click(function () {
                            window.location = '<?php echo $root_html ?>';
                        });
                        $(".organograma_button").click(function () {
                            window.location = '<?php echo $root_html ?>organograma';
                        });
                        $(".destaques_menu1").click(function () {
                            window.location = '<?php echo $root_html ?>destaques';
                        });

                        $(".destaques_menu1").mouseover(function () {

                            $(".destaques_menu1").css('background', 'white');
                            $(".destaques_menu1").css('color', '#ff6600');
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-star fa-1x"></i> Destaques : veja notícias, eventos, publicações e o guia do vestibulando do P.F.C.!</span>');
                           
                        });

                        $(".destaques_menu1").mouseleave(function () {
                            $(".destaques_menu1").css('background', '#ff6600');
                            $(".destaques_menu1").css('color', 'white');
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".facebook_menu1").click(function () {

                            window.open("https://www.facebook.com/FuturoCientista");
                        });

                        $(".facebook_menu1").mouseover(function () {
                            $(".facebook_menu1").css('background', 'white');
                            $(".facebook_menu1").css('color', '#3b5998');
                            $("#menu2_titulo").css('background', '#3b5998');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-facebook-square fa-1x"></i> Facebook : tenha acesso a conte&uacute;dos di&aacute;rios sobre ci&ecirc;ncia e inova&ccedil;&atilde;o! Curta! Compartilhe!</span>');
                        });

                        $(".facebook_menu1").mouseleave(function () {
                            $(".facebook_menu1").css('background', '#3b5998');
                            $(".facebook_menu1").css('color', 'white');
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".conteudo_ead").click(function () {

                            window.location = '<?php echo $root_html ?>conteudo';
                        });

                        $(".conteudo_ead").mouseover(function () {
                            $(".conteudo_ead").css('background', 'white');
                            $(".conteudo_ead").css('color', '#3b5998');
                            $("#menu2_titulo").css('background', '#3b5998');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-gear fa-1x"></i> Conte&uacute;do EAD : tenha acesso a conte&uacute;dos de aprenzidagem disruptiva sobre ci&ecirc;ncia e inova&ccedil;&atilde;o! Curta! Compartilhe!</span>');
                        });

                        $(".conteudo_ead").mouseleave(function () {
                            $(".conteudo_ead").css('background', '#3b5998');
                            $(".conteudo_ead").css('color', 'white');
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".parceiros_menu1").click(function () {
                            window.location = '<?php echo $root_html ?>parceiros';
                        });

                        $(".parceiros_menu1").mouseover(function () {
                            $(".parceiros_menu1").css('background', 'white');
                            $(".parceiros_menu1").css('color', 'green');
                            $("#menu2_titulo").css('background', 'green');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Parceiros : saiba quem nos ajuda a fazer acontecer e se torne um parceiro!</span>');

                        });

                        $(".parceiros_menu1").mouseleave(function () {
                            $(".parceiros_menu1").css('background', 'green');
                            $(".parceiros_menu1").css('color', 'white');
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });
                        $("#parceiros_inicio").click(function () {
                            window.location = '<?php echo $root_html ?>parceiros';
                        });

                        $("#parceiros_inicio").mouseover(function () {
                            $(".parceiros_menu1").css('background', 'white');
                            $(".parceiros_menu1").css('color', 'green');
                            $("#menu2_titulo").css('background', 'green');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Parceiros : saiba quem nos ajuda a fazer acontecer e se torne um parceiro!</span>');

                        });

                        $("#parceiros_inicio").mouseleave(function () {
                            $(".parceiros_menu1").css('background', 'green');
                            $(".parceiros_menu1").css('color', 'white');
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $("#plano_de_vida").mouseover(function () {
                            $("#menu2_titulo").css('background', '#3b5998');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa  fa-smile-o fa-1x"></i> Plano de vida: conheça nosso plano de vida para os alunos do P.F.C.</span>');

                        });

                        $("#plano_de_vida").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".youtube_titulo_corpo").mouseover(function () {
                            $(".youtube_titulo_corpo").css('background', 'white');
                            $(".youtube_titulo_corpo").css('color', 'red');
                            $("#menu2_titulo").css('background', 'red');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-youtube-play fa-1x"></i> Youtube : conhe&ccedil;a o P.F.C. e acesse outros v&iacute;deos incr&iacute;veis!</span>');
                        });

                        $(".youtube_titulo_corpo").mouseleave(function () {
                            $(".youtube_titulo_corpo").css('background', 'red');
                            $(".youtube_titulo_corpo").css('color', 'white');
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });
                        $(".youtube_titulo_corpo").click(function () {
                            window.open("https://www.youtube.com/c/FuturoCientistaNet");
                        });
                        $(".rede_titulo_corpo").mouseover(function () {
                            $(".rede_titulo_corpo").css('background', 'white');
                            $(".rede_titulo_corpo").css('color', 'green');
                            $("#menu2_titulo").css('background', 'green');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-map-marker fa-1x"></i> Rede de N&uacute;cleos : Veja no mapa onde ficam todos os parceiros e n&uacute;cleos cient&iacute;ficos do P.F.C.! Se torne um parceiro e entre no mapa!</span>');
                        });

                        $(".rede_titulo_corpo").mouseleave(function () {
                            $(".rede_titulo_corpo").css('background', 'green');
                            $(".rede_titulo_corpo").css('color', 'white');
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });
                        $(".rede_titulo_corpo").click(function () {
                            window.location = '<?php echo $root_html ?>rede';
                        });

                        $(".youtube_botao").mouseover(function () {
                            $(".youtube_botao").css('background', 'white');
                            $(".youtube_botao").css('color', 'red');
                            $("#menu2_titulo").css('background', 'red');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-youtube-play fa-1x"></i> Youtube : conhe&ccedil;a o P.F.C. e acesse outros v&iacute;deos incr&iacute;veis!</span>');
                        });

                        $(".youtube_botao").mouseleave(function () {
                            $(".youtube_botao").css('background', 'red');
                            $(".youtube_botao").css('color', 'white');
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });
                        $(".youtube_botao").click(function () {
                            window.open("https://www.youtube.com/channel/UCeqU7gYhLmev64yXyCJbgjQ");
                        });

                        $(".ajude_corpo").click(function () {
                            window.location = '<?php echo $root_html ?>ajude';
                        });

                        $(".ajude_corpo").mouseover(function () {
                            $(".ajude_corpo").css('background', 'white');
                            $(".ajude_corpo").css('color', '#ff6600');
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-heart fa-1x"></i> Ajude o P.F.C. : a sua solidariedade &eacute; o nosso combust&iacute;vel!</span>');
                        });

                        $(".ajude_corpo").mouseleave(function () {
                            $(".ajude_corpo").css('background', '#ff6600');
                            $(".ajude_corpo").css('color', 'white');
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });
                        
                        $("#ajude_inicio").click(function () {
                            window.location = '<?php echo $root_html ?>ajude';
                        });

                        $("#ajude_inicio").mouseover(function () {
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-heart fa-1x"></i> Ajude o P.F.C. : a sua solidariedade &eacute; o nosso combust&iacute;vel!</span>');
                        });

                        $("#ajude_inicio").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".inicio").click(function () {
                            window.location = '<?php echo $root_html ?>';
                        });

                        $(".inicio").mouseover(function () {
                            $(".inicio").css('background', 'white');
                            $(".inicio").css('color', '#006666');
                            $("#menu2_titulo").css('background', '#006666');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-home fa-1x"></i> In&iacute;cio : clique aqui ou no cabe&ccedil;alho para acessar nossa p&aacute;gina inicial!</span>');
                        });

                        $(".inicio").mouseleave(function () {
                            $(".inicio").css('background', '#006666');
                            $(".inicio").css('color', 'white');
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".sobre").mouseover(function () {
                            $(".sobre").css("background", "white");
                            $(".sobre").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'black');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-file-text-o fa-1x "></i> Sobre : conhe&ccedil;a os objetivos do P.F.C. e o que fazemos para alcan&ccedil;&aacute;-los!</span>');

                        });


                        $(".sobre").click(function () {
                            window.location = '<?php echo $root_html ?>sobre';
                        });

                        $(".sobre").mouseout(function () {
                            $(".sobre").css("background", "black");
                            $(".sobre").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');

                        });
                        
                         $(".sobre_inicio").mouseover(function () {
                            $(".sobre_inicio").css("background", "white");
                            $(".sobre_inicio").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-file-text-o fa-1x "></i> Sobre : conhe&ccedil;a os objetivos do P.F.C. e o que fazemos para alcan&ccedil;&aacute;-los!</span>');

                        });
                        


                        $(".sobre_inicio").click(function () {
                            window.location = '<?php echo $root_html ?>sobre';
                        });

                        $(".sobre_inicio").mouseout(function () {
                            $(".sobre_inicio").css("background", "#ff6600");
                            $(".sobre_inicio").css("color", "white");
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');

                        });

                        $(".sobre_inicio2").mouseover(function () {
                            $(".sobre_inicio2").css("background", "white");
                            $(".sobre_inicio2").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-file-text-o fa-1x "></i> Sobre : conhe&ccedil;a os objetivos do P.F.C. e o que fazemos para alcan&ccedil;&aacute;-los!</span>');

                        });



                        $(".sobre_inicio2").click(function () {
                            window.location = '<?php echo $root_html ?>sobre';
                        });

                        $(".sobre_inicio2").mouseout(function () {
                            $(".sobre_inicio2").css("background", "white");
                            $(".sobre_inicio2").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');

                        });

                        $(".equipe").click(function () {
                            window.location = '<?php echo $root_html ?>equipe';
                        });

                        $(".equipe").mouseover(function () {
                            $(".equipe").css("background", "white");
                            $(".equipe").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'black');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-group fa-1x "></i> Equipe : conhe&ccedil;a nosso time de cientistas!</span>');
                        });
                        $(".equipe").mouseout(function () {
                            $(".equipe").css("background", "black");
                            $(".equipe").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".eventos").click(function () {
                            window.location = '<?php echo $root_html ?>projetos';
                        });

                        $(".eventos").mouseover(function () {
                            $(".eventos").css("background", "white");
                            $(".eventos").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'black');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-cogs fa-1x "></i> Projetos : veja os projetos do P.F.C. e detalhes de cada um deles!</span>');
                        });
                        $(".eventos").mouseout(function () {
                            $(".eventos").css("background", "black");
                            $(".eventos").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".contato").click(function () {
                            window.location = '<?php echo $root_html ?>contato';
                        });

                        $(".contato").mouseover(function () {
                            $(".contato").css("background", "white");
                            $(".contato").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'black');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-phone fa-1x "></i> Contato : d&uacute;vidas e sugest&otilde;es s&atilde;o sempre bem-vindas, gostamos de conversar! </span>');
                        });
                        $(".contato").mouseout(function () {
                            $(".contato").css("background", "black");
                            $(".contato").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo! </span>');
                        });

                        $(".sistema").click(function () {
                            window.location = '<?php echo $root_html ?>sistema';
                        });

                        $(".sistema").mouseover(function () {
                            $(".sistema").css("background", "white");
                            $(".sistema").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'black');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-gear fa-1x "></i> Sistema EAD : área restrita para alunos, professores, parceiros e equipe. </span>');
                        });
                        $(".sistema").mouseout(function () {
                            $(".sistema").css("background", "black");
                            $(".sistema").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });


                        $("#logo").mouseover(function () {
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'black');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-home fa-1x"></i> Logo : clique aqui  para acessar nossa p&aacute;gina inicial.</span>');
                        });

                        $("#logo").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });
                        $(".tecsocial").mouseover(function () {
                            $("#menu2_titulo").css('background', '#F9DD16');
                            $("#menu2_titulo").css('color', '#0038A8');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Selo de Tecnologia Social : clique aqui  para acessar nossa p&aacute;gina no site da Funda&ccedil;&atilde;o Banco do Brasil.</span>');
                        });

                        $(".tecsocial").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });
                        $(".ufscar").mouseover(function () {
                            $("#menu2_titulo").css('background', 'green');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> UFSCar : clique aqui  para acessar a p&aacute;gina da UFSCar - campus Sorocaba.</span>');
                        });

                        $(".ufscar").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });
                        $("#mec").mouseover(function () {
                            $("#menu2_titulo").css('background', 'green');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Governo Federal / MEC : clique aqui  para acessar a p&aacute;gina do Governo Federal.</span>');
                        });

                        $("#mec").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });
                        $(".login_email").mouseover(function () {
                            $(".sistema").css("background", "white");
                            $(".sistema").css("color", "#ff6600");
                            $(".login-email").css("border", "1px solid #ff6600");
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'black');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-gear fa-1x "></i> Digite seu e-mail para acessar o Sistema EAD. </span>');
                        });
                        $(".login_email").mouseout(function () {
                            $(".sistema").css("background", "black");
                            $(".sistema").css("color", "#ff6600");
                            $(".login-email").css("border", "1px solid white");
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".login_senha").mouseover(function () {
                            $(".sistema").css("background", "white");
                            $(".sistema").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'black');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-gear fa-1x "></i> Digite sua senha para acessar o Sistema EAD. </span>');
                        });
                        $(".login_senha").mouseout(function () {
                            $(".sistema").css("background", "black");
                            $(".sistema").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".login_submit").mouseover(function () {
                            $(".sistema").css("background", "white");
                            $(".sistema").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'black');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-gear fa-1x "></i> Clique aqui para acessar o Sistema EAD.</span>');
                        });
                        $(".login_submit").mouseout(function () {
                            $(".sistema").css("background", "black");
                            $(".sistema").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });
                        $(".pref_anhembi").mouseover(function () {
                            $("#menu2_titulo").css('background', 'green');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Prefeitura de Anhembi: Clique aqui para acessar o site da Prefeitura de Anhembi.</span>');
                         });
                        $(".pref_anhembi").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".pref_capao_bonito").mouseover(function () {
                            $("#menu2_titulo").css('background', 'green');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Prefeitura de Cap&atilde;o Bonito: Clique aqui para acessar o site da Prefeitura de Cap&atilde;o Bonito.</span>');
                        });
                        $(".pref_capao_bonito").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".pref_cesario_lange").mouseover(function () {
                            $("#menu2_titulo").css('background', 'green');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Prefeitura de Ces&aacute;rio Lange: Clique aqui para acessar o site da Prefeitura de Ces&aacute;rio Lange.</span>');
                        });
                        $(".pref_cesario_lange").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".pref_ipero").mouseover(function () {
                            $("#menu2_titulo").css('background', 'green');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Prefeitura de Iper&oacute;: Clique aqui para acessar o site da Prefeitura de Iper&oacute;.</span>');
                        });
                        $(".pref_ipero").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".pref_pilar_do_sul").mouseover(function () {
                            $("#menu2_titulo").css('background', 'green');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Prefeitura de Pilar do Sul: Clique aqui para acessar o site da Prefeitura de Pilar do Sul.</span>');
                        });
                        $(".pref_pilar_do_sul").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".pref_salto_de_pirapora").mouseover(function () {
                            $("#menu2_titulo").css('background', 'green');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Prefeitura de Salto de Pirapora: Clique aqui para acessar o site da Prefeitura de Salto de Pirapora.</span>');
                        });
                        $(".pref_salto_de_pirapora").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".pref_sao_miguel").mouseover(function () {
                            $("#menu2_titulo").css('background', 'green');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Prefeitura de S&atilde;o Miguel Arcanjo: Clique aqui para acessar o site da Prefeitura de S&atilde;o Miguel Arcanjo.</span>');
                        });
                        $(".pref_sao_miguel").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".pref_sao_roque").mouseover(function () {
                            $("#menu2_titulo").css('background', 'green');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Prefeitura de S&atilde;o Roque: Clique aqui para acessar o site da Prefeitura de S&atilde;o Roque.</span>');
                        });
                        $(".pref_sao_roque").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".pref_sorocaba").mouseover(function () {
                            $("#menu2_titulo").css('background', 'green');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Prefeitura de Sorocaba: Clique aqui para acessar o site da Prefeitura de Sorocaba.</span>');
                        });
                        $(".pref_sorocaba").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".parc_gerdau").mouseover(function () {
                            $("#menu2_titulo").css('background', 'green');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Gerdau: Clique aqui para acessar o site da Gerdau.</span>');
                        });
                        $(".parc_gerdau").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".parc_uniso").mouseover(function () {
                            $("#menu2_titulo").css('background', 'green');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Universidade de Sorocaba: Clique aqui para acessar o site da UNISO.</span>');
                        });
                        $(".parc_uniso").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".parc_objetivo_sorocaba").mouseover(function () {
                            $("#menu2_titulo").css('background', 'green');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Col&eacute;gio Objetivo Sorocaba: Clique aqui para acessar o site do Col&eacute;gio Objetivo Sorocaba</span>');
                        });
                        $(".parc_objetivo_sorocaba").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".parc_banco_brasil").mouseover(function () {
                            $("#menu2_titulo").css('background', '#F9DD16');
                            $("#menu2_titulo").css('color', '#0038A8');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Funda&ccedil;&atilde;o Banco do Brasil : Clique aqui  para acessar o site da Funda&ccedil;&atilde;o Banco do Brasil.</span>');
                        });

                       $(".parc_banco_brasil").mouseleave(function () {
                                $("#menu2_titulo").css('background', 'black');
                                $("#menu2_titulo").css('color', '#ff6600');
                                $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });
                        
                        $(".proex_ufscar").mouseover(function () {
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'black');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> PROEX: Clique aqui para acessar a p&aacute;gina da Pr&oacute;-Reitoria de Extens&atilde;o.</span>');
                        });

                        $(".proex_ufscar").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".governo_federal").mouseover(function () {
                            $("#menu2_titulo").css('background', '#FBEA0D');
                            $("#menu2_titulo").css('color', '#006000');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle;"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Governo Federal: clique aqui  para acessar a p&aacute;gina do Governo Federal.</span>');
                        });

                        $(".governo_federal").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".mec").mouseover(function () {
                            $("#menu2_titulo").css('background', '#FBEA0D');
                            $("#menu2_titulo").css('color', '#006000');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle;"><i  id="icoParceiro"  class="fa fa-institution fa-1x"></i> Minist&eacute;rio da Educa&ccedil;&atilde;o: clique aqui  para acessar a p&aacute;gina do Minist&eacute;rio da Educa&ccedil;&atilde;o.</span>');
                        });

                        $(".mec").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });


                        $("#google").mouseover(function () {
                            $("#menu2_titulo").css('background', '#333');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-search fa-1x"></i> Pesquise na busca personalizada do <span style="color: #156aeb;">G</span><span style="color: #da4531;">o</span><span style="color: #ffba02  ;">o</span><span style="color: #176dee   ;">g</span><span style="color: #019e5a;">l</span><span style="color: #d94530 ;">e</span>');
                        });

                        $("#google").mouseleave(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });
                        
                        $(".acesso").mouseover(function () {
                            $(".acesso").css("background", "white");
                            $(".acesso").css("color", "#3b5998");
                            $("#menu2_titulo").css('background', '#3b5998');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-right fa-1x "></i> Entre no site : clique aqui para acessar o nosso portal!</span>');
                        });
                        $(".acesso").mouseout(function () {
                            $(".acesso").css("background", "#3b5998");
                            $(".acesso").css("color", "white");
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".blog").mouseover(function () {
                            $(".blog").css("background", "white");
                            $(".blog").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-rss fa-1x "></i> Blog: Clique aqui para acessar nosso blog!</span>');
                        });
                        $(".blog").mouseout(function () {
                            $(".blog").css("background", "#ff6600");
                            $(".blog").css("color", "white");
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".noticias").mouseover(function () {
                            $(".noticias").css("background", "white");
                            $(".noticias").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-newspaper-o fa-1x "></i> Notícias: Clique aqui para acessar as notícias!</span>');
                        });
                        $(".noticias").mouseout(function () {
                            $(".noticias").css("background", "#ff6600");
                            $(".noticias").css("color", "white");
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".eventos_destaque").mouseover(function () {
                            $(".eventos_destaque").css("background", "white");
                            $(".eventos_destaque").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-calendar-o fa-1x "></i> Eventos: Clique aqui para acessar nossos eventos!</span>');
                        });
                        $(".eventos_destaque").mouseout(function () {
                            $(".eventos_destaque").css("background", "#ff6600");
                            $(".eventos_destaque").css("color", "white");
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".publicacoes").mouseover(function () {
                            $(".publicacoes").css("background", "white");
                            $(".publicacoes").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-book fa-1x "></i> Public&ccedil;&otilde;es: Clique aqui para acessar nossas publica&ccedil;&otilde;es!</span>');
                        });
                        $(".publicacoes").mouseout(function () {
                            $(".publicacoes").css("background", "#ff6600");
                            $(".publicacoes").css("color", "white");
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });

                        $(".guia_vestibulando").mouseover(function () {
                            $(".guia_vestibulando").css("background", "white");
                            $(".guia_vestibulando").css("color", "#ff6600");
                            $("#menu2_titulo").css('background', '#ff6600');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-graduation-cap fa-1x "></i> Guia do Vestibulando: Clique aqui para acessar nosso guia do vestibulando!</span>');
                        });
                        $(".guia_vestibulando").mouseout(function () {
                            $(".guia_vestibulando").css("background", "#ff6600");
                            $(".guia_vestibulando").css("color", "white");
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo!</span>');
                        });
                        

                        (function () {
                            var cx = '015382384524993887066:oesn6cpjzay';
                            var gcse = document.createElement('script');
                            gcse.type = 'text/javascript';
                            gcse.async = true;
                            gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                                    '//cse.google.com/cse.js?cx=' + cx;
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(gcse, s);
                        })();


                        $(".doacao").mouseover(function () {
                            $("#menu2_titulo").css('background', '#660000');
                            $("#menu2_titulo").css('color', 'white');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle">Clique para doar! Obrigado  <i class="fa fa-smile-o"></i></span>');
                        });
                        $(".doacao").mouseout(function () {
                            $("#menu2_titulo").css('background', 'black');
                            $("#menu2_titulo").css('color', '#ff6600');
                            $("#menu2_titulo").html('<span style="display:inline-block; vertical-align:middle"><i class="fa fa-arrow-circle-down fa-1x"></i> Role para baixo para ver mais conteúdo!</span>');


                        });

                        $("#pfisica_inicial").mouseover(function () {
                            $("#pfisica_inicial").hide();
                            $(".barra").hide();
                            $("#pjuridica").stop().animate({width: '20%'});
                            $("#pfisica").stop().animate({width: '80%'});
                            $("#pfisica_final").show();
                        });

                        $("#pfisica_final").mouseleave(function () {
                            $("#pjuridica").stop().animate({width: '50%'});
                            $("#pfisica").stop().animate({width: '50%'});
                            $("#pfisica_inicial").show();
                            $("#pfisica_final").hide();
                        });

                        $("#pjuridica_inicial").mouseover(function () {
                            $("#pjuridica_inicial").hide();
                            $(".barra").hide();
                            $("#pfisica").stop().animate({width: '20%'});
                            $("#pjuridica").stop().animate({width: '80%'});
                            $("#pjuridica_final").show();

                        });
                        $("#pjuridica_final").mouseleave(function () {
                            $("#pjuridica").stop().animate({width: '50%'});
                            $("#pfisica").stop().animate({width: '50%'});
                            $("#pjuridica_inicial").show();
                            $("#pjuridica_final").hide();


                        });

                        $("#corpo").mouseleave(function () {
                            $("#pfisica").stop().animate({width: '50%'});
                            $("#pjuridica").stop().animate({width: '50%'});
                            $(".barra").show();
                            $("#noticias_principal").hide();
                            //$("#envia_evento").hide();
                            $("#eventos_destaques_principal").hide();
                            $("#publicacoes_principal").hide();
                            $("#guia_vest_principal").hide();
                            $("#principal_destaques").show();
                            $("#noticias").attr('class', 'ob h-1-4');
                            $("#eventos_destaques").attr('class', 'ob h-1-4');
                            $("#publicacoes").attr('class', 'ob h-1-4');
                            $("#guia_vest").attr('class', 'ob h-1-4');
                        });

                        $("#noticias").click(function () {
                            $("#principal_destaques").hide();
                            $("#eventos_destaques_principal").hide();
                            $("#publicacoes_principal").hide();
                            $("#guia_vest_principal").hide();
                            $("#noticias_principal").show();
                        });
                        $("#envia_botao").click(function () {
                            $("#corpo").hide();

                            $("#envia_evento").show();
                        });
                        $("#voltar_botao").click(function () {
                            $("#envia_evento").hide();
                            $("#corpo").show();

                        });


                        $("#eventos_destaques").click(function () {
                            $("#principal_destaques").hide();
                            $("#noticias_principal").hide();
                            $("#publicacoes_principal").hide();
                            $("#guia_vest_principal").hide();
                            $("#eventos_destaques_principal").show();
                        });


                        $("#publicacoes").click(function () {
                            $("#principal_destaques").hide();
                            $("#eventos_destaques_principal").hide();
                            $("#noticias_principal").hide();
                            $("#guia_vest_principal").hide();
                            $("#publicacoes_principal").show();
                        });


                        $("#guia_vest").click(function () {
                            $("#principal_destaques").hide();
                            $("#eventos_destaques_principal").hide();
                            $("#publicacoes_principal").hide();
                            $("#noticias_principal").hide();
                            $("#guia_vest_principal").show();

                        });
                        var cor;

                        $(".tipo_conteudo").mouseenter(function () {
                            cor = $(this).css("background");
                            $(this).css("background", "white");
                        });
                        $(".tipo_conteudo").mouseleave(function () {
                            $(this).css("background", cor);
                        });

                        /*$(window).scroll(function() {
                            if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
                                $(window).unbind('scroll');
                                alert("near bottom!");
                            }
                        });*/

                      /*
                      ======== MOUSE ENTER E MOUSE LEAVE DESTAQUES ========

                        $(".destaque1").mouseenter(function () {
                            $('.hover-text-1').css("color", "#ff6600");
                        });
                        $(".destaque1").mouseleave(function () {
                            $('.hover-text-1').css("color", "#ffffff");
                        });

                        $(".destaque-2").mouseenter(function () {
                            $('.hover-text-2').css("color", "#ff6600");
                        });
                        $(".destaque-2").mouseleave(function () {
                            $('.hover-text-2').css("color", "#ffffff");
                        });

                        $(".destaque-3").mouseenter(function () {
                            $('.hover-text-3').css("color", "#ff6600");
                        });
                        $(".destaque-3").mouseleave(function () {
                            $('.hover-text-3').css("color", "#ffffff");
                        });*/

                        document.createElement('script').src = "https://www.youtube.com/iframe_api";

                        function onPlayerStateChange(event) {
                            if (event.data == YT.PlayerState.PLAYING) {
                                $(".slider").pause();
                            } else {
                                $(".slider").tick();
                            }
                        }




                    });

        </script>
    </head>

