<html>
<head>
<title>Patient-Database</title>
     <link href="patient_database.css" rel="stylesheet">
</head>
<body >

    <?Php
    require "config.php"; // connection string is here
    //require "details.php";

    $q="select * from patient" ;
    //class= 'table table-stripped'
    if($stmt = $connection->query($q)){
        echo "<table  id='customers' > 
        <tr class = 'info'> <th> Patient ID </th> <th> Patient Name </th> </tr>";
        while($row = $stmt->fetch_array()){
            echo "<tr><td>$row[Patient_id]</td><td><a href=details.php?Patient_id=$row[Patient_id]>$row[Patient_name]</a></td></tr>";
        }

    //echo "<table>";
    //foreach ($dbo->query($sql) as $row) {
    //echo "<tr><td><a href=details.php?id=$row[Patient_id]>$row[Patient_name]</a></td></tr>";
    //}
        echo "</table>";
    }
    ?>
    
</body>
</html>
<!--
<th> Room No </th><th> Bed No </th><th> Initial_WT </th>
<th> Current_WT </th><th> Bed No </th><th>Status</th> -->
