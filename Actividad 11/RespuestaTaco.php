<?php
    $a=0;
    $b=0;
    $c=0;
    $d=0;

    $arreglo = [ $_POST["P1"], $_POST["P2"],$_POST["P3"],$_POST["P4"],$_POST["P5"],$_POST["P6"],$_POST["P7"],$_POST["P8"],$_POST["P9"],$_POST["P10"]];
    for( $i=0; $i<count($arreglo); $i++){
        switch ($arreglo[$i]){
            case 'A':
                $a+=1;
            break;
            case 'B':
                $b+=1;
            break;
            case 'C':
                $c+=1;
            break;
            case 'D':
                $d+=1;
            break;
        }
    }
    
    echo "A=".$a;
    echo "B=".$b;
    echo "C=".$c;
    echo "D=".$d;

    if( $a>$b && $a>$c && $a>$d){
        echo "<h1>Eres un Taco al Pastor</h1>";
    }
    else if( $b>$a && $b>$c && $b>$d){
        echo "<h1>Eres un Taco de Suadero</h1>";
    }
    else if( $c>$a && $c>$b && $c>$d){
        echo "<h1>Eres un Taco de Barbacoa</h1>";
    }
    else if( $d>$a && $d>$b && $d>$c){
        echo "<h1>Eres un Taco Lagunero</h1>";
    }
    else if($a==$b && $a<>0 && $b<>0 && $c<>$d){
        echo "<h1>Eres un Taco Campechano</h1>";
    }
    else if($b==$c && $b<>0 && $c<>0 && $a<>$d){
        echo "<h1>Eres un Taco de Carnitas</h1>";
    }
    else if($c==$d && $c<>0 && $d<>0 && $a<>$b){
        echo "<h1>Eres un Taco Bell</h1>";
    }
    else if($a==$d && $a<>0 && $d<>0 && $b<>$c){
        echo "<h1>Eres un Taco Light</h1>";
    }
    else if($a==$c && $a<>0 && $c<>0 && $b<>$d){
        echo "<h1>Eres un Taco Placero</h1>";
    }
    else if($b==$d && $b<>0 && $d<>0 && $a<>$c){
        echo "<h1>Eres un Taco de Mixiote</h1>";
    }
    else {
        echo "<h1>Eres un Taco de Sal</h1>";
    }

?>