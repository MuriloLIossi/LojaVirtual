<?php 
    require_once("../database/dados.php");
    include('../views/components/funcoes.php');

 if (isset($_GET['id']) && array_key_exists($_GET['id'], $produtos)) {
     $produto_id = $_GET['id'];
     $produto = $produtos[$produto_id];
 }

$tipo_pro = $produto["tipo"];
$parc = number_format($produto["valor"]/$produto["parcelamento_max_sj"],2,",",".");;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/styles.css">
    <link rel="shortcurt icon" href="../../public/images/logo.png">
    <title>Metal Store</title>
</head>
<body>
    
<div class="title">
    <span class="img"> <img src="../../public/images/Título.PNG" alt=""> </span> 
</div>
<div class="buttons">
    <button><a href="../../index.php">Inicio</a></button>
    <button>Produtos</button>
    <button>Carrinho</button>
    <button>Pedidos</button>
    <button>Contato</button>
</div>
<div class="deta-prod">

<div class="imgprod">
<img src="../../public/images/<?= $produto["img"]; ?>" width="600px" height="600px" alt="">
</div>

<div class="infos-prod"> <!--Todas as informações relacionadas ao produto virá aqui-->

<span id="nome-prod">
    <h1><?= $produto['nome'];?></h1>
</span>

<span id="preco-prod">
    <h2 id="preco"><?= "R$ " .number_format( $produto["valor"],2,",","."); ?></h2>
</span>

<span id="info-parcelamento-prod">
    <h3><?= "Em até ".$produto['parcelamento_max_sj']."x de ".$parc." Sem juros"; ?></h3>
</span>

<span class="tipo-prod">
    <h3>Selecione o tamanho: <select class="tipo-prod"><?php tipo_produto($tipo_pro);?></select></h2>
</span>
<br>
<br>
<span id="comprar">
    <?php echo "<button class='comprar1' type = 'button'><a class='lk_comprar2' href='comprar.php?id=$produto_id'>Comprar</a></button>"; ?>
</span>

</div>



</div>
<br>
<br>
<div id="detalhes-prod">
<br>
<br>
<?= $produto["descricao"];?>

</div>

</body>
</html>