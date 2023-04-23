<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-eng'

$conexao = new mysqli ($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao ->connect_errno)
{
    echo"Erro";

}
else
{
    echo "Conexão efetuada com sucesso";
}


	if(isset($_POST['enviar']))
	{

	//	print_r('Nome: ' . $_POST['nome']);
	//	print_r('<br>');
	//	print_r('Email: ' . $_POST['email']);
	//	print_r('<br>');
	//	print_r('Telefone: ' . $_POST['telefone']);
	//	print_r('<br>');
	//	print_r('Idade: ' . $_POST['idade']);
	//	print_r('<br>');
	//	print_r('Sexo: ' . $_POST['genero']);
	//	print_r('<br>');
	//	print_r('Data de nascimento: ' . $_POST['data_nascimento']);
	//	print_r('<br>');
	//	print_r('Cidade: ' . $_POST['cidade']);
	//	print_r('<br>');
	//	print_r('Estado: ' . $_POST['estado']);
	//	print_r('<br>');
	//	print_r('Bairro: ' . $_POST['bairro']);
	//	print_r('<br>');
	//	print_r('Endereço: ' . $_POST['endereco']);

		include_once('config.php');

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$idade = $_POST['idade'];
		$genero = $_POST['genero'];
		$data_nascimento = $_POST['data_nascimento'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];
		$bairro = $_POST['bairro'];
		$endereco = $_POST['endereco'];

		$result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, idade, genero, data_nascimento, cidade, estado, bairro, endereco)
		VALUES ('$nome', '$email', '$telefone', '$idade', '$data_nascimento', '$cidade', '$estado', '$bairro', '$endereco')");
	}
	
?>