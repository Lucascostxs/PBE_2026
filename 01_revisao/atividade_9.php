<?php

$idade = 16;
$acompanhate = TRUE;

if ($idade >=18){
    echo "Liberado";
}
elseif ($idade > 14 or $idade < 17){
    if ($acompanhate == TRUE){
        echo "LIBERADO";
}
    else{
        echo "Bloqueado";
    }
}

elseif ($idade < 14){
        echo "Bloqueado";
}
?>