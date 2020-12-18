<?php
      $finForm = new DateTime('2021-05-07');
      $today = new DateTime();
      $temps = $finForm->diff($today);
      echo "Il reste ".$temps->days." jours.";
?>
