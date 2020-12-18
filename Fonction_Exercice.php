<html>  
<body>
  <?php 
        function calculator($nb1, $nb2) 
        {              
            $addition = $nb1 + $nb2;
            $soustraction = $nb1 - $nb2;
            $multiplication = $nb1 * $nb2;
            $division = $nb1 / $nb2;

            $resultat = array($addition, $soustraction, $multiplication, $division);

            return $resultat; 
        }   

        $resultat = calculator(110, 10);

        echo"- Addition : ".$resultat["0"]."<br>";
        echo"- Soustraction : ".$resultat["1"]."<br>";
        echo"- Multiplication : ".$resultat["2"]."<br>";
        echo"- Division : ".$resultat["3"]."<br>";
  ?> 
</body>
</html>