<?php
$date = new DateTime();
    for ($i = 0; $i < 4; $i++)
    {
        $date->modify('+1 years');
        if ($date->format('L') == 1)
        {
            ?>
               La prochaine année bissextile sera : <?= $date->format('Y') ?>
               <?php
        }
    }
    ?>