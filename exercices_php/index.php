<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercices PHP Julie</title>
    <link rel="stylesheet" href="style/profile.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
  </head>
  <body>
    <h1>PHP module</h1>
    <h2>Exercices PHP</h2>
    <h3>
        Les variables <br>
        <?= "helloworld"; ?>
        <?= $intvar = 5; ?>
        <?= gettype($intvar); ?>
        <?= $myname= "Julie"; ?>
        <?= $boolean = false; ?>
        <?= gettype($boolean); ?>
    </h3>
    <h3>
        Les opérateurs <br>
        1/
        <?php $a = 12;
        $b = 10;
        $total = $a + $b;
        echo "\n \$total=".$total;
        ?>
        <br>
        2/
        <?= "\n \$a=".$a = 5 ; ?>
        <?php
        echo "\n \$b=". $b = 3;
        echo "\n \$c=". $c = $a + $b;
        echo "\n \$a=".$a =2;
        $c = $b-$a;
        echo "\n \$c=".$c;
        ?>
        <br>
        3/
        <?php $a=15; $b=23;
        echo "\n \$a=".$a." \$b=".$b;
        $c=$a;
        $a=$b;
        $b=$c;
        echo "\n \$a=".$a." \$b=".$b;
        ?>
        <br>
        4/
        <?php
        $prixHT =10;
        $nb_article = 2;
        $tva =20;
        $prixTTC;
        echo "<p>Prix HT : ".$prixHT."<br>
        Nombre d'article : ".$nb_article."<br>
        Taux TVA : ".$tva."<br>";
        $prixTTC = $prixHT + ($tva/100 * $prixHT);
        $prixTTC *= $nb_article;
        echo $prixTTC;
        ?>
    </h3>
    <h3>
    La concaténation <br>
    <?= $a="<p>Bonjour</p>" ?>
    <?php $a="<p>Bon"; $b="jour</p>";
        echo "<br>\$a.\$b = ".$a.$b;
    ?>
    <?php
        $c =10;
        // echo $a.$b.$c+1;
        $a="Bonjour";
        echo "<p>".$a." l'adrar</p>";
    ?>
    </h3>   
    <h3>
    Les fonctions <br>
    <?php 
    function soustraction($a, $b){
        return $a-$b;
    }
    echo "Soustraire 2 - 3 : ".soustraction(2,3);

    function arrondi($c){
        return round($c);
    }
    echo "<br> Arrondir 2.56 : ". arrondi(2.56);

    function somme($a,$b,$c){
        return $a+$b+$c;
    }
    echo "<br> Somme : ".somme(1,2,3);
    
    function moyenne($a,$b,$c){
        $moyenne = somme($a, $b,$c)/3;
        return $moyenne;
    }
    echo "<br> Moyenne : ".moyenne(10,12,13)
        ."<br> Moyenne arrondie : ".arrondi(moyenne(10,12,13)) 
    ;
    ?>
    </h3>   
    <h3>
    Les conditions <br>
    <?php
        function test($c){
            if($c > 0 ){
                return "Le nombre ".$c." est positif.";
            }else{
                return "Le nombre ".$c." est négatif.";
            }
        }
        echo test(10225);

        function leplusgrand($a, $b, $c){
            if($a!=$b || $b!=$c || $a!=$c){
                if($a >= $b && $a >= $c){
                    return $a.' est le plus grand';
                }else if( $b >= $a && $b >= $c ){
                    return $b.' est le plus grand';
    
                }else if($c >= $b && $c >= $a){
                    return $c.' est le plus grand';
    
                }
            }
            else{
                return "Ils sont égaux.";
            }
        }
        echo "<br>".leplusgrand(1010,1010,10);

        function lepluspetit($a, $b, $c){
            if($a!=$b || $b!=$c || $a!=$c){
                if($b > $c && $a > $c){
                    return $c.' est le plus petit';
                }else if( $a >= $b && $c >= $b ){
                    return $b.' est le plus petit';

                }else if($c >= $a && $b >= $a){
                    return $a.' est le plus petit';

                }                
            }else{
                return "Ils sont égaux.";
            }
        }
        echo "<br>".lepluspetit(101,101,-101);
    ?>
    </h3>
    <h3>
    Les tableaux <br>
    <?php
        $array = [120, 120, 120, 120];
        function maxArray($arr = []){
            $max = null;
            foreach ($arr as $key => $nb) {
                $number = $nb;
                if($number > $max){
                    $max = $number;
                }
            }
            return $max;
        }
        echo "<br>Le plus grand nombre est ".maxArray($array);
        
        $arrayavg = [10,10];
        function avgArray($arr = []){
            $number = null;
            $i = null;
            foreach ($arr as $key => $nb) {
                $number += $nb;
                $i++;
            }
            return $number/$i;
        }
        echo "<br>La moyenne du tableau est ".avgArray($arrayavg);

        $array2 = [120, 12, 120, 120];
        function minArray($arr = []){
            $min = null;
            foreach ($arr as $key => $nb) {
                $number = $nb;
                if($number < $min){
                    $min = $number;
                }
            }
            return $min;
        }
        echo "<br>Le plus petit nombre est ".minArray($array2);
    ?>
    </h3>  
</html>
