<!DOCTYPE html>
<html>
<head>
	<title>Listado datos</title>
</head>
<body>
	<center><h3>TABOA BÁSICA</h3></center>
	<table class="table table-condensed">
    <thead>
      <tr>
        <th>Campo1</th>
        <th>Campo2</th>
        
      </tr>
    </thead>
    <tbody>
   	  <?php
  		foreach ($datos as $valor) {
    
       		echo "<tr><td><center>".$valor['colum1']."</center></td>";  
       		echo "<td><center>".$valor['colum2']."</center></td>";   
       		echo "</tr>"; 
    	} 
 	  ?>    
	</tbody>
	</table>
</body>
</html>