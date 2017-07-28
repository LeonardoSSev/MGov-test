<?php

class Cliente {
    private $id;
    private $nome;
    private $email;
    private $cpf;
    private $celular;

    public function __construct($id, $nm, $em, $cpf, $cel){
        $this->id = $id;
        $this->nome = $nm;
        $this->email = $em;
        $this->cpf = $cpf;
        $this->celular = $cel;
    }

    public function create() {
        $c = new mysqli("localhost", "root", "", "projeto");
        if ($c->connect_error) {
            return "Falha de conexão com o banco: " . $c->connect_error;
        } else {
            $id = $this->id;
            $nome = $this->nome;
            $email = $this->email;
            $cpf = $this->cpf;
            $celular = $this->celular;

            if ($ps = mysqli_prepare($c, "INSERT INTO cliente VALUES(?,?,?,?,?)") or die(mysqli_error($c))) {
                $ps->bind_param("issss", $id, $nome, $email, $cpf, $celular);
                $ps->execute();
            } else {
                echo '<script> alert("Erro ao realizar cadastro"); </script>';

            }
            mysqli_close($c);;
        }
    }

    public static function delete($id){
        $c = mysqli_connect("localhost", "root", "", "projeto");
        if(!$c){
            return "Erro ao estabelecer conexão com o banco";
        } else {
            $ps = mysqli_prepare($c, "DELETE FROM cliente WHERE ID = ?") or die(mysqli_error($c));
            mysqli_stmt_bind_param($ps, "i", $id);
            mysqli_stmt_execute($ps);
        }
        mysqli_close($c);
    }

    public static function update($em, $cel, $id){
        $c = mysqli_connect("localhost", "root", "", "projeto");
        if(!$c){
            return "Erro ao estabelecer conexão com o banco";
        } else {

            if($ps = mysqli_prepare($c, "UPDATE cliente SET EMAIL=?, CELULAR=?, WHERE ID = ?") or die(mysqli_error($c))){
                mysqli_stmt_bind_param($ps, "ssi", $em, $cel, $id);
                mysqli_stmt_execute($ps);
            }else{
                echo '<script> alert("Não atualizou"); </script>';
            }
        }
        mysqli_close($c);
    }


    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getCelular(){
        return $this->celular;
    }

    public function setCelular($celular){
        $this->celular = $celular;
    }


}