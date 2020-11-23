<?php
include("connection.php");

$ownerID = $_POST['ownerID'];
$tableName = $_POST['tableName'];
$pid = $_POST['pid'];


//Redirect Link
$url = "../html/add-relation-privilege.php";

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
            if(($pid == 100) || ($pid == 101))//Check if Privilege being added is Create / Drop Respectively.
            {
                $flag = 7;
            break;
            }
            else
            {
                $sql2 = "INSERT INTO relation_privileges values ('$pid','$tableName','$ownerID')";
                $checking = mysqli_query($conn, $sql2);
                // echo $checking;
                if($checking)
                {
                    $flag = 1;
                    break;

                }
                else{
                    $flag = 0;
                    break;
                }

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
    Header( 'Location: ../html/add-relation-privilege.php?success=0' );
    exit();
}
else if($flag == 1){
    Header( 'Location: ../html/add-relation-privilege.php?success=1' );
    exit();
}
else if($flag == 2){
    Header( 'Location: ../html/add-relation-privilege.php?success=2' );
    exit();
}
else if($flag == 7){
    Header( 'Location: ../html/add-relation-privilege.php?success=7' );
    exit();
}

mysqli_close($conn);

?>
