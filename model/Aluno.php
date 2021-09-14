<?php


  class Aluno {
    protected $nome;
    protected $ra;
    protected $nota1;
    protected $nota2;
    protected $nota3;
    protected $nota4;

    
    public function __construct($nome, $ra, $nota1, $nota2, $nota3, $nota4) 
    {
      $this->nome = $nome;
      $this->ra = $ra;
      $this->nota1 = $nota1;
      $this->nota2 = $nota2;
      $this->nota3 = $nota3;
      $this->nota4 = $nota4;
    }

    public function setNome($nome) 
    {
      $this->nome = $nome;
    }

    public function getNome() 
    {
      return $this->nome;
    }

    public function setRa($ra) 
    {
      $this->ra = $ra;
    }

    public function getRa() 
    {
      return $this->ra;
    }

    public function setNota1($nota1) 
    {
      $this->nota1 = $nota1;
    }

    public function getNota1() 
    {
      return $this->nota1;
    }

    public function setNota2($nota2) 
    {
      $this->nota2 = $nota2;
    }

    public function getNota2() 
    {
      return $this->nota2;
    }

    public function setNota3($nota3) 
    {
      $this->nota3 = $nota3;
    }


    public function getNota3()
    {
      return $this->nota3;
    }


    public function setNota4($nota4) 
    {
      $this->nota4 = $nota4;
    }
    public function getNota4() 
    {
      return $this->nota4;
    }


    public function getMedia() 
    { 
      return ($this->nota1 + $this->nota2 + $this->nota3 + $this->nota4) / 4;
    }

  }
?>