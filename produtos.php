<?php
include "conexao.php";
include "menunav.php";

try {

    $sql = "SELECT * FROM tblprodutos";
    $qry = $conn->query($sql);
    $produtos = $qry->fetchAll(PDO::FETCH_OBJ);

}

catch (PDOException $e) {
    echo $e->getMessage();
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<h1>Produtos Cadastrados</h1>
<br>

<div class="container">
    <a href="cadnovoproduto.php" class="btn btn-primary">Novo</a>

    <br><br>

        <table class="table table-dark">

            <thead>

                <th>idproduto</th>
                <th>Produto</th>
                <th>Estoque</th>
                <th>Valor</th>
                <th colspan="2">Ações</th>


            </thead>

            <tbody>

                <?php foreach($produtos as $p) { ?>

                    <tr>

                        <th> <?php echo $p->idproduto ?> </th>
                        <th> <?php echo $p->produto ?> </th>
                        <th> <?php echo $p->estoque ?> </th>
                        <th> <?php echo $p->valor ?> </th>
                        <th>Editar</th>
                        <th>Excluir</th>


                    </tr>
                
                
                <?php } ?>


            </tbody>


        </table>


</div>


    
<?php
include "menuinf.php";
?>