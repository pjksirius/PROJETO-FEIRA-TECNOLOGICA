<?php 
    namespace App\model;

    class Usuario{
        private $id;
        private $nome;
        private $email;
        private $telefone;
        private $senha;

       // public function __construct($nome, $email, $senha){
       //     $this->nome = $nome;
       //     $this->email = $email;
         //   $this->senha = $senha;
        //} 

        public function getId(){
            return $this->id;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        public function setId($id){
            $this->id = $id;
        }
    }