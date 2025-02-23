<?php


class Cliente(){

    private $nome;
    private $email;
    private $telefone;

    public function construct($nome, $email, $telefone){
        $this->nome=$nome;
        $this->email=$email;
        $this->telefone=$telefone;
    }

    public function getNome(){return $this->nome;    }
    public function setNome(){$this->nome = $nome;   }

    public function getEmail(){return $this->email;  }
    public function setEmail(){$this->email = $email;}

    public function getTelefone(){return $this->telefone;  }
    public function setTelefone(){$this->telefone = $telefone; }

    echo "Nome: " . $contato->getNome() . "<br>";
    echo "Email: " . $contato->getEmail() . "<br>";
    echo "Telefone: " . $contato->getTelefone() . "<br>";

}



?>