<?php
    $userID = $_POST['userID'];
    $roleName = $_POST['roleName'];

    include("connection.php");
$sql = "UPDATE `user_role` SET `userID` = '$userID' WHERE (`roleName` = '$roleName') and (`userID` = '15')";



$checking = mysqli_query($conn, $sql);
$url = "../html/relate_account_to_role.php";
if ($checking) 
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
        else 
        {   
            echo "Query Error";
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        mysqli_close($conn);

?>
