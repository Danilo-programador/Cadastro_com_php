<?php
   try {
        $username = 'root';
        $password = 'Mariana271117';
        $conexao = new PDO('mysql:host=localhost;dbname=projetoPhp', $username, $password);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($conexao == false) {
            $erro = throw new Exception('Erro na conexão');
        }
   }
   catch(PDOException $erro) {
       echo $erro->getMessage();
       header('location: //localhost/Login_e_cadastro_com_php/php/login.php?erronaconexao');
   }
?>