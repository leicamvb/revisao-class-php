<?php
class produtos{
    public $id, $nome, $descricao;
    public $preco, $qtd;
    public $taxa;
    public $frete;

    public function __construct($id, $nome, $descricao, $preco, $qtde, $taxa) {
        $this->id=$id;
        $this->nome=$nome;
        $this->descricao=$descricao;
        $this->preco=$preco;
        $this->qtde=$qtde;
        $this->taxa=$taxa;
    }

    public function calcular_frete(){ 
        return (($this->preco*$this->qtde)*$this->taxa);
    }
}
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $produto1 = New produtos(1,'arroz','arroz tipo a',10,5,1.1);
        
        echo "O valor do frete é R$ {$produto1->calcular_frete()} ";
    ?>

</body>
</html>