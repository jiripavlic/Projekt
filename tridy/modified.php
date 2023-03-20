<?php    
    
include "input.php";    
$sql = "select * from customer";    
$result = mysqli_query($conn,$sql);    
?>    
<html>    
    <body>    
        <link href = "../styl.css" type = "text/css" rel = "stylesheet" />    
		<link href = "styl.css" type = "text/css" rel = "stylesheet" />    
		<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Číslo pojištěnce</td>    
                <td>Jméno</td>     
                <td>Příjmení</td>          
                <td>Věk</td>    
                <td>Telefonní číslo</td>
                <td colspan = "2">Action</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->Customer_Num;?>  
				</td>  
				<td>  
					<?php echo $row->First_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Last_Name;?>  
				</td>    
				<td>  
					<?php echo $row->Vek;?>  
				</td>  
				<td> 
					<?php echo $row->Contact_Number;?>  
				</td>  
				<td> <a href="delete.php?id=<?php echo $row->Customer_Num;?>" onclick="return confirm('Are You Sure')">Delete    
				</a> </td>  
			</tr>  
		<?php } ?>  			
        </table>   		
	<?php header('Location:modified1.php');?>
    </body>    
</html>