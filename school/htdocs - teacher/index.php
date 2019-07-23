        <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        if ( isset($_REQUEST["verzendknop"]))
        {
            $dob1 = $_REQUEST["dob1"];
            $dob2 = $_REQUEST["dob2"];
            $dob3 = $_REQUEST["dob3"];
            $inzet = $_REQUEST["inzet"];
            
            $zijden1 = 	(int) $dob1[1];
            $gooi1 = mt_rand(1, $zijden1);
            
            $zijden2 = 	(int) $dob2[1];
            $gooi2 = mt_rand(1, $zijden2);
            
            $zijden3 = 	(int) $dob3[1];
            $gooi3 = mt_rand(1, $zijden3);
            
            $resultaat=0;
            if ( $gooi1===$gooi2 && $gooi2===$gooi3)
            {
                $resultaat = ($zijden1+$zijden2+$zijden3)*$inzet;
            }
            ?>
        
        <table>
			<tr> 
				<td> inzet </td> 
				<td> <?php echo $inzet;?> </td> 		
			</tr>
                        <tr> 
				<td> gooi1 </td> 
				<td> <?php echo $gooi1;?> </td> 		
			</tr>
                        <tr> 
				<td> gooi2 </td> 
				<td> <?php echo $gooi2;?> </td> 		
			</tr>
			<tr> 
				<td> gooi3 </td> 
				<td> <?php echo $gooi3;?> </td> 		
			</tr>
                        
			<tr> 
				<td> resultaat </td> 
				<td> <?php echo $resultaat;?> </td> 		
			</tr>
        </table>
        <?php
        
        }
        else
        {
          
          ?>
          <form action="index.php" method="get">
		<table>
		<tr>
			<td><label for="selectDob1">Dobbelsteen 1</label></td>
	        <td><select id="selectDob1" name = "dob1" >
					<option value = "d2">d2</option>
					<option value = "d4">d4</option>
					<option value = "d6">d6</option>
			</select> </td>
		</tr>
		<tr>
			<td><label for="selectDob2">Dobbelsteen 2</label></td>
	        <td><select id="selectDob2" name = "dob2" >
					<option value = "d2">d2</option>
					<option value = "d4">d4</option>
					<option value = "d6">d6</option>
			</select> </td>
		</tr>
		<tr>
			<td><label for="selectDob3">Dobbelsteen 3</label></td>
	        <td><select id="selectDob3" name = "dob3" >
					<option value = "d2">d2</option>
					<option value = "d4">d4</option>
					<option value = "d6">d6</option>
			</select> </td>
		</tr>
		<tr>
			<td><label for="inzet">Inzet: </label></td>
        	<td><input type="text" id="inzet" name = "inzet"></td>
	</tr>
	<tr><td>
	<input type="submit" value="verzend" name = "verzendknop"> </td>
	</tr>
	</table>	
</form>	
        
 <?php
        }
 ?>
    </body>
</html> 
