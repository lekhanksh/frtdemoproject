<html>
<head>
<title></title>
    <link href="patient_database.css" rel="stylesheet">
</head>
<body >

    <?Php
    require "config.php"; // database connection is here

    //////Displaying Data/////////////
    $id=$_GET['Patient_id'];        // Collecting data from query string
    //if(!is_numeric($id)){ // Checking data it is a number or not
    //echo "Data Error";    
    //exit;
    //}
    $query = "select * from patient where Patient_id = ?";
    if($stmt = $connection->prepare($query))
    {
        $stmt->bind_param('s', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_object();




        echo "<table id='customers'>";
        echo "
        <tr bgcolor='#f1f1f1'><td><b>Patient_ID</b></td><td>$row->Patient_id</td></tr>
        <tr><td><b>Patient_Name</b></td><td>$row->Patient_name</td></tr>
        <tr bgcolor='#f1f1f1'><td><b>Room_No</b></td><td>$row->Room_no</td></tr>
        <tr><td><b>Bed_No</b></td><td>$row->Bed_no</td></tr>
        <tr bgcolor='#f1f1f1'><td><b>Patient_Age</b></td><td>$row->Patient_Age</td></tr>
        <tr><td><b>Patient_BMI</b></td><td>$row->Patient_BMI</td></tr>
        <tr bgcolor='#f1f1f1'><td><b>Gender</b></td><td>$row->Gender</td></tr>
        ";
        echo "</table>";
    }
        //$count=$dbo->prepare("select * from patient where Patient_id=:id ");
    //$count->bindParam(":id",$id,PDO::PARAM_INT,3);
    //
    //
    //
    //if($count->execute()){
    //
    //echo " Success ";
    //
    //$row = $count->fetch(PDO::FETCH_OBJ);
    //
    //}
    ////////////////////  
    ?>
</body>
</html>


