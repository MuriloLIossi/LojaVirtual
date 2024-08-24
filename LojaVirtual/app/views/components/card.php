<div class="card">
        <img id='img-card' src="public/images/<?= $produto["img"]; ?>" width="250px" height="250px" alt="">
        <div class="info-produto">
            <p class="produto"> <?php echo $produto["nome"];?> </p>
            <p> <?php echo "R$ " .number_format( $produto["valor"],2,",",".");?> </p>
            <p> <?php echo "Até ".$produto["parcelamento_max_sj"]."x R$ ".number_format($produto["valor"]/$produto["parcelamento_max_sj"],2,",",".")." Sem juros"; ?> </p>
  
            
        <div>
        <?php echo "<button class='comprar_card' type = 'button'><a class='lk_detalhes' href='app/pages/comprar.php?id=$id'>Comprar</a></button>"; ?>
            <?php echo "<button class='detalhes_card' type = 'button'><a class='lk_detalhes' href='app/pages/detalhes.php?id=$id'>Detalhes</a></button>"; ?>
        </div>
        </div>
    </div>


