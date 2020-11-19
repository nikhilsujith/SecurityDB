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
                    $sql2 = "INSERT INTO relation_privileges values ('$pid','$ownerID','$roleName','$tableName')";
                    $checking = mysqli_query($conn, $sql2);
                    // echo $checking;
                    if($checking)
                    {
                        // echo "query success";
                        echo '<script type="text/javascript">';
                        echo 'window.location.href="'.$url.'";';
                        echo '</script>';
                        echo '<noscript>';
                        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
                        echo '</noscript>';
                        exit();

                    }
                    else{

                        echo "Query Error";
                        echo "Error: " . $sql2 . "<br>" . $conn->error;
                    }

            }
            else{
                $flag = 1;
                // echo "Owner Does Not Print The Table";
                // echo "Error: " . $sql . "<br>" . $conn->error;
            }

        }    
}
else
{
    echo "Query Error";
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

if($flag ==1)
{
    echo "The Owner ID Entered does not own the Table provided.";
    // echo "query success";
    // echo '<script type="text/javascript">';
    // echo 'window.location.href="'.$url.'";';
    // echo '</script>';
    // echo '<noscript>';
    // echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
    // echo '</noscript>';
    exit();
}

mysqli_close($conn);

?>
