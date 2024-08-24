<?php 

require("../database/dados.php");




function foreachCamisas() {
    $tamanhoscamisas = [
        "P",
        "M",
        "G", 
        "GG",
        "XGG",
    ];

    foreach($tamanhoscamisas as $tamanho) {
        echo "<option value='$tamanho'>$tamanho</option>";
    }
}

function tipo_produto($tipo_prodd) {
    $tipo_prod = $tipo_prodd;

    switch($tipo_prod) {
        case 1:
            for($tam = 34; $tam <= 45; $tam++){
                echo "<option value='$tam'>$tam</option>";
            }
            break;

        case 2:
            foreachCamisas();
            break;
    }
}


function select_parc($parcjr, $parcnj, $valorprod, $txjuros) {

if($parcjr > $parcnj)
{$max = $parcjr;}
else {$max = $parcnj;}

for ($laco = 1; $laco <= $max; $laco++){

    if ($laco <= $parcnj){
        echo "<option value='$laco'> ".$laco."X de R$".number_format(round($valorprod/$laco,2),2,",",".")." Sem juros</option>";
    }
    elseif ($laco <= $parcjr){
        $jr = $valorprod*$txjuros*$laco/100;
        $vlrtotal = $valorprod + $jr;
        $parcelamento = round($vlrtotal / $parcjr, 2);

        echo "<option  class='opcao-parc' value='$laco'>".$laco."X de R$".number_format($parcelamento, 2,",",".")." Com juros</option>";
    }

}


}

//select_parc(12, 10, 100.00, 0.87);
?>