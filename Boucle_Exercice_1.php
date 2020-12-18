<html>  
<body>
  <?php 
$a = 0;

while ($a < 150) {
    $a += 1;

    if ($a % 2 == 0) {
        continue;
    }

    echo $a. "<br>";
}
  ?> 
</body>
</html>