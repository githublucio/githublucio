<?php
	error_reporting( error_reporting() & ~E_NOTICE );
	include "config/koneksaun.php";
	
	//Menu Valor
if ($_GET['page']=="valor_aula") {
    include "page/valor/valor_aula.php";
}
if ($_GET['page']=="valor_estudante") {
    include "page/valor/valor_estudante.php";
}
if ($_GET['page']=="valor_semestre") {
    include "page/valor/valor_semestre.php";
}
if ($_GET['page']=="valor_transcricao") {
    include "page/valor/valor_transcricao.php";
}
if ($_GET['page']=="valor_certidao_transcricao") {
    include "page/valor/valor_certidao_transcricao.php";
}	

//Menu Relatorio
if ($_GET['page']=="relatorio_estudante_kada_tinan") {
    include "page/relatorio/relatorio_estudante_kada_tinan.php";
}
if ($_GET['page']=="relatorio_estudante_transferensia") {
    include "page/relatorio/relatorio_estudante_transferensia.php";
}
if ($_GET['page']=="relatorio_estudante_ativo") {
    include "page/relatorio/relatorio_estudante_ativo.php";
}
if ($_GET['page']=="relatorio_gradua") {
    include "page/relatorio/relatorio_gradua.php";
}

if ($_GET['page']=="relatorio_desistiu") {
    include "page/relatorio/relatorio_desistiu.php";
}

	//Menu Grafico
if ($_GET['page']=="grafico_kada_tinan") {
    include "page/grafico/grafico_kada_tinan.php";
}
if ($_GET['page']=="grafico_gender") {
    include "page/grafico/grafico_gender.php";
}
if ($_GET['page']=="grafico_status") {
    include "page/grafico/grafico_status.php";
}
if ($_GET['page']=="grafico_munisipio") {
    include "page/grafico/grafico_munisipio.php";
}

	
 //aula   
if ($_GET['page']=="aula") {
    include "page/aula/aula.php";
}
if ($_GET['page']=="aula2") {
    include "page/aula/aula2.php";
}
if ($_GET['page']=="lista_aula") {
    include "page/aula/lista_aula.php";
}
if ($_GET['page']=="detail_aula") {
    include "page/aula/detail_aula.php";
}
if ($_GET['page']=="add_aula") {
    include "page/aula/add_aula.php";
}
if ($_GET['page']=="dados_aula") {
    include "page/aula/dados_aula.php";
}


	// Menu Dadus
	//Estudante
if ($_GET['page']=="dados_estudante") {
    include "page/estudante/dados_estudante.php";
}
if ($_GET['page']=="aumenta_estudante") {
    include "page/estudante/aumenta_estudante.php";
}
if ($_GET['page']=="hamos_estudante") {
    include "page/estudante/hamos_estudante.php";
}
if ($_GET['page']=="update_estudante") {
    include "page/estudante/update_estudante.php";
}
//Remata

//Docente
if ($_GET['page']=="dados_docente") {
    include "page/docente/docente.php";
}
if ($_GET['page']=="hamos_docente") {
    include "page/docente/hamos_docente.php";
}

if ($_GET['page']=="aumenta_docente") {
    include "page/docente/aumenta_docente.php";
}
if ($_GET['page']=="update_docente") {
    include "page/docente/update_docente.php";
}

//Remata

//Materia
if ($_GET['page']=="dados_materia") {
    include "page/materia/materia.php";
}
if ($_GET['page']=="hamos_materia") {
    include "page/materia/hamos_materia.php";
}
if ($_GET['page']=="aumenta_materia") {
    include "page/materia/aumenta_materia.php";
}
if ($_GET['page']=="update_materia") {
    include "page/materia/update_materia.php";
}
//Remata

//Turma
if ($_GET['page']=="dados_turma") {
    include "page/turma/dados_turma.php";
}
if ($_GET['page']=="aumenta_turma") {
    include "page/turma/aumenta_turma.php";
}
if ($_GET['page']=="hamos_turma") {
    include "page/turma/hamos_turma.php";
}
if ($_GET['page']=="update_turma") {
    include "page/turma/update_turma.php";
}
//Remata

	//Ano
if ($_GET['page']=="dados_ano") {
    include "page/ano/ano.php";
}
if ($_GET['page']=="aumenta_ano") {
    include "page/ano/aumenta_ano.php";
}
if ($_GET['page']=="hamos_ano") {
    include "page/ano/hamos_ano.php";
}
if ($_GET['page']=="update_ano") {
    include "page/ano/update_ano.php";
}
//Remata

//Status
if ($_GET['page']=="dados_status") {
    include "page/status/dados_status.php";
}
if ($_GET['page']=="aumenta_status") {
    include "page/status/aumenta_status.php";
}
if ($_GET['page']=="hamos_status") {
    include "page/status/hamos_status.php";
}
if ($_GET['page']=="update_status") {
    include "page/status/update_status.php";
}
//Remata


	// Menu Pauta
if ($_GET['page']=="pauta_estudante") {
    include "page/pauta_geral/pauta_estudante.php";
}
if ($_GET['page']=="plano_pauta") {
    include "page/pauta_geral/plano_pauta.php";
}
if ($_GET['page']=="plano2_pauta") {
    include "page/pauta_geral/plano2_pauta.php";
}

	// Menu Transcricao
if ($_GET['page']=="transcricao_estudante") {
    include "page/transcricao/transcricao_estudante.php";
}
if ($_GET['page']=="plano_transcricao") {
    include "page/transcricao/plano_transcricao.php";
}
if ($_GET['page']=="plano2_transcricao") {
    include "page/transcricao/plano2_transcricao.php";
}
?>