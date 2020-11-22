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
        while($row = mysqli_fetch_assoc($result)) //row contains record of table name and owner id
        {
            //INPUT = 2 and managerTable - 106 temp
            //hrTable	1
            //managerTable	2
            //staffTable	3
            //new table	4
            //check if ownerID and owned table name match
            if(($ownerID == $row['ownerID']) && ($tableName == $row['tableName'])) 
            {
                $flag=1;
                $sql_relation = "SELECT pid,tableName FROM relation_privileges WHERE pid ='$pid' AND tableName = '$tableName'";
                $relation_check = mysqli_query($conn, $sql_relation);

                if(mysqli_num_rows($relation_check) !=0)
                {
                    // echo "Success";
                    $sql3 = "SELECT pid, roleName FROM account_privileges WHERE pid = '$pid' AND roleName = '$roleName'";
                    $checking3 = mysqli_query($conn, $sql3);

                    if(mysqli_num_rows($checking3) !=0)
                    {

                        $sql2 = "INSERT INTO has_access values ('$pid','$roleName','$ownerID','$tableName')";
                        $checking = mysqli_query($conn, $sql2);
                        if($checking)
                        {
                            $flag=1;
                            break;
                        }
                    }
                    else
                    {
                        $flag = 8;
                        break;
                        // echo "No account priv for entered role";
                    }


                    
                }
                else 
                {
                    $flag = 9; // Priv Not Granted on Table
                    break;
                }

            }
            else
            {
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
    else if($flag == 8){
        Header( 'Location: ../html/relate-ternary.php?success=8' );
        exit();
    }
    else if($flag == 9){
        Header( 'Location: ../html/relate-ternary.php?success=9' );
        exit();
    }

    mysqli_close($conn);

?>
