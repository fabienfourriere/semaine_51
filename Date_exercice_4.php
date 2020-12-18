<?php
    function NbJours($debut, $fin) {

        $tDeb = explode("-", $debut);
        $tFin = explode("-", $fin);
  
        $diff = mktime(0, 0, 0, $tFin[1], $tFin[2], $tFin[0]) - 
                mktime(0, 0, 0, $tDeb[1], $tDeb[2], $tDeb[0]);
        
        return($diff / 86400);
  
      }
      $Nombres_jours =  NbJours("2020-12-17", "2021-05-07");
      echo "Il reste " .$Nombres_jours. "jours";
    ?>