<?php
$tableName = $_POST['tableName'];
$ownerID = $_POST['ownerID'];

include("connection.php");

$sql = "INSERT INTO `DbTable` (`tablename`, `ownerID`)
 VALUES ('$tableName','$ownerID')";

// INSERT INTO `user_accounts` (`userID`, `phone`, `userName`) VALUES ('11', '234-234-2342', 'A.Bich');

$checking = mysqli_query($conn, $sql);
$url = "../html/create_new_table.php";
if ($checking) 
        {
        $flag = 1;
         Header( 'Location: ../html/create_new_table.php?success=1' );
         exit();
        } 
        else 
        {
            if($conn->errno == 1062){
                $flag = 0;
            }
        }
        if($flag == 0){
            Header( 'Location: ../html/create_new_table.php?success=0' );
            exit();
        }
        mysqli_close($conn);


?>
