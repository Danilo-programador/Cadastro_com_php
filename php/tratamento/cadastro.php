<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        //Verifica se os dados existem e também se não estão vazias
        if(isset($_POST['nome'],$_POST['telefone'],$_POST['email'],$_POST['senha'],$_POST['cadastrar'])
           && !empty($_POST['nome']) && !empty($_POST['telefone']) && !empty($_POST['email']) &&
           !empty($_POST['senha'])) {

            //inclue o arquivo de funções
            include_once('../funcao/funcao.php');
            //recebe os dados
            $nome = limpar($_POST['nome']);
            $telefone = limpar($_POST['telefone']);
            $email = $_POST['email'];
            $senha = limpar($_POST['senha']);

            include_once('../conexao/usuario.php');

            $pessoa = new Usuario();

            $resultado = $pessoa->cadastro($nome,$telefone,$email,$senha);

            if($resultado == true) {
               header('location: //localhost/Login_e_cadastro_com_php/php/login.php?Cadastrado');
            }
            else {
               header('location: //localhost/Login_e_cadastro_com_php/php/cadastro.php?NaoCadastrado');
            }
        }
        else {
            echo "dados errados";
        }

    }
    else {
        echo "n entro";
    }

?>