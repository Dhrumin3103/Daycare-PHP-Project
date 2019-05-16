<?php
require './class/myclass.php';
connection_open();

?>


<html>
    <body>
        
    <center><h1>Akash InfoTech</h1></center>
    <hr>
    <?php 
    
    echo date('d-m-Y');
    
    ?>
    
    <h2><center>Student Report </center></h2>
    
    <form method="post">
                
             Fees1 : <input type="text" name="txt1">
             Fees2 : <input type="text" name="txt2">
             
             <input type="submit">
        
      
       
    </form>
    <?php 
    
    if($_POST)
    {
        $txt1 = $_POST['txt1'];
          $txt2 = $_POST['txt2'];
    $q = mysql_query("select * from  student where fees between $txt1 and $txt2") or die(mysql_error());
    
    
    echo "<table align='center' border='1'>";
    
    echo "<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Gender</th>
							<th>Mobile</th>
							<th>Address</th><th>City</th>
							  
						  </tr>";
    while($data = mysql_fetch_row($q))
    {
                echo "<tr>";
                                          echo  "<td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td>$data[7]</td>";
                                     
    }
    
    
    }
    ?>
    
    </body>
</html>