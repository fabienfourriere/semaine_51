<?php
        $date = date("d-m-Y");
          Print("Date du jour : $date");
        $date2 = date('d-m-Y', strtotime(' + 1 month'));
          Print(" Un mois plus tard : $date2");
      ?>