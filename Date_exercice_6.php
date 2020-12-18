<?php
$testDate = DateTime::createFromFormat('d/m/Y', $date);
$date = "17/17/2019"; 
$errors = DateTime::getLastErrors();
  if (!empty($errors['warning_count']))
{
   return FALSE;
}
  ?>