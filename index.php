<?php


require_once ('Model/Aluno.php');
require_once ('Model/Turma.php');

$alunos = array();

/*
$turma = new Turma("T-150");
$turma->adicionarAluno(new Aluno("Ronildo Ferreira",12345,7.4,8,6.5,7));
$turma->adicionarAluno(new Aluno("Renan de Sousa",54321,6,8.5,5,9));
$turma->adicionarAluno(new Aluno("Douglas Augusto",19876,8,5,10,7));
$turma->adicionarAluno(new Aluno("Francisco Antonio",29483,7,7,9.6,10));
$turma->adicionarAluno("Luis Guilherme",28492,5,8,8,6));
$turma->adicionarAluno(new Aluno("Maria de Fatima",59482,6,9,9,6));
*/


function instanciarAlunos()
{
		$alunos = array();
/*01*/	$alunos[] = new Aluno("Ronildo Ferreira",12345,7.4,8,6.5,7);
/*02*/	$alunos[] = new Aluno("Renan de Sousa",54321,6,8.5,5,9);
/*03*/	$alunos[] = new Aluno("Douglas Augusto",19876,8,5,10,7);
/*04*/	$alunos[] = new Aluno("Francisco Antonio",29483,7,7,9.6,10);
/*05*/	$alunos[] = new Aluno("Luis Guilherme",28492,5,8,8,6);
/*Erro para adicionar esse aluno
06*/	$alunos[] = new Aluno("Maria de Fatima",59482,6,9,9,6);


	return $alunos;
}


function adicionarAlunos($turma, $alunos)
{
	foreach ($alunos as $aluno) 
{
	if($turma->adicionarAluno($aluno))
	{
		?>
		<div class="alert alert-success" role="alert">
  Aluno(a): <b><?php  echo $aluno->getNome()?></b> inserido com Sucesso!
</div>
<?php
	}
	else
	{
		?>

<div class="alert alert-danger" role="alert">
<?php echo "<br>Erro! Turma Cheia! ";
?><b><?php echo $aluno->getNome();?></b>
</div>
		<?php
	}
}

return $turma;
}


function exibirAluno($aluno)
{
?>

<h4><?php echo $aluno->getNome()?></h4>
<table class="table">
	<thead>
		<tr>
			<th>Nota 1</th>
			<th>Nota 2</th>
			<th>Nota 3</th>
			<th>Nota 4</th>
			<th>Media</th>
		</tr>
	</thead>
	<tbody>
	<tr>
			<th><?php echo $aluno->getNota1()?></th>
			<th><?php echo $aluno->getNota2()?></th>
			<th><?php echo $aluno->getNota3()?></th>
			<th><?php echo $aluno->getNota4()?></th>
			<th><?php echo $aluno->getMedia()?></th>
		</tr>
	</tbody>

</table>
<?php
}

$alunos = instanciarAlunos();

$turma = new Turma("T-150");

//Testando Turma
/*
$aluno1 = new Aluno();
$aluno1->setNome("Ronildo Ferreira");
$aluno1->setRa(123456789);
$aluno1->setNota1(7.5);
$aluno1->setNota2(8);
$aluno1->setNota3(6.5);
$aluno1->setNota4(7);


$aluno2 = new Aluno();
$aluno2->setNome("Renan Sousa");
$aluno2->setRa(9876543210);
$aluno2->setNota1(5);
$aluno2->setNota2(9);
$aluno2->setNota3(6);
$aluno2->setNota4(9.5);



echo $aluno1->getNome();
echo $aluno1->getRa();
echo $aluno1->getMedia();


$tuma1 = new Turma("Turma - 01");

if($tuma1->adicionarAluno($aluno1))
{
	echo "<br>Adicionou ".$aluno1->getNome()."<br>";
}
else
{
	echo "<br>Erro! Turma Cheia!";
}


if($tuma1->adicionarAluno($aluno2))
{
	echo "Adicionou ".$aluno2->getNome()."<br>";
}
else
{
	echo "<br>Erro! Turma Cheia!";
}


echo "Media: ".$tuma1->mediaTurma();

*/
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
 	<title>Controle turmas</title>
</head>

<body>

<div class="container">

<div class="row">
<span class="badge  bg-light text-dark">
<h3>Curso: Sistemas para Internet - Unicesumar</h3>	
	<h4>Disciplina: Back End II</h4>
	<h5>Aluno: Ronildo Ferreira da Silva - RA: 21161874-5</h5> 
</span>
</div>
</div>
<div class="container">
	<div class="row">
	<span class="badge bg-info">
		<h2>Controle de notas de turmas</h2>
		<div class="col">
		<?php adicionarAlunos($turma, $alunos);?>
		<hr>
		<h3>Notas dos alunos da turma <?php echo $turma->getNome()?><h3>
		<h4>Média da Turma <span class="badge bg-primary"><?php echo $turma->mediaTurma();?></span></h4>
		<br>
		</span>	
	</hr>
		<?php  

		foreach($turma->getAlunos() as $aluno)
		{
			exibirAluno($aluno);
		}
		
		

		/*for($i = 0; $i < 5 ; $i++){
			$item = exibirAluno($alunos[$i]);
			echo $item;
		}
		*/?>

		</div>
	</div>
</div>

</body>

</html>
