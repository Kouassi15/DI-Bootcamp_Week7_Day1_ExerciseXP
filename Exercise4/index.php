<?php

class CalculateDate
{
   public function differenceDates()
   {
    $date1 = new DateTime("1981-11-03");
    $date2 = new DateTime("2013-09-04");
    $interval = $date1->diff($date2);
    echo " La difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";
   } 
}
 $calculates = new CalculateDate();
 $calculates->differenceDates();
?>