 <?php
//EVENTOS
$titulo = 'EAD - Aprendizado pela descoberta - Programa Futuro Cientista®';
$descricao = 'Veja detalhes do novo projeto de E.A.D. do P.F.C.';
$img = '';
include '../web/seguranca.php';
include '../web/script.php';
include '../web/header.php';
?>

<div id="menu1">
    <div class="container " >
        <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-graduation-cap fa-1x" ></i> EAD </span>
    </div>
</div>
<div id="corpo" style="overflow-y: scroll">
  
    <br><br> Veja abaixo as informações sobre o novo projeto de E.A.D. do P.F.C.<br><br>
    
    <div style="text-align: left; width: 70%; position: relative; right: -15%; overflow-y: scroll;">
    <i class="fa fa-check-square fa-1x"></i> Product Owner:<br> 
    Prof. Dr. Fábio de Lima Leite.<br><br>
    <i class="fa fa-check-square fa-1x"></i> Equipe:<br>
    Caio Perroni Gnecco (Gerente de projeto e desenvolvedor), Lucas da Rocha Pereira (Desenvolvedor) e Fábio Almeida Rodrigues Pistilli (Desenvolvedor).<br><br>
    <i class="fa fa-check-square fa-1x"></i> Processo:<br>
    Scrum adaptado (Reuniões semanais, Backlog, Sprints e Quadro Kanban).<br><small>Informações sobre o backlog e as sprints estão nos documentos do projeto e no Quadro Kanban.</small><br><br>
    <i class="fa fa-check-square fa-1x"></i> Documentos de Projeto:<br>
    <a class="br" href="relatorio_fase1.pdf"> <i class="fa fa-file-pdf-o fa-1x" style="color: red"></i> - Relatório Fase 1 (Termo de abertura do projeto)</a><br>
    <a class="br" href="relatorio_fase1_corrigido.pdf"> <i class="fa fa-file-pdf-o fa-1x" style="color: red"></i> - Relatório Fase 1 corrigido</a><br>
    <a class="br" href="relatorio_fase1_corrigido_v2.pdf"> <i class="fa fa-file-pdf-o fa-1x" style="color: red"></i> - Relatório Fase 1 corrigido V2</a><br>
    <a class="br" href="diagrama_uml_geral.png"><i class="fa fa-file-image-o fa-1x" style="color: red"></i> - Modelagem UML Geral</a><br>
    <a class="br" href="diagrama_uml_geral_corrigido.png"><i class="fa fa-file-image-o fa-1x" style="color: red"></i> - Modelagem UML Geral corrigida </a><br>
    <a class="br" href="relatorio_fase2(ihc).pdf"> <i class="fa fa-file-pdf-o fa-1x" style="color: red"></i> - Relatório Fase 2 (IHC)</a>
    <br><br>
    <i class="fa fa-check-square fa-1x"></i> Quadro Kanban:<br><br>
    Legenda:<br><small>
    <i class="fa fa-check-square fa-1x" style="color: green"></i>: Tarefa "Planejada/Concluída" com sucesso.<br>
    <i class="fa fa-check-square fa-1x" style="color: red"></i>: Tarefa "Planejada/Concluída" porém precisa de correção ou ajuste.<br>
    <i class="fa fa-check-square fa-1x" style="color: black"></i>: Tarefa "Em execução".</small>
    <br><br>
    
    <div style="text-align: center">
        <table class="tabela">
        <thead>
        <td style="text-align: center">
        <strong>Tarefa (Sprint)</strong>
        </td>
        <td style="text-align: center">
          <strong>  Descrição</strong>
        </td>
        <td style="text-align: center">
           <strong> Planejada</strong>
        </td>
        <td style="text-align: center">
           <strong> Em execução</strong>
        </td>
        <td style="text-align: center">
           <strong> Concluída</strong>
        </td>
        <td style="text-align: center">
           <strong> Hrs previstas</strong>
        </td>
        <td style="text-align: center">
           <strong> Hrs ultilizadas</strong>
        </td>
            
        </th>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">IHC-001 (1)</td>
                <td style="text-align: center">Analisar contexto para definir técnicas de coleta a serem aplicadas e métricas de avaliação.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">2</td>
                <td style="text-align: center">2</td>

            </tr> 
            <tr>
                <td style="text-align: center">IHC-002 (1)</td>
                <td style="text-align: center">Aplicar técnicas de coleta.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">5</td>
                <td style="text-align: center">5</td>
            </tr> 
            <tr>
                <td style="text-align: center">IHC-003 (1)</td>
                <td style="text-align: center">Analisar resultados da coleta.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">2</td>
                <td style="text-align: center">2</td>
            </tr> 
            <tr>
                <td style="text-align: center">IHC-004 (1)</td>
                <td style="text-align: center">Desenvolver texto para o relatório baseado nos resultados da aplicação das técnicas.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">2</td>
                <td style="text-align: center">2</td>
            </tr> 
            <tr>
                <td style="text-align: center">IHC-005 (1)</td>
                <td style="text-align: center">Desenvolver diretrizes para criação do perfil de usuário (persona) baseado nos resultados da coleta.</td> 
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">4</td>
                <td style="text-align: center">3</td>
            </tr> 
            <tr>
                <td style="text-align: center">IHC/PDS-006 (1)</td>
                <td style="text-align: center">Projetar as telas e as interações levando em conta os requisitos definidos para o projeto, os resultados da coleta, as diretrizes definidas na(s) persona(s) criada(s) e as heurísticas de Nielsen.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">4</td>
                <td style="text-align: center">2</td>
            </tr> 
            <tr>
                <td style="text-align: center">PDS-007 (1)</td>
                <td style="text-align: center">Criar tabelas do banco de dados referentes a modelagem do problema.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">20</td>
                <td style="text-align: center">22</td>
            </tr> 
            <tr>
                <td style="text-align: center">PDS-008 (1)</td>
                <td style="text-align: center">Implementar procedures de inserção, remoção, edição e consulta do banco de dados.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">15</td>
                <td style="text-align: center">17</td>
            </tr> 
            <tr>
                <td style="text-align: center">IHC-009 (1)</td>
                <td style="text-align: center">Definir de técnica(s) de IHC a serem aplicadas.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">2</td>
                <td style="text-align: center">3</td>
            </tr> 
            <tr>
                <td style="text-align: center">IHC-010 (1)</td>
                <td style="text-align: center">Aplicar técnica(s) de Ideação de IHC.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">10</td>
                <td style="text-align: center">11</td>
            </tr> 
            <tr>
                <td style="text-align: center">IHC-011 (1)</td>
                <td style="text-align: center">Projetar e implementar o Protótipo de IHC.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">15</td>
                <td style="text-align: center">13</td>
            </tr> 
            <tr>
                <td style="text-align: center">IHC/PDS-012 (1)</td>
                <td style="text-align: center">Implementar telas de interface com o usuário.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">30</td>
                <td style="text-align: center">25</td>
            </tr> 
            <tr>
                <td style="text-align: center">PDS-013 (1)</td>
                <td style="text-align: center">Implementar função de “cadastrar conteúdo”.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">15</td>
                <td style="text-align: center">12</td>
            </tr> 
            <tr>
                <td style="text-align: center">PDS-014 (1)</td>
                <td style="text-align: center">Implementar função de “buscar conteúdo”.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">13</td>
                <td style="text-align: center">10</td>
            </tr> 
            <tr>
                <td style="text-align: center">PDS-015 (2)</td>
                <td style="text-align: center">Testar  e corrigir sistema.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">40</td>
                <td style="text-align: center">44</td>
            </tr> 
            <tr>
                <td style="text-align: center">PDS-016 (2)</td>
                <td style="text-align: center">Implementar função de “recomendar conteúdo”</td>
                <td style="text-align: center"></td>                
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">25</td>
                <td style="text-align: center">27</td>
            </tr> 
            <tr>
                <td style="text-align: center">IHC-017 (2)</td>
                <td style="text-align: center">Aplicar teste(s) de Usabilidade de IHC.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: black"></i></td>
                <td style="text-align: center"></td>
                <td style="text-align: center">20</td>
                <td style="text-align: center">20</td>
            </tr> 
            <tr>
                <td style="text-align: center">IHC-018 (2)</td>
                <td style="text-align: center">Analisar resultados dos testes de Usabilidade.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: black"></i></td>
                <td style="text-align: center"></td>
                <td style="text-align: center">10</td>
                <td style="text-align: center">8</td>
            </tr> 
            <tr>
                <td style="text-align: center">IHC-019 (1)</td>
                <td style="text-align: center">Preencher checklist com heurísticas contempladas até a Sprint 1.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">2</td>
                <td style="text-align: center">3</td>
            </tr> 
            <tr>
                <td style="text-align: center">IHC-020 (2)</td>
                <td style="text-align: center">Preencher checklist com heurísticas contempladas até a Sprint 2.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">2</td>
                <td style="text-align: center">1</td>
            </tr> 
            <tr>
                <td style="text-align: center">IHC-021 (2)</td>
                <td style="text-align: center">Detectar e listar deficiências do sistema.</td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
                <td style="text-align: center"><i class="fa fa-check-square fa-1x" style="color: green"></i></td>
                <td style="text-align: center">15</td>
                <td style="text-align: center">13</td>
            </tr> 
           
            
        </tbody>
            
    </table><br>
        
        <small> Total de horas previstas (Sprint 1/Sprint 2): 253 hrs (141 hrs/112 hrs). <br>
            Total de horas ultilizadas até agora (Sprint 1/Sprint 2): 248 hrs (132 hrs/116 hrs).  <br></small>
        </div>
    
    
    <br><br>
    
    <i class="fa fa-check-square fa-1x"></i> Status Report Semanal:<br><br>
    <b>15/09/2015</b> : Foram finalizados o termo de abertura de projeto, as tarefas do backlog IHC-001 a IHC-004 e a apresentação inicial para as disciplinas de IHC e PDS. 
    Esta semana ocorrerá a apresentação para o Product Owner (Prof. Dr. Fábio de Lima Leite) e a realização das tarefas IHC-005, IHC/PDS-006, PDS-007, PDS-008 e IHC-009.
    <br><br>
    <b>22/09/2015</b> : A apresentação para o Product Owner foi adiada para semana que vem, recebemos o feedback da Professora Dra. Luciana Zaina e serão necessárias algumas correções referentes a
    disciplina de IHC, as mesmas devem estar no relatório até 29/09/2015 e são de responsabilidade de toda equipe. As tarefas de IHC que tiveram inicio nesta semana (IHC-005, IHC/PDS-006, IHC-009) serão extendidas até 
    a próxima semana para aplicação das correções. As tarefas de PDS (PDS-007, PDS-008) foram concluídas. Para esta semana a equipe pretende terminar as tarefas de IHC restantes e avançar pelas tarefas IHC-010, IHC-011 e IHC/PDS-012.
    <br><br>
     <b>29/09/2015</b> : A apresentação para o Product Owner será feita no dia 31/09, As correções de IHC foram planejadas e iniciadas, porém não foram terminadas. O prazo para o relatório corrigido assim como a finalização das tarefas de 005 a 012 
     foi extendido para 6/10. A equipe se reunirá durante o final de semana (3 e 4/10) para garantir que o projeto siga o cronograma.
     <br><br>
      <b>08/10/2015</b> : A apresentação para o Product Owner ainda não aconteceu e ainda não há uma nova data. As correções de IHC ainda não foram concluídas e serão entregues com a nova versão da documentação
      até 13/10. A reunião do final de semana serviu como planejamento para as tarefas que estão sendo corrigidas e executadas (005 a 014 e 019), foram dividas as tarefas de correção e implementação. A equipe acredita que finalizara o
     primeiro MVP no prazo.
     <br><br>
      <b>13/10/2015</b> : As correções de IHC foram concluídas e ajustes foram feitos no escopo e na modelagem, porém nenhum requisito foi alterado. As alterações estão presentes nos documentos: <a class="br" href="relatorio_fase1_corrigido.pdf"> <i class="fa fa-file-pdf-o fa-1x" style="color: red"></i> - Relatório Fase 1 corrigido</a> e <a class="br" href="diagrama_uml_geral_corrigido.png"><i class="fa fa-file-image-o fa-1x" style="color: red"></i> - Modelagem UML Geral corrigida </a>.
      <br>A implementação está atrasada, o prazo para apresentação é 15/10 para IHC e 20/10 para PDS. A equipe deve ter todo o sistema pronto em 15/10 assim como o relatório da Fase 2 de IHC.

           <br><br>
           <b>20/10/2015</b> : A equipe finalizou a primeira versão do produto e apresentou o trabalho em ambas as disciplinas.<br>
           Na disciplina de IHC o feedback foi positivo e as tarefas para a Sprint 2 já devem ser planejadas. Após a apresentação para a disciplina de PDS, a equipe percebeu que serão necessárias algumas correções no sistema.<br> 
           Levando em consideração o feedback e testes feitos após a apresentação, a equipe decidiu reescrever a parte do Backlog referente a Sprint 2 e possivelmente alguns requisitos funcionais para melhor descrição e gerenciamento das tarefas.<br>
           O prazo para a reescrita e nova versão do relatório é 27/10. Esta semana foi adicionado o  <a class="br" href="relatorio_fase2(ihc).pdf"> <i class="fa fa-file-pdf-o fa-1x" style="color: red"></i> - Relatório Fase 2 (IHC)</a> aos documentos do projeto.<br>
           O sistema pode ser acessado pelo link: <a class="br" href="http://futurocientista.net/sistema">futurocientista.net/sistema</a> com os dados:<br>
           <b>Email:</b> teste@aluno.com<br>
           <b>Senha:</b> testealuno .<br>
           Inicialmente foram cadastrados apenas alguns documentários. A equipe deve alimentar mais o banco e fazer correções referentes a busca e cadastro até 27/10 para começar o desenvolvimento das tarefas da Sprint 2.
           <br><br>
           
           <b>27/10/2015</b> : Foi adicionado o Quadro Kaban na página do projeto.<br>
          Foram definidas as correções que devem ser feitas em relação ao cadastro de conteúdo (problemas com charset),<br>
           a busca de conteúdo (query SQL e lógica para construção da mesma) e a interface (AJAX para cadastro, validação de dados e mensagens de retorno). As mesmas já foram iniciadas junto com os testes.<br>
           A tarefa PDS-015 (Testar e corrigir sistema) será executada durante toda a Sprint 2.<br>
           Foi iniciada também a implementação da função para recomendar conteúdo.<br>
           Ficou decido que o planejamento das tarefas IHC-017 e 018 deve ser revisto e as dúvidas devem ser tiradas nessa Quinta (29/10) com a Professora Dra. Luciana Zaina.<br>
           Foi adicionado aos documentos do projeto o <a class="br" href="relatorio_fase1_corrigido_v2.pdf"> <i class="fa fa-file-pdf-o fa-1x" style="color: red"></i> - Relatório Fase 1 corrigido V2</a> que conta com pequenas alterações nos Requisitos Funcionais e no Backlog (já presentes no Quadro Kanban).<br>
           Toda a equipe está participando ativamente de todas as tarefas.
            
            <br><br>
            
             <b>17/11/2015</b> : O projeto atrasou devido a demandas mais urgentes que surgiram.<br>
            Foram corrigidos as procedures referentes a tarefa 008.<br>
           A tarefa 012 está marcada para correção pois as telas referentes a recomendação e a versão mobile no geral precisam de ajustes.<br>
           Ainda devem ser adicionados mais conteúdos ao sistema para facilitar os testes.<br>
           A função de recomendação foi implementada porém precisa de ajustes. Isso está atrasando o teste de usabilidade que foi inicialmente marcado para semana passada e deve ocorrer ainda esta semana.<br>
           As demais tarefas da Sprint 2 estão atrasadas e será preciso um grande esforço da equipe concluir o projeto com sucesso.<br>
          
            
            <br><br>
            
             <b>24/11/2015</b> : Apresentação Final para a discplina de PDS ocorre hoje, o sistema está pronto e foi ao ar em sua última versão ontem.<br>
            O sistema ficou pronto para os testes de usabilidade que ocorreram nesta última semana e foram feitos em servidor local pois a aplicação precisava de ajustes.<br>
           Os ajustes não atrapalharam e os primeiros testes de usabilidade ocorreram bem. A análise dos resultados e finalização do relatório de IHC ocorrerão durante o dia de hoje, após a apresentação.<br>
           A tarefa IHC-017 foi mantida como "em execução" pois ainda há coleta de dados para ser discutida e possíveis testes a serem feitos hoje com outros grupos de foco interessantes para o projeto.<br>
           Novos conteúdos foram adicionados durante o teste de usabilidade e pela equipe.<br>
           A equipe se esforçou muito para alcançar o sucesso, ainda sim existem deficiências no sistema que serão comentadas na apresentação de hoje, descritas no relatório final de IHC e devem ser corrigidas com a sequência do projeto.<br>
          
            
            <br><br>
            
            
           
           

     
      
     <br><br>
    </div>
        
</div>


<?php
include '../web/footer.php';

function remover_espacos($texto) {
    return preg_replace('/\s/', '', $texto);
}

function remover_acentos($texto, $charset = 'UTF-8') {
    return iconv($charset, 'ASCII//TRANSLIT//IGNORE', $texto);
}

function removeAcentos($string, $slug = false) {
	$string = strtolower($string);
	// CÃ³digo ASCII das vogais
	$ascii['a'] = range(224, 230);
	$ascii['e'] = range(232, 235);
	$ascii['i'] = range(236, 239);
	$ascii['o'] = array_merge(range(242, 246), array(240, 248));
	$ascii['u'] = range(249, 252);

	// CÃ³digo ASCII dos outros caracteres
	$ascii['b'] = array(223);
	$ascii['c'] = array(231);
	$ascii['d'] = array(208);
	$ascii['n'] = array(241);
	$ascii['y'] = array(253, 255);

	foreach ($ascii as $key=>$item) {
		$acentos = '';
		foreach ($item AS $codigo) $acentos .= chr($codigo);
		$troca[$key] = '/['.$acentos.']/i';
	}

	$string = preg_replace(array_values($troca), array_keys($troca), $string);

	// Slug?
	if ($slug) {
		// Troca tudo que nÃ£o for letra ou nÃºmero por um caractere ($slug)
		$string = preg_replace('/[^a-z0-9]/i', $slug, $string);
		// Tira os caracteres ($slug) repetidos
		$string = preg_replace('/' . $slug . '{2,}/i', $slug, $string);
		$string = trim($string, $slug);
	}

   $string = eregi_replace('( )','-',$string);
    //tirando outros caracteres invalidos
    $string = eregi_replace('[^a-z0-9\-]','',$string);
	$string = eregi_replace('--','-',$string);
	return $string;
}
/*
echo removeAcentos("Ciência Viva - Viagem no Tempo");
echo remover_acentos(remover_espacos("Ciência Viva - Viagem no Tempo"));*/
?>