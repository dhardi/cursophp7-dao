<?php 

require_once("config.php");
// carrega um usuario 
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

// carrega uma lista de usuarios 
////$list = usuario::getList();
//echo json_encode($list);

//carrega uma lista de usuario buscando pelo login
////$search = Usuario::search("e");
////echo json_encode($search);
////carrega um usuario usando login e senha 

////$usuario = new Usuario();
////$usuario->login("denis","veloster@123");
////echo $usuario;


//criando um novo usuario
 //$aluno = new Usuario("aluno","@alun0");
 
 //$aluno->insert();

//echo $aluno;

//alterar um usuario 
//$usuario = new Usuario();

////$usuario->loadById(8);
////$usuario->update("professor","veloster@123");

//echo $usuario; 
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;

 ?>