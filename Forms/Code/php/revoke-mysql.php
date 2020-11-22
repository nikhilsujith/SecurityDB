<?php

    include("connection.php");


    $ownerID = $_POST['ownerID'];
    $tableName = $_POST['tableName'];
    $pid = $_POST['pid'];
    $roleName = $_POST['roleName'];


    //Redirect Link
    $url = "../html/revoke.php";

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

                    $sql2 = "DELETE FROM has_access WHERE (pid = '$pid') and (roleName = '$roleName') and (tableName = '$tableName')";
                    $checking = mysqli_query($conn, $sql2);
                    // echo $checking;
                    if (mysqli_affected_rows($conn) !=0 )
                    {
                        // Privilege Revoked Successfully
                        $flag = 1;
                        break;

                    } else 
                    {
                    //if ($conn->errno == 1452) 
                    // Query Did Not Delete as Values did not match
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
        Header( 'Location: ../html/revoke.php?success=0' );
        exit();
    }
    else if($flag == 1){
        Header( 'Location: ../html/revoke.php?success=1' );
        exit();
    }
    else if($flag == 2){
        Header( 'Location: ../html/revoke.php?success=2' );
        exit();
    }

    mysqli_close($conn);

?>
