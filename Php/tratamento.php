<?php


class JOBS {
    public $cabecalho;
    public $legenda; 
    public $data;
    public $selecao1; 
    public $selecao2;
    public $selecao3;
    public $salario;
    public $local; 
    public $opcaoVaga; 
    public $descritivo; 

    public function __construct($cabecalho, $legenda, $data, $selecao1, $selecao2 ,$selecao3, $salario, $local, $opcaoVaga, $descritivo) 
    {


        $this->cabecalho = $cabecalho;
        $this->legenda = $legenda;
        $this->data = $data;
        $this->selecao1 = $selecao1;
        $this->selecao2 = $selecao2;
        $this->selecao3 = $selecao3;
        $this->salario = $salario;        
        $this->local = $local;
        $this->opcaoVaga = $opcaoVaga;
        $this->descritivo = $descritivo;
    }


}

