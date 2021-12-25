<?php
    class Usuario {
        private $nome;
        private $telefone;
        private $email;
        private $senha;

        public function __construct() {
        }

        //Gets e sets
        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setSenha($senha) {
            $this->senha = $senha;
        }

        public function getSenha() {
            return $this->senha;
        }

        //Métodos

        public function cadastro($nome,$email,$senha,$telefone) {
            $resultado = false;
            include_once('conexao.php');
            $sql = $conexao->prepare("INSERT INTO usuario(nome,email,senha,telefone)
                            VALUES('$nome','$email',md5($senha),'$telefone')");
            $resultSql = $sql->execute();
            if($resultSql == true) {
                $resultado = true;
            }
            $conexao = null;
            return $resultado;
        }

        private function verificaLogin() {
            $resultado = false;
            include_once('conexao.php');
            $sql = $conexao->prepare("SELECT COUNT(*) AS total from usuario");
        }

    }

?>