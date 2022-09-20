<?php

require_once("config.php");

// Carrega um usuário
//$joao = new Usuario();
//$joao->loadById(10);
//echo $joao;

// Carrega um lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carrega uma lista de usuários, buscando pelo login
//$search = Usuario::search("a");
//echo json_encode($search);

// Carrega um usuário usando o login e a senha
$usuario = new Usuario();

$usuario->login("pedim", "rotary");

echo $usuario;

/*

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

*/

?>