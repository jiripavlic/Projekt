<html lang="cs-cz">    
    <head> 
        <meta charset="utf-8" />
        <title>Registrační formulář</title>    
    </head>    
    <body>    
        <link href = "styl.css" type = "text/css" rel = "stylesheet" /> 
		<link href = "../styl.css" type = "text/css" rel = "stylesheet" /> 	
		<ul>
			<li style="float:right;"><a href="../index.php"> Zpět na hlavní stranu</a></li>
		</ul>
		<h2>Nový pojištěnec</h2>    
        <form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" >    
            <div class = "container">
                <div class = "form_group">    
                    <label>Jméno:</label>    
                    <input type = "text" name = "First_Name" value = "" required />    
                </div>    
                                <div class = "form_group">    
                    <label>Příjmení:</label>    
                    <input type = "text" name = "Last_Name" value = "" required />    
                </div>  
                                <div class = "form_group">    
                    <label>Věk: </label>    
                    <input type = "text" name = "Vek" value = ""  required />    
                </div>
				<div class = "form_group">    
                    <label>Telefonní číslo: </label>    
                    <input type = "text" name = "Contact_Number" value = ""  required pattern="[0-9]{9}" />    
                </div>
				<div class = "form_group">    
                    <input type = "submit" value = "Odeslat"/>    
                </div>
				
            </div>    
        </form>    
    </body>    
</html>    