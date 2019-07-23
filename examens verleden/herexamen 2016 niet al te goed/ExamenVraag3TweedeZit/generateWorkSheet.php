
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Workouts</title>
    <link rel="stylesheet" type="text/css" href="css/worksheet.css">
</head>
<body>
    
    
    <h1>Push Yourself!</h1>
    <h3>Because No one else is going to do it for you !</h3>
      <?php
      
      //ik heb hier gewerkt met gewone php die een htlml genereerd en niet met printROundTable omdat ik niet juist wist hoe ik deze kon aanroepen of gebruiken en heb ik gewone php en html gebruikt ik hoop dat dit niet echt heel erg fout is
      
$totaalwerk;
$totaalrust;
$aantal = $_REQUEST["aantal"];
 $rounds = $_REQUEST["numberOfRounds"];
 
 for($i =1; $i<=$aantal; $i++){
     $oef.$i = $_REQUEST["exercise".$i];
 $tijd.$i = $_REQUEST["exercise1Duration".$i];
 $rust.$i = $_REQUEST["exercise1Rest".$i]; 
 }
 echo $oef1;
 
 
 for($i=1; $i<=$rounds;$i++){
     echo "round:" .$i;
     ?>
    <table>
        <?php
        $werktijd=0;
        $wachtijd =0;
        ?>
        
        <tr id="zwart">
            <td>Exercise</td>
            <td>Duration</td>
        </tr>
        <?php
        for($j =0; j<$aantal; $j++){
            ?>
        }
          <tr id="rood">
            <td><?php echo  $oef.$j; ?> </td>
            <td><?php echo $tijd.$j; $werktijd=$werktijd+tijd.$j; ?> </td>
        </tr>
        <tr id ="groen">
            <td>Rest</td>
            <td><?php echo $rust.$j; $wachtijd=$wachtijd+$rust.$j; ?></td>
        </tr>  
        }
       
        ?>
       
        
    </table>
    
     <?php
     echo "Working: ".$werktijd.$j." seconden, resting: ".$wachtijd.$j.".";
     $totaalwerk = $totaalwerk+$werktijd.$j;
     $totaalrust = $totaalrust+$wachtijd.$i;
 }
 
 
        echo "Total Working: ".$totaalwerk." seconds, total resting:".$totaalrust." seconds.";
        
 }    
        ?>
    
</body>
    </html>
  