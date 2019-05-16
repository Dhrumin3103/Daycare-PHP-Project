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
       
         <select name="txt1">
                  
                  <?php 
                  
                  $q = mysql_query("select * from city") or die(mysql_error());
                  
                  while($data = mysql_fetch_row($q))
                  {
                      echo "<option value='{$data[0]}'>$data[1]</option>";
                  }
                  
                  ?>
              </select>
          Gender : <select name="txt2">
            <option>Male</option>
            <option>FeMale</option>
        </select>
        
        <input type="submit">
       
    </form>
    <?php 
    
    if($_POST)
    {
        $txt1 = $_POST['txt1'];
          $txt2 = $_POST['txt2'];
    $q = mysql_query("select * from  student where cityid ='{$txt1}' and st_gender='{$txt2}'") or die(mysql_error());
    
    
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