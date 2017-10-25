<?php
 //ophalen tijd 
$StartTijd=1508949042;
  $VerstrekenTijd = time()-$StartTijd;
    echo $StartTijd;
    echo "<br>"."<br>";
    echo $VerstrekenTijd;
    echo "<br>"."<br>";
    
//te betalen bedrag
  $Tarief = array(.75,.50,.25);  
    
   $uur1 = ($VerstrekenTijd/(60*60))*$Tarief[0];
   echo round($uur1,2)."<br>";
   $uur2 = ($VerstrekenTijd/(60*60))*$Tarief[1];
   echo round($uur2,2)."<br>";
   $uur3 = ($VerstrekenTijd/(60*60))*$Tarief[2];
   echo round($uur3,2)."<br>";
    
    
    
  ?> 
