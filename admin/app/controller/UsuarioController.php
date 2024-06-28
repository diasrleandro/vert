<?php
include_once "../conexao/Conexao.php";
include_once "../model/Usuario.php";
include_once "../dao/UsuarioDAO.php";

//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();

//pega todos os dados passado por POST

$d = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){


    $usuario->setTag($d['tag']);
    $usuario->setText($d['text']);
    $usuario->setText($d['title']);


    $usuariodao->create($usuario);

    header("Location: ../../");
} 
// se a requisição for editar
else if(isset($_POST['editar'])){

    
    $usuario->setId($d['id']);
    $usuario->setTag($d['tag']);
    $usuario->setText($d['text']);
    $usuario->setText($d['title']);

    $usuariodao->update($usuario);

    header("Location: ../../");
}
// se a requisição for deletar
else if(isset($_GET['del'])){

    $usuario->setId($_GET['del']);

    $usuariodao->delete($usuario);

    header("Location: ../../");
}else{
    header("Location: ../../");
}