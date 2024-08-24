<?php 
    include("../database/dados.php");
    include('../views/components/funcoes.php');

 if (isset($_GET['id']) && array_key_exists($_GET['id'], $produtos)) {
     $produto_id = $_GET['id'];
     $produto = $produtos[$produto_id];
 }

 $parc = number_format($produto["valor"]/$produto["parcelamento_max_sj"],2,",",".");;
 $comjuros = $produto['parcelamento_max_cj'];
 $semjuros = $produto['parcelamento_max_sj'];
 $precoprod = $produto['valor'];
 $juros = $produto['juros'];
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
    <h1>Sua compra já está quase pronta!</h1>
</span>

<span id="preco-prod">
    <h2 id="preco"><?= $produto['nome'];?></h2>
</span>

<span id="info-parcelamento-prod">
    <h3><?= "R$ " .number_format( $produto["valor"],2,",","."); ?></h3>
</span>

<span class="selecionarparc">
    <h3>
        Selecione o Parcelamento desejado: <br>
        <select class="tipo-prod" name="Parcelamento" id="parc">
            <?php select_parc($comjuros, $semjuros, $precoprod, $juros);?>
        </select>
    </h4>
</span>
<br>
<br>
<span id="comprar">
    <?php //echo "<button class='comprar1' type = 'button'><a class='lk_comprar2' href='comprar.php?id=$produto_id'>Comprar</a></button>"; ?>
    <button class='comprar1' type = 'button'><a class='lk_comprar2' href='comprar2.php'>Comprar</a></button>
</span>

</div>


</body>
</html>