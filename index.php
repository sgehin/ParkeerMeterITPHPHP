<?php
 //ophalen tijd 
$StartTijd=1508949042;
  $VerstrekenTijd = time()-$StartTijd;
    echo $StartTijd;
    echo "<br>"."<br>";
    echo $VerstrekenTijd;
    echo "<br>"."<br>";
    
//te betalen bedrag
  $Tarief = .75;  
    
   $uur1 = ($VerstrekenTijd/(60*60))*$Tarief;
   echo $uur1;
   
    
    
    
  ?>
