<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/styles.css">
    <link rel="shortcurt icon" href="./public/images/logo.png">
    <title>Metal Store</title>
</head>
<body>
    
<div class="title">
  <!--  <span class="nome"> <h1 class="nome">Metal Store</h1> </span>
    <span class="subt"> <h2 class="subtitulo">A loja do metaleiro</h2> </span>-->
    <span class="img"> <img src="./public/images/Título.PNG" alt=""> </span> 
</div>
<div class="buttons">
    <button>Inicio</button>
    <button>Produtos</button>
    <button>Carrinho</button>
    <button>Pedidos</button>
    <button>Contato</button>
</div>

<div class="container">
    <?php
       
       require_once('app/database/dados.php'); //requisição para usar os dados no foreach (dados no banco)
       foreach ($produtos as $id=> $produto){ //procura o id do produto
            include("app/views/components/card.php"); //chama card com o produto com os id especificados 
        }

    ?>
</div>

</body>
</html>