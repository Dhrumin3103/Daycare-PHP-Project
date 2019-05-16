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
        
        Name : <input type="text" name="gender">
        <input type="submit">
    </form>
    <?php 
    
    if($_POST)
    {
        $gender = $_POST['gender'];
    $q = mysql_query("select * from  student where st_name like '%{$gender}%'") or die(mysql_error());
    
    
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
                                          echo  "<td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td>";
                                     
    }
    
    
    }
    ?>
    
    </body>
</html>