<?php

include("connection.php");


$ownerID = $_POST['ownerID'];
$tableName = $_POST['tableName'];
$pid = $_POST['pid'];
$roleName = $_POST['roleName'];


//Redirect Link
$url = "../html/relate-ternary.php";

//Flag
$flag = 0;

$sql1 = "SELECT * FROM DbTable";
$result = mysqli_query($conn, $sql1);

if ($result)
{
        // output data of each row
        while($row = mysqli_fetch_assoc($result))
        {   
            if(($ownerID == $row['ownerID']) && ($tableName == $row['tableName']))
            {
                    $sql2 = "INSERT INTO has_access values ('$pid','$roleName','$ownerID','$tableName')";
                    $checking = mysqli_query($conn, $sql2);
                    // echo $checking;
                    if($checking)
                    {
//                        Success, owner has assigned privilege on owned table to the said role
                        $flag = 1;
                        break;

                    }
                    else if($conn->errno == 1452){
//                        Error because table is not given the said relation privilege.
//                        Add the relation privilege pid first in relations_privilege table
                        $flag = 0;
                        break;
                    }

            }
            else{
                $flag = 2;

            }

        }    
}
else
{
    echo "Query Error";
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

if($flag == 0)
{
    Header( 'Location: ../html/relate-ternary.php?success=0' );
    exit();
}
else if($flag == 1){
    Header( 'Location: ../html/relate-ternary.php?success=1' );
    exit();
}
else if($flag == 2){
    Header( 'Location: ../html/relate-ternary.php?success=2' );
    exit();
}

mysqli_close($conn);

?>
